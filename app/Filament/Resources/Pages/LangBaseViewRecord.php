<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
use LaraZeus\SpatieTranslatable\Resources\Pages\ViewRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
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
=======
=======
use Filament\Resources\Pages\ViewRecord;
>>>>>>> b93ef594b4 (.)
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

abstract class LangBaseViewRecord extends XotBaseViewRecord
{
<<<<<<< HEAD
    protected static string $resource;// = SectionResource::class;
    use Translatable;
>>>>>>> a12f125f4a (.)
=======
    protected static string $resource; // = SectionResource::class;

    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> b93ef594b4 (.)
=======
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Resources\Pages\ViewRecord;

abstract class LangBaseViewRecord extends XotBaseViewRecord
{
    protected static string $resource;// = SectionResource::class;
    use ViewRecord\Concerns\Translatable;
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
            // ...
        ];
    }
}
