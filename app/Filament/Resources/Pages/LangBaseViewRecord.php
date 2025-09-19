<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8b0b6ac (.)
=======

>>>>>>> 1c4a063 (.)
use LaraZeus\SpatieTranslatable\Resources\Pages\ViewRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
use Filament\Resources\Pages\ViewRecord;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

abstract class LangBaseViewRecord extends XotBaseViewRecord
{
    protected static string $resource; // = SectionResource::class;

    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x // Temporaneamente commentato per compatibilità Filament 4.x
<<<<<<< HEAD
=======
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Resources\Pages\ViewRecord;

abstract class LangBaseViewRecord extends XotBaseViewRecord
{
    protected static string $resource;// = SectionResource::class;
    use Translatable;
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            ...parent::getHeaderActions(),
            // ...
        ];
    }
}
