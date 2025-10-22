<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

// use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
use Illuminate\Support\Facades\Config;
use Modules\Xot\Filament\Resources\XotBaseResource;

abstract class LangBaseResource extends XotBaseResource
{
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x

    // Temporaneamente commentato per compatibilità Filament 4.x
    // public static function getDefaultTranslatableLocale(): string
    // {
    //     return Config::string('app.locale', 'it');
    // }

    // public static function getTranslatableLocales(): array
    // {
    //     return ['it', 'en'];
    // }
<<<<<<< HEAD
=======
=======
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
=======

// use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> b93ef594b4 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Config;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\XotBaseResource;

abstract class LangBaseResource extends XotBaseResource
{
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x

    // Temporaneamente commentato per compatibilità Filament 4.x
    // public static function getDefaultTranslatableLocale(): string
    // {
    //     return Config::string('app.locale', 'it');
    // }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    // public static function getTranslatableLocales(): array
    // {
    //     return ['it', 'en'];
    // }
>>>>>>> b93ef594b4 (.)
=======
use Filament\Actions;
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

abstract class LangBaseResource extends XotBaseResource
{
    use Translatable;


    public static function getDefaultTranslatableLocale(): string
    {
        return Config::string('app.locale', 'it');
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }



>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
}
