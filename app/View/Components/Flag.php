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
    public function __construct(
        public string $name,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        public string $name,
    ) {}
=======
    public function __construct(public string $name)
    {
    }
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        public string $name,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public string $name)
    {
    }
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

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
