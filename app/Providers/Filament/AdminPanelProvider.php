<?php

declare(strict_types=1);

namespace Modules\Lang\Providers\Filament;

<<<<<<< HEAD
use Override;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Filament\Panel;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Filament\Panel;
=======
use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Lang';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
<<<<<<< HEAD
=======
=======
    public function panel(Panel $panel): Panel
    {
        $panel= parent::panel($panel);
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
>>>>>>> b93ef594b4 (.)
=======
    public function panel(Panel $panel): Panel
    {
        $panel= parent::panel($panel);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );

<<<<<<< HEAD
        $spatieLaravelTranslatablePlugin = SpatieTranslatablePlugin::make()->defaultLocales(['en', 'it']);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $spatieLaravelTranslatablePlugin = SpatieTranslatablePlugin::make()->defaultLocales(['en', 'it']);
=======
        $spatieLaravelTranslatablePlugin=SpatieTranslatablePlugin::make()
                ->defaultLocales(['en', 'it']);
>>>>>>> a12f125f4a (.)
=======
        $spatieLaravelTranslatablePlugin = SpatieTranslatablePlugin::make()->defaultLocales(['en', 'it']);
>>>>>>> b93ef594b4 (.)
=======
        $spatieLaravelTranslatablePlugin=SpatieLaravelTranslatablePlugin::make()
                ->defaultLocales(['en', 'it']);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $panel->plugins([
            $spatieLaravelTranslatablePlugin,
        ]);

        return $panel;
    }
}
