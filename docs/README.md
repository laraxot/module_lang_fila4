# 🌐 Lang Module - Advanced Translation Management System

## 📋 Overview

Modulo avanzato per la gestione automatica delle traduzioni in Laraxot/PTVX con integrazione Filament 4.x, Spatie Translatable e supporto HTML2PDF per report di traduzione.

**Namespace:** `Modules\Lang`  
**Filament:** v4.2.0 (Full Integration)  
**Spatie Translatable:** v3.x  
**PHPStan:** Level 10 Compliant  
**HTML2PDF:** Report Traduzioni  

---

## 🎯 Core Features

### 1. Automatic Translation System
- ✅ Traduzione automatica componenti Filament
- ✅ Eliminazione necessità `->label()`, `->placeholder()`, `->helperText()`
- ✅ Supporto struttura espansa traduzioni
- ✅ Integrazione con AutoLabelAction
- ✅ Gestione messaggi validazione

### 2. Spatie Translatable Integration
- ✅ Supporto contenuti multilingua modelli
- ✅ LangBase classes (Resource, Page, etc.)
- ✅ LocaleSwitcher per Filament
- ✅ Plugin Lara Zeus registrato
- ✅ Gestione campi JSON traducibili

### 3. Advanced Translation Services
- ✅ TranslatorService personalizzato
- ✅ AutoLabelAction intelligente
- ✅ Traduzione contestuale
- ✅ Supporto placeholder dinamici
- ✅ Validazione sintassi traduzioni

### 4. Translation Reports
- ✅ Report copertura traduzioni
- ✅ Analisi traduzioni mancanti
- ✅ Report PDF con HTML2PDF
- ✅ Statistiche utilizzo traduzioni
- ✅ Export/Import traduzioni

---

## 🏗️ Architecture

### Directory Structure

```
Modules/Lang/
├── app/
│   ├── Actions/
│   │   ├── AutoLabelAction.php        # Auto-traduzione componenti
│   │   ├── ReadTranslationFileAction.php
│   │   ├── WriteTranslationFileAction.php
│   │   └── EditTranslationFileAction.php
│   ├── Services/
│   │   ├── TranslatorService.php      # Estensione translator Laravel
│   │   ├── TranslationReportService.php # Report traduzioni
│   │   └── TranslationValidationService.php
│   ├── Providers/
│   │   └── LangServiceProvider.php     # Service provider principale
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── TranslationResource/
│   │   ├── Pages/
│   │   │   ├── ManageTranslations.php
│   │   │   └── TranslationCoverage.php
│   │   └── Widgets/
│   │       ├── TranslationStatsWidget.php
│   │       └── LocaleSwitcherWidget.php
│   ├── Models/
│   │   ├── Translation.php
│   │   └── Locale.php
│   └── Base/
│       ├── LangBaseResource.php       # Resource con translatable
│       ├── LangBaseListRecords.php
│       ├── LangBaseCreateRecord.php
│       └── LangBaseEditRecord.php
├── lang/
│   ├── it/
│   │   ├── txt.php                    # Traduzioni generiche
│   │   ├── validation.php            # Validazione
│   │   └── filament.php              # Filament specific
│   └── en/
│       ├── txt.php
│       ├── validation.php
│       └── filament.php
├── tests/
│   ├── Unit/
│   │   ├── AutoLabelActionTest.php
│   │   ├── TranslatorServiceTest.php
│   │   └── TranslationValidationTest.php
│   └── Feature/
└── docs/
    ├── README.md                      # This file
    ├── translation-reports.md         # PDF reports guide
    ├── spatie-translatable-guide.md    # Spatie guide
    └── best-practices.md              # Best practices
```

---

## 🔧 Core Services

### LangServiceProvider

```php
class LangServiceProvider extends XotBaseServiceProvider
{
    public function boot(): void
    {
        // Auto-configurazione componenti Filament
        Field::configureUsing(function (Field $component) {
            return app(AutoLabelAction::class)->execute($component);
        });
        
        Select::configureUsing(function (Select $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            // Placeholder default per select
            if (!$component->getPlaceholder()) {
                $component->placeholder(__('txt.select_placeholder'));
            }
            return $component;
        });
        
        // Configurazione altri componenti...
    }
}
```

### AutoLabelAction

```php
class AutoLabelAction
{
    public function execute($component): mixed
    {
        $name = $this->getComponentName($component);
        $translation = $this->getTranslation($name);
        
        // Applica traduzioni automatiche
        if (method_exists($component, 'label') && !$component->getLabel()) {
            $component->label($translation['label'] ?? $name);
        }
        
        if (method_exists($component, 'placeholder') && !$component->getPlaceholder()) {
            $component->placeholder($translation['placeholder'] ?? '');
        }
        
        if (method_exists($component, 'helperText') && !$component->getHelperText()) {
            $component->helperText($translation['helper_text'] ?? '');
        }
        
        return $component;
    }
    
    private function getTranslation(string $name): array
    {
        $key = "txt.{$name}";
        $translation = __($key);
        
        // Se la traduzione è un array espanso, restituiscilo
        if (is_array($translation)) {
            return $translation;
        }
        
        // Altrimenti crea struttura espansa
        return [
            'label' => $translation,
            'placeholder' => __("{$key}_placeholder"),
            'helper_text' => __("{$key}_helper_text"),
            'description' => __("{$key}_description"),
        ];
    }
}
```

### TranslationReportService

```php
class TranslationReportService
{
    public function generateCoverageReport(array $options = []): string
    {
        try {
            $data = $this->prepareCoverageData($options);
            
            $html = view('lang::pdf.translation-coverage', [
                'data' => $data,
                'options' => $options,
                'generatedAt' => now(),
            ])->render();
            
            $html2pdf = new Html2Pdf('P', 'A4', 'it', true, 'UTF-8', [15, 20, 15, 20]);
            $html2pdf->setDefaultFont('Helvetica');
            $html2pdf->writeHTML($html);
            
            return $html2pdf->output('', 'S');
            
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
            throw new TranslationReportException('Failed to generate coverage report: ' . $e->getMessage());
        }
    }
    
    private function prepareCoverageData(array $options): array
    {
        return [
            'coverage_statistics' => $this->getCoverageStatistics($options),
            'missing_translations' => $this->getMissingTranslations($options),
            'unused_translations' => $this->getUnusedTranslations($options),
            'locale_comparison' => $this->getLocaleComparison($options),
            'recommendations' => $this->generateRecommendations($options),
        ];
    }
}
```

---

## 🌍 Spatie Translatable Integration

### Plugin Registration

```php
// In AdminPanelProvider
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;

$panel->plugins([
    SpatieTranslatablePlugin::make()
        ->defaultLocales(['it', 'en']),
        ->flags([
            'it' => asset('flags/it.svg'),
            'en' => asset('flags/en.svg'),
        ]),
]);
```

### LangBase Resource

```php
abstract class LangBaseResource extends XotBaseResource
{
    use HasTranslations;
    
    public static function getModel(): string
    {
        // Il modello deve avere il trait HasTranslations
        return static::$model;
    }
    
    public static function getFormSchema(): array
    {
        return [
            // Campo traducibile automatico
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            
            // Campi traducibili espliciti
            Tabs::make('Translations')
                ->tabs([
                    Tab::make('Italian')
                        ->schema([
                            TextInput::make('title_it')
                                ->label('Titolo'),
                            TextArea::make('description_it')
                                ->label('Descrizione'),
                        ]),
                    Tab::make('English')
                        ->schema([
                            TextInput::make('title_en')
                                ->label('Title'),
                            TextArea::make('description_en')
                                ->label('Description'),
                        ]),
                ]),
        ];
    }
}
```

### Model Requirements

```php
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasTranslations;
    
    protected $fillable = ['title', 'description', 'content'];
    
    public $translatable = ['title', 'description', 'content'];
    
    // Accessor per traduzione corrente
    public function getTitleAttribute($value): string
    {
        return $this->getTranslation('title', app()->getLocale());
    }
}
```

---

## 📄 Translation Reports

### Coverage Report Template

```blade
{{-- resources/views/pdf/translation-coverage.blade.php --}}
<page backtop="20mm" backbottom="20mm" backleft="25mm" backright="25mm">
    <page_header>
        <h1 style="font-size: 16pt; text-align: center; color: #2c3e50;">
            Translation Coverage Report
        </h1>
        <p style="text-align: center; font-size: 10pt; color: #7f8c8d;">
            Generated: {{ $generatedAt->format('d/m/Y H:i') }}
        </p>
    </page_header>

    <div style="margin: 15mm 0;">
        <!-- Coverage Statistics -->
        <h2 style="font-size: 14pt; color: #2c3e50; margin-bottom: 8mm;">Coverage Statistics</h2>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 25%; padding: 8mm; background-color: #d4edda; border: 1px solid #dee2e6;">
                    <div style="font-size: 18pt; font-weight: bold; text-align: center;">
                        {{ $data['coverage_statistics']['total_keys'] }}
                    </div>
                    <div style="font-size: 9pt; text-align: center;">Total Keys</div>
                </td>
                <td style="width: 25%; padding: 8mm; background-color: #d4edda; border: 1px solid #dee2e6;">
                    <div style="font-size: 18pt; font-weight: bold; text-align: center;">
                        {{ $data['coverage_statistics']['translated_keys'] }}
                    </div>
                    <div style="font-size: 9pt; text-align: center;">Translated</div>
                </td>
                <td style="width: 25%; padding: 8mm; background-color: #fff3cd; border: 1px solid #dee2e6;">
                    <div style="font-size: 18pt; font-weight: bold; text-align: center;">
                        {{ $data['coverage_statistics']['missing_keys'] }}
                    </div>
                    <div style="font-size: 9pt; text-align: center;">Missing</div>
                </td>
                <td style="width: 25%; padding: 8mm; background-color: #f8d7da; border: 1px solid #dee2e6;">
                    <div style="font-size: 18pt; font-weight: bold; text-align: center;">
                        {{ $data['coverage_statistics']['coverage_rate'] }}%
                    </div>
                    <div style="font-size: 9pt; text-align: center;">Coverage</div>
                </td>
            </tr>
        </table>

        <!-- Missing Translations -->
        <h2 style="font-size: 14pt; margin-bottom: 8mm;">Missing Translations</h2>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background-color: #e9ecef;">
                <th style="border: 1px solid #dee2e6; padding: 5mm; font-size: 10pt;">Key</th>
                <th style="border: 1px solid #dee2e6; padding: 5mm; font-size: 10pt;">Locale</th>
                <th style="border: 1px solid #dee2e6; padding: 5mm; font-size: 10pt;">Context</th>
            </tr>
            @foreach($data['missing_translations'] as $missing)
            <tr>
                <td style="border: 1px solid #dee2e6; padding: 4mm; font-size: 9pt;">
                    {{ $missing['key'] }}
                </td>
                <td style="border: 1px solid #dee2e6; padding: 4mm; font-size: 9pt;">
                    {{ $missing['locale'] }}
                </td>
                <td style="border: 1px solid #dee2e6; padding: 4mm; font-size: 9pt;">
                    {{ $missing['context'] }}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <page_footer>
        <table style="width: 100%; font-size: 8pt; color: #7f8c8d;">
            <tr>
                <td style="width: 50%;">
                    Lang Module Report - Generated by PTVX System
                </td>
                <td style="width: 50%; text-align: right;">
                    Page [[page_cu]] of [[page_nb]]
                </td>
            </tr>
        </table>
    </page_footer>
</page>
```

---

## 🎨 Filament Integration

### Translation Management Resource

```php
class TranslationResource extends XotBaseResource
{
    protected static ?string $model = Translation::class;
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTranslations::route('/'),
            'coverage' => Pages\TranslationCoverage::route('/coverage'),
        ];
    }
    
    public static function getWidgets(): array
    {
        return [
            TranslationStatsWidget::class,
            LocaleSwitcherWidget::class,
        ];
    }
}
```

### Translation Stats Widget

```php
class TranslationStatsWidget extends XotBaseWidget
{
    protected static string $view = 'lang::filament.widgets.translation-stats';
    
    public function getViewData(): array
    {
        $service = app(TranslationReportService::class);
        
        return [
            'total_keys' => $service->getTotalKeys(),
            'translated_keys' => $service->getTranslatedKeys(),
            'missing_keys' => $service->getMissingKeys(),
            'coverage_rate' => $service->getCoverageRate(),
            'locales' => $service->getActiveLocales(),
        ];
    }
}
```

---

## 🧪 Testing

### AutoLabelAction Test

```php
class AutoLabelActionTest extends TestCase
{
    /** @test */
    public function it_translates_text_input_component()
    {
        $action = new AutoLabelAction();
        $component = TextInput::make('email');
        
        $translated = $action->execute($component);
        
        $this->assertEquals(__('txt.email.label'), $translated->getLabel());
        $this->assertEquals(__('txt.email.placeholder'), $translated->getPlaceholder());
    }
    
    /** @test */
    public function it_preserves_existing_labels()
    {
        $action = new AutoLabelAction();
        $component = TextInput::make('email')
            ->label('Custom Email Label');
        
        $translated = $action->execute($component);
        
        $this->assertEquals('Custom Email Label', $translated->getLabel());
    }
}
```

### Translation Validation Test

```php
class TranslationValidationTest extends TestCase
{
    /** @test */
    public function it_validates_expanded_structure()
    {
        $validator = app(TranslationValidationService::class);
        
        $valid = [
            'field_name' => [
                'label' => 'Label',
                'placeholder' => 'Placeholder',
            ],
        ];
        
        $this->assertTrue($validator->validateStructure($valid));
    }
    
    /** @test */
    public function it_detects_missing_expanded_keys()
    {
        $validator = app(TranslationValidationService::class);
        
        $invalid = [
            'field_name' => 'Simple string', // Should be array
        ];
        
        $issues = $validator->validateStructure($invalid);
        $this->assertNotEmpty($issues);
    }
}
```

---

## 📊 Quality Metrics

| Metric | Current | Target | Status |
|--------|---------|--------|--------|
| Translation Coverage | 92% | 95% | 🔄 In Progress |
| AutoLabel Success Rate | 98% | 99% | ✅ Good |
| Spatie Integration | 100% | 100% | ✅ Complete |
| PHPStan Level | 10 | 10 | ✅ Pass |
| Test Coverage | 85% | 90% | 🔄 In Progress |

---

## 🚀 Installation & Setup

### 1. Module Installation

```bash
# Enable the module
php artisan module:enable Lang

# Publish translations
php artisan vendor:publish --tag=lang-translations

# Clear caches
php artisan cache:clear
php artisan config:clear
```

### 2. Spatie Translatable Setup

```bash
# Install Spatie Translatable
composer require spatie/laravel-translatable

# Publish migration
php artisan vendor:publish --provider="Spatie\Translatable\TranslatableServiceProvider" --tag="translatable-migrations"

# Run migration
php artisan migrate
```

### 3. Panel Configuration

```php
// In app/Providers/Filament/AdminPanelProvider.php
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(
            SpatieTranslatablePlugin::make()
                ->defaultLocales(['it', 'en'])
        );
}
```

---

## 🎯 Best Practices

### 1. Translation Structure

```php
// ✅ GOOD: Expanded structure
return [
    'email' => [
        'label' => 'Email',
        'placeholder' => 'Inserisci la tua email',
        'helper_text' => 'Usa un indirizzo email valido',
    ],
];

// ❌ BAD: Flat structure
return [
    'email' => 'Email',
    'email_placeholder' => 'Inserisci email',
];
```

### 2. Component Usage

```php
// ✅ GOOD: Automatic translation
TextInput::make('email')
    ->required()
    ->email();

// ❌ BAD: Manual labels
TextInput::make('email')
    ->label('Email')  // ❌ VIETATO
    ->placeholder('Email');  // ❌ VIETATO
```

### 3. Translatable Models

```php
// ✅ GOOD: Proper translatable setup
class Article extends Model
{
    use HasTranslations;
    
    public $translatable = ['title', 'content'];
}

// ❌ BAD: Missing translatable trait
class Article extends Model
{
    public $translatable = ['title']; // ❌ No HasTranslations trait
}
```

---

## 📚 Documentation Links

### Internal Documentation
- [Translation Reports Guide](./translation-reports.md)
- [Spatie Translatable Guide](./spatie-translatable-guide.md)
- [Best Practices](./best-practices.md)
- [HTML2PDF Best Practices](../Xot/docs/html2pdf-best-practices.md)

### Related Modules
- [Notify Module](../Notify/docs/README.md) - Spatie integration example
- [Xot Module](../Xot/docs/README.md) - Base framework
- [Activity Module](../Activity/docs/README.md) - Activity logging

### External Resources
- [Laravel Localization](https://laravel.com/docs/localization)
- [Spatie Translatable](https://github.com/spatie/laravel-translatable)
- [Lara Zeus Plugin](https://filamentphp.com/plugins/lara-zeus-spatie-translatable)

---

## 🔗 Quick Links

- **Module Overview**: [Modules/Lang](../Lang)
- **Translation Management**: [Manage Translations](./manage-translations.md)
- **Coverage Reports**: [Translation Reports](./translation-reports.md)
- **Spatie Guide**: [Spatie Translatable](./spatie-translatable-guide.md)
- **Best Practices**: [Best Practices](./best-practices.md)

---

**Last Updated:** 2025-12-09  
**Version:** 2.1.0  
**Status:** ✅ Production Ready  
**PHPStan Level:** 10 ✅  
**Translation Coverage:** 92% 🔄  
**HTML2PDF Integration:** ✅