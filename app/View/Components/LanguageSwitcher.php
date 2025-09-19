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
<<<<<<< HEAD
 *
 * @package Modules\Lang\View\Components *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
=======
>>>>>>> 8b0b6ac (.)
=======
 *
 * @package Modules\Lang\View\Components *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
>>>>>>> 1c4a063 (.)
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
<<<<<<< HEAD
        $this->widget = new LanguageSwitcherWidget();
        $this->widget = new LanguageSwitcherWidget();
=======
        $this->widget = new LanguageSwitcherWidget;
>>>>>>> 8b0b6ac (.)
=======
        $this->widget = new LanguageSwitcherWidget();
        $this->widget = new LanguageSwitcherWidget();
>>>>>>> 1c4a063 (.)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
        if (!LanguageSwitcherWidget::canView()) {
            /** @var view-string $view */
            $view = 'lang::components.empty';
            return view($view);
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
        // Verifica se il widget può essere visualizzato
        if (! LanguageSwitcherWidget::canView()) {
            return view('lang::components.empty');
        }

        // Ottiene i dati dal widget
        $viewData = $this->widget->getViewData();

        return view('lang::filament.widgets.language-switcher', $viewData);
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
    }
}
