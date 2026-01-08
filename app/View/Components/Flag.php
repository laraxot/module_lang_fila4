<?php

declare(strict_types=1);

namespace Modules\Lang\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

/**
 * Undocumented class.
 */
class Flag extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        public string $name,
    ) {}
=======
    public function __construct(public string $name)
    {
    }
>>>>>>> 8b0b6ac (.)
=======
    public function __construct(
        public string $name,
    ) {}
>>>>>>> 1c4a063 (.)

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string $view
         */
        $view = app(GetViewAction::class)->execute();

        $viewParams = [
            'view' => $view,
            'name' => $this->name,
        ];

        return view($view, $viewParams);
    }
}
