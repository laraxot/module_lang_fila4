<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
declare(strict_types=1);


namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Override;
<<<<<<< HEAD
use Filament\Schemas\Components\Section;
use Filament\Actions;
=======
<<<<<<< HEAD
=======
namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Components\Section;
use Filament\Actions;
=======
namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions;
use Filament\Forms\Components\Section;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
<<<<<<< HEAD
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Lang\Filament\Resources\TranslationFileResource;
>>>>>>> a12f125f4a (.)
=======
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Lang\Filament\Resources\TranslationFileResource;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

class EditTranslationFile extends XotBaseEditRecord
{
    protected static string $resource = TranslationFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcherRefresh::make('lang'),
            ...parent::getHeaderActions(),
            // ...
        ];
    }

    /**
     * @return array<string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    public function getTranslatableLocales()
    {
        return ['it', 'en'];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        /*
         * // Salva le traduzioni nel file
         * try {
         * $this->record->saveTranslations($data['content']);
         *
         * Notification::make()
         * ->title('Traduzioni salvate con successo')
         * ->success()
         * ->send();
         *
         * } catch (\Exception $e) {
         * Notification::make()
         * ->title('Errore durante il salvataggio')
         * ->body($e->getMessage())
         * ->danger()
         * ->send();
         *
         * // Previeni il salvataggio se c'è un errore
         * $this->halt();
         * }
         */
        /** @phpstan-ignore argument.type, property.nonObject */
        app(SaveTransAction::class)->execute($this->record->key, $data['content']);
<<<<<<< HEAD
=======
=======
    public function getTranslatableLocales(){
=======
    public function getTranslatableLocales()
    {
>>>>>>> b93ef594b4 (.)
        return ['it', 'en'];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        /*
         * // Salva le traduzioni nel file
         * try {
         * $this->record->saveTranslations($data['content']);
         *
         * Notification::make()
         * ->title('Traduzioni salvate con successo')
         * ->success()
         * ->send();
         *
         * } catch (\Exception $e) {
         * Notification::make()
         * ->title('Errore durante il salvataggio')
         * ->body($e->getMessage())
         * ->danger()
         * ->send();
         *
         * // Previeni il salvataggio se c'è un errore
         * $this->halt();
         * }
         */
        /** @phpstan-ignore argument.type, property.nonObject */
<<<<<<< HEAD
        app(SaveTransAction::class)->execute($this->record->key,$data['content']);
>>>>>>> a12f125f4a (.)
=======
        app(SaveTransAction::class)->execute($this->record->key, $data['content']);
>>>>>>> b93ef594b4 (.)
=======
    public function getTranslatableLocales(){
        return ['it', 'en'];
    }
   
    protected function mutateFormDataBeforeSave(array $data): array
    {
        /*
        // Salva le traduzioni nel file
        try {
            $this->record->saveTranslations($data['content']);
            
            Notification::make()
                ->title('Traduzioni salvate con successo')
                ->success()
                ->send();
                
        } catch (\Exception $e) {
            Notification::make()
                ->title('Errore durante il salvataggio')
                ->body($e->getMessage())
                ->danger()
                ->send();
                
            // Previeni il salvataggio se c'è un errore
            $this->halt();
        }
        */
        /** @phpstan-ignore argument.type, property.nonObject */
        app(SaveTransAction::class)->execute($this->record->key,$data['content']);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        //dddx(['record'=>$this->record,'data'=>$data]);
        return $data;
    }

    protected function afterSave(): void
    {
        // Ricarica il record per aggiornare i dati
        /** @phpstan-ignore method.nonObject */
        $this->record->refresh();
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    #[Override]
    public function getFormSchema(): array
    {
        return [
            Section::make('content')->schema(fn($record) => $this->makeFromArray($record->content, 'content')),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

    public function getFormSchema(): array
    {
        return [
            Section::make('content')
                ->schema(fn($record)=>$this->makeFromArray($record->content,'content'))
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getFormSchema(): array
    {
        return [
            Section::make('content')->schema(fn($record) => $this->makeFromArray($record->content, 'content')),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        ];
    }

    public function makeFromArray(array $array, string $prefix = ''): array
    {
        $fields = [];

        foreach ($array as $key => $value) {
<<<<<<< HEAD
            $fullKey = $prefix === '' ? $key : ($prefix . '.' . $key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $fullKey = $prefix === '' ? $key : ($prefix . '.' . $key);
=======
            $fullKey = $prefix === '' ? $key : $prefix . '.' . $key;
>>>>>>> a12f125f4a (.)
=======
            $fullKey = $prefix === '' ? $key : ($prefix . '.' . $key);
>>>>>>> b93ef594b4 (.)
=======
            $fullKey = $prefix === '' ? $key : $prefix . '.' . $key;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

            if (is_array($value)) {
                $fields[] = Section::make($key)
                    ->label($fullKey)
                    ->schema(self::makeFromArray($value, $fullKey))
                    ->columns(2);
            } else {
                $fields[] = TextInput::make($fullKey)
                    //->label($fullKey)
                    ->label($key)
<<<<<<< HEAD
                    ->default($value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ->default($value);
=======
                    ->default($value)
                    ;
>>>>>>> a12f125f4a (.)
=======
                    ->default($value);
>>>>>>> b93ef594b4 (.)
=======
                    ->default($value)
                    ;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            }
        }

        return $fields;
    }
}
