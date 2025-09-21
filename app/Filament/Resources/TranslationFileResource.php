<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
declare(strict_types=1);


namespace Modules\Lang\Filament\Resources;

use Override;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages\ListTranslationFiles;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages\CreateTranslationFile;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages\EditTranslationFile;
use Filament\Actions;
use Filament\Forms\Components;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Config;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages;
use Modules\Lang\Filament\Resources\TranslationFileResource\RelationManagers;
use Modules\Lang\Models\TranslationFile;
use Modules\Xot\Filament\Resources\XotBaseResource;

class TranslationFileResource extends XotBaseResource
{
    protected static null|string $model = TranslationFile::class;
<<<<<<< HEAD
=======
=======
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Lang\Filament\Resources;

use Override;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages\ListTranslationFiles;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages\CreateTranslationFile;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages\EditTranslationFile;
use Filament\Actions;
use Filament\Forms\Components;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Config;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages;
use Modules\Lang\Filament\Resources\TranslationFileResource\RelationManagers;
use Modules\Lang\Models\TranslationFile;
use Modules\Xot\Filament\Resources\XotBaseResource;

class TranslationFileResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = TranslationFile::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $model = TranslationFile::class;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\Lang\Filament\Resources;

use Filament\Tables;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Config;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Models\TranslationFile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages;
use Modules\Lang\Filament\Resources\TranslationFileResource\RelationManagers;

class TranslationFileResource extends XotBaseResource
{
    protected static ?string $model = TranslationFile::class;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    public static function getDefaultTranslatableLocale(): string
    {
        return Config::string('app.locale', 'it');
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [];

        /*
         * return [
         * Components\TextInput::make('key')
         * ->required()
         * ->maxLength(255)
         * ->disabled()
         * ->label('Chiave File'),
         *
         * Components\TextInput::make('name')
         * ->required()
         * ->maxLength(255)
         * ->disabled()
         * ->label('Nome File'),
         *
         * Components\TextInput::make('path')
         * ->required()
         * ->maxLength(255)
         * ->disabled()
         * ->label('Percorso File'),
         *
         * Components\KeyValue::make('content')
         * ->label('Traduzioni')
         * ->keyLabel('Chiave')
         * ->valueLabel('Valore')
         * ->addActionLabel('Aggiungi Traduzione')
         * ->deleteActionLabel('Rimuovi')
         * ->reorderable()
         * ->columnSpanFull(),
         *
         * ];
         */
    }

    #[Override]
<<<<<<< HEAD
=======
=======
    

=======
    #[Override]
>>>>>>> b93ef594b4 (.)
    public static function getFormSchema(): array
    {
        return [];

        /*
         * return [
         * Components\TextInput::make('key')
         * ->required()
         * ->maxLength(255)
         * ->disabled()
         * ->label('Chiave File'),
         *
         * Components\TextInput::make('name')
         * ->required()
         * ->maxLength(255)
         * ->disabled()
         * ->label('Nome File'),
         *
         * Components\TextInput::make('path')
         * ->required()
         * ->maxLength(255)
         * ->disabled()
         * ->label('Percorso File'),
         *
         * Components\KeyValue::make('content')
         * ->label('Traduzioni')
         * ->keyLabel('Chiave')
         * ->valueLabel('Valore')
         * ->addActionLabel('Aggiungi Traduzione')
         * ->deleteActionLabel('Rimuovi')
         * ->reorderable()
         * ->columnSpanFull(),
         *
         * ];
         */
    }

<<<<<<< HEAD
   
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListTranslationFiles::route('/'),
            'create' => CreateTranslationFile::route('/create'),
            //'view' => Pages\ViewTranslationFile::route('/{record}'),
            'edit' => EditTranslationFile::route('/{record}/edit'),
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======


   
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    

    public static function getFormSchema(): array
    {
       
        return [];
        /*
        return [
            Components\TextInput::make('key')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('Chiave File'),

            Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('Nome File'),

            Components\TextInput::make('path')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('Percorso File'),
            
            Components\KeyValue::make('content')
                ->label('Traduzioni')
                ->keyLabel('Chiave')
                ->valueLabel('Valore')
                ->addActionLabel('Aggiungi Traduzione')
                ->deleteActionLabel('Rimuovi')
                ->reorderable()
                ->columnSpanFull(),
            
        ];
        */
    }

   
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTranslationFiles::route('/'),
            'create' => Pages\CreateTranslationFile::route('/create'),
            //'view' => Pages\ViewTranslationFile::route('/{record}'),
            'edit' => Pages\EditTranslationFile::route('/{record}/edit'),
        ];
    }


   
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
}
