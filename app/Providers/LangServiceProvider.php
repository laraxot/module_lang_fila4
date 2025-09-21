<?php

declare(strict_types=1);

namespace Modules\Lang\Providers;

<<<<<<< HEAD
use Override;
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
>>>>>>> a7ee0d6 (.)
use Closure;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\Select;
>>>>>>> b93ef594b4 (.)
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
=======
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
use Filament\Tables\Actions\Action as TableAction;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider;
use Modules\Lang\Actions\Filament\AutoLabelAction;
use Modules\Lang\Services\TranslatorService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\BladeService;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\Select;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Components\Select;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

/**
 * ---.
 */
class LangServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Lang';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    public function boot(): void
    {
        parent::boot();
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Lang');
        // $this->registerTranslator();
        $this->translatableComponents();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        //$this->registerFilamentLabel();
    }

    
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->registerFilamentLabel();
        
    }

    public function register(): void
    {
        parent::register();

        // Registra il service provider di laravel-localization
        // $this->app->register(LaravelLocalizationServiceProvider::class);
        // NOTA: Il LaravelLocalizationServiceProvider viene già registrato automaticamente
        // tramite package discovery di Laravel (vedere composer.json del package)

        // Carica la configurazione di laravel-localization
        // $this->mergeConfigFrom(
        //    __DIR__.'/../config/laravel-localization.php', 'laravel-localization'
        //);

        // --dalla doc in register ... ma non funziona, funziona in boot
        // $this->registerTranslator();
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        //$this->registerFilamentLabel();
    }

    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    protected function translatableComponents(): void
    {
        $components = [Field::class, BaseFilter::class, Placeholder::class, Column::class, Entry::class];
        foreach ($components as $component) {
            /* @var Configurable $component */
            $component::configureUsing(function (Component $translatable): void {
                /* @phpstan-ignore method.notFound */
                $translatable->translateLabel();
            });
        }
    }

    public function registerFilamentLabel(): void
    {
        Select::configureUsing(function (Select $component) {
            $component->placeholder(__('filament-forms::components.select.placeholder'));
            return $component;
        });
        Field::configureUsing(function (Field $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            Assert::isInstanceOf($component, Field::class);
            $validationMessages = __('user::validation');
            if (is_array($validationMessages)) {
                // Convertiamo l'array generico in un array<string, string> per soddisfare il tipo richiesto
                $typedMessages = [];
                foreach ($validationMessages as $key => $value) {
<<<<<<< HEAD
                    if (is_string($key) && (is_string($value) || $value instanceof Closure)) {
=======
<<<<<<< HEAD
                    if (is_string($key) && (is_string($value) || $value instanceof Closure)) {
=======
                    if (is_string($key) && (is_string($value) || $value instanceof \Closure)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
                        $typedMessages[$key] = $value;
                    }
                }
                $component->validationMessages($typedMessages);
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
            $component = app(AutoLabelAction::class)->execute($component, 'placeholder');
            $component = app(AutoLabelAction::class)->execute($component, 'helperText');
            $component = app(AutoLabelAction::class)->execute($component, 'description');

            return $component;
        });

        Section::configureUsing(function (Section $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            $component = app(AutoLabelAction::class)->execute($component, 'heading');
            return $component;
        });

<<<<<<< HEAD
=======
=======
            $component = app(AutoLabelAction::class)->execute($component,'placeholder');
            $component = app(AutoLabelAction::class)->execute($component,'helperText');
            $component = app(AutoLabelAction::class)->execute($component,'description');
=======
            $component = app(AutoLabelAction::class)->execute($component, 'placeholder');
            $component = app(AutoLabelAction::class)->execute($component, 'helperText');
            $component = app(AutoLabelAction::class)->execute($component, 'description');
>>>>>>> b93ef594b4 (.)

            return $component;
        });

        Section::configureUsing(function (Section $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            $component = app(AutoLabelAction::class)->execute($component, 'heading');
            return $component;
        });
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            $component = app(AutoLabelAction::class)->execute($component,'placeholder');
            $component = app(AutoLabelAction::class)->execute($component,'helperText');
            $component = app(AutoLabelAction::class)->execute($component,'description');

            return $component;
        });
        \Filament\Forms\Components\Section::configureUsing(function (\Filament\Forms\Components\Section $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            $component = app(AutoLabelAction::class)->execute($component,'heading');
            return $component;
        });
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        BaseFilter::configureUsing(function (BaseFilter $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            return $component;
        });

        Column::configureUsing(function (Column $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            Assert::isInstanceOf($component, Column::class);
<<<<<<< HEAD
            $component = $component->wrapHeader()->verticallyAlignStart()->grow();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $component = $component->wrapHeader()->verticallyAlignStart()->grow();
=======
=======
>>>>>>> origin/develop
            $component = $component
                ->wrapHeader()
                ->verticallyAlignStart()
                ->grow();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $component = $component->wrapHeader()->verticallyAlignStart()->grow();
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            // ->wrap()

            return $component;
        });

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
        Step::configureUsing(function (Step $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            // ->translateLabel()
            return $component;
        });
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        Step::configureUsing(function (Step $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            
            // ->translateLabel()
            return $component;
        });
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        Action::configureUsing(function (Action $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            // $component->tooltip('preso');

            // $component->iconButton();
            // ->translateLabel()
            return $component;
        });
<<<<<<< HEAD
        Action::configureUsing(function (Action $component) {
=======
<<<<<<< HEAD
        Action::configureUsing(function (Action $component) {
=======
        TableAction::configureUsing(function (TableAction $component) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            $component = app(AutoLabelAction::class)->execute($component);
            if (method_exists($component, 'iconButton')) {
                $component->iconButton();
            }
            if (method_exists($component, 'icon')) {
                $component->icon('heroicon-o-plus');
            }

            // ->translateLabel()
            return $component;
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Method Filament\Widgets\StatsOverviewWidget\Stat::configureUsing does not exist.
        /*
         * Stat::configureUsing(function (Stat $component) {
         * $component = app(AutoLabelAction::class)->execute($component);
         *
         * // ->translateLabel()
         * return $component;
         * });
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        // Method Filament\Widgets\StatsOverviewWidget\Stat::configureUsing does not exist.
        /*
        Stat::configureUsing(function (Stat $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            // ->translateLabel()
            return $component;
        });
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Method Filament\Widgets\StatsOverviewWidget\Stat::configureUsing does not exist.
        /*
         * Stat::configureUsing(function (Stat $component) {
         * $component = app(AutoLabelAction::class)->execute($component);
         *
         * // ->translateLabel()
         * return $component;
         * });
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    public function registerTranslator(): void
    {
        $this->app->singleton('translator', function (Container $app): TranslatorService {
            $loader = $app['translation.loader'];

            // When registering the translator component, we'll need to set the default
            // locale as well as the fallback locale. So, we'll grab the application
            // configuration so we can easily get both of these values from there.
<<<<<<< HEAD
            Assert::string($locale = $app['config']['app.locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($fallback_locale = $app['config']['app.fallback_locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($locale = $app['config']['app.locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($fallback_locale = $app['config']['app.fallback_locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($locale = $app['config']['app.locale']);
            Assert::string($fallback_locale = $app['config']['app.fallback_locale']);
>>>>>>> a12f125f4a (.)
=======
            Assert::string($locale = $app['config']['app.locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($fallback_locale = $app['config']['app.fallback_locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
            Assert::string($locale = $app['config']['app.locale']);
            Assert::string($fallback_locale = $app['config']['app.fallback_locale']);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

            $translatorService = new TranslatorService($loader, $locale);

            $translatorService->setFallback($fallback_locale);

            /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
             * if($app->bound('translation-manager')){
             * $trans->setTranslationManager($app['translation-manager']);
             * }
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            if($app->bound('translation-manager')){
                $trans->setTranslationManager($app['translation-manager']);
            }
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            return $translatorService;
        });
    }
}
