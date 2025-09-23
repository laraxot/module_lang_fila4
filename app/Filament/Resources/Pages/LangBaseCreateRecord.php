<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;

use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;
=======
use Filament\Actions;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Modules\Lang\Models\Translation;
>>>>>>> a87590b (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

/**
 * Class LangBaseCreateRecord.
 *
 * Classe base per la creazione di record con supporto multilingua.
 * Estende XotBaseCreateRecord e aggiunge funzionalità per la gestione delle traduzioni.
 */
abstract class LangBaseCreateRecord extends XotBaseCreateRecord
{
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            ...parent::getHeaderActions(),
        ];
    }
}
