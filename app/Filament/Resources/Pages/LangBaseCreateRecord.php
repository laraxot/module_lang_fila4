<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;

<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
=======
<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Modules\Lang\Models\Translation;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Filament\Forms\Form;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Modules\Lang\Models\Translation;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Modules\Lang\Models\Translation;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

/**
 * Class LangBaseCreateRecord.
 *
 * Classe base per la creazione di record con supporto multilingua.
 * Estende XotBaseCreateRecord e aggiunge funzionalità per la gestione delle traduzioni.
 */
abstract class LangBaseCreateRecord extends XotBaseCreateRecord
{
<<<<<<< HEAD
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
=======
    use Translatable;
>>>>>>> a12f125f4a (.)
=======
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> b93ef594b4 (.)
=======
    use CreateRecord\Concerns\Translatable;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            LocaleSwitcher::make(),
=======
<<<<<<< HEAD
            LocaleSwitcher::make(),
=======
            Actions\LocaleSwitcher::make(),
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            ...parent::getHeaderActions(),
        ];
    }
}
