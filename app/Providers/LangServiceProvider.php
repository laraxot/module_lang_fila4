<?php

declare(strict_types=1);

namespace Modules\Lang\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 8b0b6ac (.)
=======
use Override;
>>>>>>> 1c4a063 (.)
use Closure;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
=======
>>>>>>> 8b0b6ac (.)
=======
use Filament\Forms\Components\Select;
>>>>>>> 1c4a063 (.)
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
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
<<<<<<< HEAD
=======
use Filament\Forms\Components\Select;
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

/**
 * ---.
 */
class LangServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Lang';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 8b0b6ac (.)
=======
    #[Override]
>>>>>>> 1c4a063 (.)
    public function boot(): void
    {
        parent::boot();
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Lang');
        // $this->registerTranslator();
        $this->translatableComponents();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
        //$this->registerFilamentLabel();
    }

    
<<<<<<< HEAD
=======
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
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

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
                    if (is_string($key) && (is_string($value) || $value instanceof Closure)) {
                        $typedMessages[$key] = $value;
                    }
                }
                $component->validationMessages($typedMessages);
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
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
            $component = app(AutoLabelAction::class)->execute($component,'placeholder');
            $component = app(AutoLabelAction::class)->execute($component,'helperText');
            $component = app(AutoLabelAction::class)->execute($component,'description');

            return $component;
        });
        Section::configureUsing(function (Section $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            $component = app(AutoLabelAction::class)->execute($component,'heading');
            return $component;
        });
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
        BaseFilter::configureUsing(function (BaseFilter $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            return $component;
        });

        Column::configureUsing(function (Column $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            Assert::isInstanceOf($component, Column::class);
<<<<<<< HEAD
<<<<<<< HEAD
            $component = $component->wrapHeader()->verticallyAlignStart()->grow();
=======
            $component = $component
                ->wrapHeader()
                ->verticallyAlignStart()
                ->grow();
>>>>>>> 8b0b6ac (.)
=======
            $component = $component->wrapHeader()->verticallyAlignStart()->grow();
>>>>>>> 1c4a063 (.)
            // ->wrap()

            return $component;
        });

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
        Step::configureUsing(function (Step $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            // ->translateLabel()
            return $component;
        });
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8b0b6ac (.)
=======

>>>>>>> 1c4a063 (.)
        Action::configureUsing(function (Action $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            // $component->tooltip('preso');

            // $component->iconButton();
            // ->translateLabel()
            return $component;
        });
        Action::configureUsing(function (Action $component) {
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
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)

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
        // Method Filament\Widgets\StatsOverviewWidget\Stat::configureUsing does not exist.
        /*
        Stat::configureUsing(function (Stat $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            // ->translateLabel()
            return $component;
        });
        */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
    }

    public function registerTranslator(): void
    {
        $this->app->singleton('translator', function (Container $app): TranslatorService {
            $loader = $app['translation.loader'];

            // When registering the translator component, we'll need to set the default
            // locale as well as the fallback locale. So, we'll grab the application
            // configuration so we can easily get both of these values from there.
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($locale = $app['config']['app.locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($fallback_locale = $app['config']['app.fallback_locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($locale = $app['config']['app.locale']);
            Assert::string($fallback_locale = $app['config']['app.fallback_locale']);
>>>>>>> 8b0b6ac (.)
=======
            Assert::string($locale = $app['config']['app.locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            Assert::string($fallback_locale = $app['config']['app.fallback_locale'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 1c4a063 (.)

            $translatorService = new TranslatorService($loader, $locale);

            $translatorService->setFallback($fallback_locale);

            /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
             * if($app->bound('translation-manager')){
             * $trans->setTranslationManager($app['translation-manager']);
             * }
             */
<<<<<<< HEAD
=======
            if($app->bound('translation-manager')){
                $trans->setTranslationManager($app['translation-manager']);
            }
            */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
            return $translatorService;
        });
    }
}
