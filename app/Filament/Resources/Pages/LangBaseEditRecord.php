<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
<<<<<<< HEAD
=======
=======
=======

>>>>>>> b93ef594b4 (.)
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Cms\Filament\Resources\SectionResource;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Actions;
use Modules\Cms\Filament\Resources\SectionResource;
use Filament\Resources\Pages\EditRecord;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

abstract class LangBaseEditRecord extends XotBaseEditRecord
{
<<<<<<< HEAD
    protected static string $resource; // = SectionResource::class;

    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string $resource; // = SectionResource::class;

    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
=======
    protected static string $resource;// = SectionResource::class;
    use Translatable;
>>>>>>> a12f125f4a (.)
=======
    protected static string $resource; // = SectionResource::class;

    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> b93ef594b4 (.)
=======
    protected static string $resource;// = SectionResource::class;
    use EditRecord\Concerns\Translatable;
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
