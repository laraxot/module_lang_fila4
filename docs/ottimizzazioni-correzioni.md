# Lang Module - Ottimizzazioni e Correzioni

## Panoramica
Il modulo Lang gestisce localizzazione e traduzioni. L'analisi rivela problemi significativi nel codice e nella struttura.

## 🚨 Problemi Critici

### 1. TranslationFileResource - Codice Non Funzionale
**Problema critico:**
```php
public static function getFormSchema(): array
{
    return [];  // ❌ Form schema vuoto!
    /* Codice commentato... */
}
```

**Impatto:** Resource completamente non funzionale per editing.

**Correzione immediata:**
```php
public static function form(Form $form): Form
{
    return $form->schema([
        Section::make('File Information')->schema([
            TextInput::make('key')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('File Key'),
                
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('File Name'),
                
            TextInput::make('path')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('File Path'),
        ]),
        
        Section::make('Translations')->schema([
            Components\KeyValue::make('content')
                ->label('Translations')
                ->keyLabel('Key')
                ->valueLabel('Value')
                ->addActionLabel('Add Translation')
                ->deleteActionLabel('Remove')
                ->reorderable()
                ->columnSpanFull(),
        ]),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('key')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('path')
                ->limit(50),
            Tables\Columns\TextColumn::make('translations_count')
                ->getStateUsing(fn($record) => count($record->content ?? []))
                ->label('Translations'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\Action::make('export')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(fn($record) => $this->exportTranslations($record)),
        ]);
}
```

### 2. Struttura File PHP di Traduzione
**Problemi nel file txt.php:**
```php
grep -n "description.*=>.*options\." /path/to/txt.php
```

**Problemi identificati:**
- Sintassi inconsistente
- Possibili errori di parsing
- Struttura non standard

**Correzione:**
```php
// Esempio struttura corretta lang/it/txt.php
return [
    'options' => [
        'description' => 'Opzioni di configurazione',
        'title' => 'Opzioni Sistema',
    ],
    'forms' => [
        'save' => 'Salva',
        'cancel' => 'Annulla',
        'delete' => 'Elimina',
    ],
    'messages' => [
        'success' => 'Operazione completata con successo',
        'error' => 'Si è verificato un errore',
    ],
];
```

## 🔧 Ottimizzazioni Tecniche

### 1. Translation Management Service
```php
class TranslationService
{
    public function getTranslationFiles(string $locale = null): Collection
    {
        $locale = $locale ?? app()->getLocale();
        
        return collect(File::allFiles(lang_path($locale)))
            ->map(function ($file) use ($locale) {
                return [
                    'key' => $file->getBasename('.php'),
                    'name' => $file->getFilename(),
                    'path' => $file->getPathname(),
                    'content' => include $file->getPathname(),
                    'locale' => $locale,
                ];
            });
    }

    public function updateTranslation(string $file, string $key, string $value, string $locale = null): bool
    {
        $locale = $locale ?? app()->getLocale();
        $path = lang_path("{$locale}/{$file}.php");
        
        if (!File::exists($path)) {
            return false;
        }

        $translations = include $path;
        data_set($translations, $key, $value);
        
        $content = "<?php\n\nreturn " . var_export($translations, true) . ";\n";
        
        return File::put($path, $content) !== false;
    }

    public function exportTranslations(string $locale, string $format = 'json'): string
    {
        $translations = $this->getAllTranslations($locale);
        
        return match ($format) {
            'json' => json_encode($translations, JSON_PRETTY_PRINT),
            'csv' => $this->arrayToCsv($translations),
            default => throw new InvalidArgumentException("Unsupported format: {$format}"),
        };
    }

    private function getAllTranslations(string $locale): array
    {
        $translations = [];
        
        foreach (File::allFiles(lang_path($locale)) as $file) {
            $key = $file->getBasename('.php');
            $translations[$key] = include $file->getPathname();
        }
        
        return $translations;
    }
}
```

### 2. Enhanced TranslationFile Model
```php
class TranslationFile extends BaseModel
{
    protected $fillable = [
        'key',
        'name', 
        'path',
        'locale',
        'content',
    ];

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    // Attributes
    public function getTranslationsCountAttribute(): int
    {
        return count($this->content ?? []);
    }

    public function getMissingTranslationsAttribute(): array
    {
        $defaultLocale = config('app.fallback_locale', 'en');
        
        if ($this->locale === $defaultLocale) {
            return [];
        }

        $defaultFile = self::where('key', $this->key)
            ->where('locale', $defaultLocale)
            ->first();

        if (!$defaultFile) {
            return [];
        }

        return array_diff_key($defaultFile->content ?? [], $this->content ?? []);
    }

    // Scopes
    public function scopeForLocale($query, string $locale)
    {
        return $query->where('locale', $locale);
    }

    public function scopeWithMissingTranslations($query)
    {
        return $query->whereRaw('JSON_LENGTH(content) < (
            SELECT JSON_LENGTH(content) 
            FROM translation_files tf 
            WHERE tf.key = translation_files.key 
            AND tf.locale = ?
        )', [config('app.fallback_locale')]);
    }

    // Methods
    public function syncFromFile(): bool
    {
        if (!File::exists($this->path)) {
            return false;
        }

        $content = include $this->path;
        
        return $this->update(['content' => $content]);
    }

    public function saveToFile(): bool
    {
        $directory = dirname($this->path);
        
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $content = "<?php\n\nreturn " . var_export($this->content, true) . ";\n";
        
        return File::put($this->path, $content) !== false;
    }
}
```

### 3. Filament Actions Enhancement
```php
// In TranslationFileResource
public static function table(Table $table): Table
{
    return $table
        ->columns([...])
        ->actions([
            Tables\Actions\EditAction::make(),
            
            Tables\Actions\Action::make('sync_from_file')
                ->icon('heroicon-o-arrow-path')
                ->action(function ($record) {
                    $record->syncFromFile();
                    Notification::make()
                        ->title('File synced successfully')
                        ->success()
                        ->send();
                }),
                
            Tables\Actions\Action::make('export')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    Forms\Components\Select::make('format')
                        ->options([
                            'json' => 'JSON',
                            'csv' => 'CSV',
                            'xlsx' => 'Excel',
                        ])
                        ->default('json'),
                ])
                ->action(function ($data, $record) {
                    $service = app(TranslationService::class);
                    $content = $service->exportTranslations($record->locale, $data['format']);
                    
                    return response()->streamDownload(
                        fn() => print($content),
                        "translations-{$record->locale}.{$data['format']}"
                    );
                }),
                
            Tables\Actions\Action::make('check_missing')
                ->icon('heroicon-o-exclamation-triangle')
                ->color('warning')
                ->action(function ($record) {
                    $missing = $record->missing_translations;
                    
                    if (empty($missing)) {
                        Notification::make()
                            ->title('No missing translations')
                            ->success()
                            ->send();
                    } else {
                        Notification::make()
                            ->title('Missing ' . count($missing) . ' translations')
                            ->body('Keys: ' . implode(', ', array_keys($missing)))
                            ->warning()
                            ->send();
                    }
                }),
        ])
        ->headerActions([
            Tables\Actions\Action::make('import')
                ->icon('heroicon-o-arrow-up-tray')
                ->form([
                    Forms\Components\FileUpload::make('file')
                        ->acceptedFileTypes(['application/json', 'text/csv']),
                    Forms\Components\Select::make('locale')
                        ->options(config('app.available_locales', ['en' => 'English', 'it' => 'Italiano']))
                        ->required(),
                ])
                ->action(function ($data) {
                    // Import logic
                }),
        ]);
}
```

## 🌍 Localization Improvements

### 1. Locale Management
```php
// LocaleService
class LocaleService
{
    public function getAvailableLocales(): array
    {
        return config('app.available_locales', [
            'en' => ['name' => 'English', 'flag' => '🇺🇸'],
            'it' => ['name' => 'Italiano', 'flag' => '🇮🇹'],
        ]);
    }

    public function switchLocale(string $locale): void
    {
        if (!$this->isValidLocale($locale)) {
            throw new InvalidArgumentException("Invalid locale: {$locale}");
        }

        session(['locale' => $locale]);
        app()->setLocale($locale);
    }

    public function getCurrentLocale(): string
    {
        return session('locale', app()->getLocale());
    }

    public function isValidLocale(string $locale): bool
    {
        return array_key_exists($locale, $this->getAvailableLocales());
    }

    public function getTranslationProgress(string $locale): array
    {
        $defaultLocale = config('app.fallback_locale');
        
        if ($locale === $defaultLocale) {
            return ['progress' => 100, 'total' => 0, 'translated' => 0];
        }

        $defaultTranslations = $this->countTranslations($defaultLocale);
        $localeTranslations = $this->countTranslations($locale);

        return [
            'progress' => $defaultTranslations > 0 
                ? round(($localeTranslations / $defaultTranslations) * 100)
                : 0,
            'total' => $defaultTranslations,
            'translated' => $localeTranslations,
        ];
    }

    private function countTranslations(string $locale): int
    {
        $count = 0;
        
        foreach (File::allFiles(lang_path($locale)) as $file) {
            $translations = include $file->getPathname();
            $count += $this->countNestedKeys($translations);
        }
        
        return $count;
    }

    private function countNestedKeys(array $array): int
    {
        $count = 0;
        
        foreach ($array as $value) {
            if (is_array($value)) {
                $count += $this->countNestedKeys($value);
            } else {
                $count++;
            }
        }
        
        return $count;
    }
}
```

## 📊 Performance & Caching

### 1. Translation Caching
```php
// TranslationCacheService
class TranslationCacheService
{
    public function remember(string $key, string $locale = null): mixed
    {
        $locale = $locale ?? app()->getLocale();
        $cacheKey = "translations.{$locale}.{$key}";
        
        return Cache::remember($cacheKey, 3600, function () use ($key, $locale) {
            return trans($key, [], $locale);
        });
    }

    public function flush(string $locale = null): void
    {
        if ($locale) {
            Cache::flush("translations.{$locale}.*");
        } else {
            Cache::flush('translations.*');
        }
    }

    public function warmUp(): void
    {
        $locales = array_keys(app(LocaleService::class)->getAvailableLocales());
        
        foreach ($locales as $locale) {
            $this->warmUpLocale($locale);
        }
    }

    private function warmUpLocale(string $locale): void
    {
        foreach (File::allFiles(lang_path($locale)) as $file) {
            $key = $file->getBasename('.php');
            $this->remember($key, $locale);
        }
    }
}
```

## 🧪 Testing

### 1. Translation Tests
```php
class TranslationTest extends TestCase
{
    test('can load translation files')
    {
        $service = app(TranslationService::class);
        $files = $service->getTranslationFiles('en');
        
        $this->assertNotEmpty($files);
        $this->assertTrue($files->contains('key', 'app'));
    }

    test('can update translations')
    {
        $service = app(TranslationService::class);
        
        $result = $service->updateTranslation('test', 'greeting', 'Hello World');
        
        $this->assertTrue($result);
        $this->assertEquals('Hello World', trans('test.greeting'));
    }

    test('translation file resource displays correctly')
    {
        $file = TranslationFile::factory()->create();
        
        livewire(ListTranslationFiles::class)
            ->assertCanSeeTableRecords([$file]);
    }
}
```

## 🎯 Priorità

### 🔴 Critica (Immediata)
1. ✅ Fix TranslationFileResource form schema
2. ✅ Correggere sintassi file txt.php
3. ✅ Implementare table configuration

### 🟡 Alta
1. Translation management service
2. Import/export functionality  
3. Missing translations detection
4. Caching implementation

### 🟢 Media
1. Advanced locale management
2. Translation progress tracking
3. Performance optimizations
4. Testing coverage

## 💡 Conclusioni

Il modulo Lang ha gravi problemi funzionali che impediscono l'editing delle traduzioni. La priorità assoluta è ripristinare la funzionalità base prima di aggiungere features avanzate.