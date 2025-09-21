<?php

declare(strict_types=1);

namespace Modules\Lang\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Lang\Filament\Widgets\LanguageSwitcherWidget;

/**
 * Componente Blade per il Language Switcher.
 *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
<<<<<<< HEAD
 *
 * @package Modules\Lang\View\Components *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
=======
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @package Modules\Lang\View\Components *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
=======
>>>>>>> a12f125f4a (.)
=======
 *
 * @package Modules\Lang\View\Components *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
 */
class LanguageSwitcher extends Component
{
    /**
     * Widget associato al componente.
     */
    protected LanguageSwitcherWidget $widget;

    /**
     * Crea una nuova istanza del componente.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->widget = new LanguageSwitcherWidget();
        $this->widget = new LanguageSwitcherWidget();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget = new LanguageSwitcherWidget();
        $this->widget = new LanguageSwitcherWidget();
=======
        $this->widget = new LanguageSwitcherWidget;
>>>>>>> a12f125f4a (.)
=======
        $this->widget = new LanguageSwitcherWidget();
        $this->widget = new LanguageSwitcherWidget();
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        if (!LanguageSwitcherWidget::canView()) {
            /** @var view-string $view */
            $view = 'lang::components.empty';
            return view($view);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        }

        // Ottiene i dati pubblici dal widget
        $viewData = [
            'current_locale' => app()->getLocale(),
            'available_locales' => $this->widget->getAvailableLocales(),
            'widget_id' => 'language-switcher-' . uniqid(),
        ];

        return \view('lang::components.language-switcher', $viewData);
<<<<<<< HEAD
=======
=======
        // Verifica se il widget può essere visualizzato
        if (! LanguageSwitcherWidget::canView()) {
            return view('lang::components.empty');
=======
>>>>>>> b93ef594b4 (.)
        }

        // Ottiene i dati pubblici dal widget
        $viewData = [
            'current_locale' => app()->getLocale(),
            'available_locales' => $this->widget->getAvailableLocales(),
            'widget_id' => 'language-switcher-' . uniqid(),
        ];

<<<<<<< HEAD
        return view('lang::filament.widgets.language-switcher', $viewData);
>>>>>>> a12f125f4a (.)
=======
        return \view('lang::components.language-switcher', $viewData);
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
    }
}
