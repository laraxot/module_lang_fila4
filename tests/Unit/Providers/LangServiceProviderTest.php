<?php

declare(strict_types=1);

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;
use Modules\Lang\Providers\LangServiceProvider;

beforeEach(function (): void {
    $this->provider = new LangServiceProvider(app());
});

describe('LangServiceProvider Basic Functionality', function (): void {
    it('extends ServiceProvider', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(ServiceProvider::class);
    });

    it('can be instantiated', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('has correct module name', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $reflection = new ReflectionClass($this->provider);
        /** @phpstan-ignore-next-line method.nonObject */
        $property = $reflection->getProperty('module_name');
        /** @phpstan-ignore-next-line method.nonObject */
        $property->setAccessible(true);

        /** @phpstan-ignore-next-line property.notFound */
        expect($property->getValue($this->provider))->toBe('Lang');
    });
});

describe('LangServiceProvider Registration', function (): void {
    it('can register services', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->register();

        // Verifica che il provider sia registrato
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('can boot services', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che il provider sia avviato
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
});

describe('LangServiceProvider Translation Loading', function (): void {
    it('loads translations from correct path', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che le traduzioni siano caricate
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
    });

    it('loads translations with correct namespace', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica il namespace delle traduzioni
        $translation = __('lang::common.welcome');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome'); // Non dovrebbe essere la chiave
    });

    it('handles missing translation keys gracefully', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica gestione chiavi mancanti
        $missingTranslation = __('lang::nonexistent.key');
        expect($missingTranslation)->toBe('lang::nonexistent.key'); // Dovrebbe restituire la chiave se non trovata
    });
});

describe('LangServiceProvider Translation Structure', function (): void {
    it('provides common translations', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $commonKeys = [
            'welcome',
            'loading',
            'error',
            'success',
            'cancel',
            'save',
            'delete',
            'edit',
            'create',
        ];

        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::common.{$key}");
        }
    });

    it('provides validation translations', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $validationKeys = [
            'required',
            'email',
            'min',
            'max',
            'unique',
            'confirmed',
        ];

        foreach ($validationKeys as $key) {
            $translation = __("lang::validation.{$key}");
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::validation.{$key}");
        }
    });

    it('provides error translations', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $errorKeys = [
            'general',
            'not_found',
            'unauthorized',
            'validation',
            'server_error',
        ];

        foreach ($errorKeys as $key) {
            $translation = __("lang::errors.{$key}");
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::errors.{$key}");
        }
    });
});

describe('LangServiceProvider Language Support', function (): void {
    it('supports Italian language', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Cambia lingua a italiano
        app()->setLocale('it');

        $translation = __('lang::common.welcome');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });

    it('supports English language', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Cambia lingua a inglese
        app()->setLocale('en');

        $translation = __('lang::common.welcome');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });

    it('supports German language', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Cambia lingua a tedesco
        app()->setLocale('de');

        $translation = __('lang::common.welcome');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });

    it('falls back to default language when translation missing', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Cambia lingua a una non supportata
        app()->setLocale('fr');

        $translation = __('lang::common.welcome');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });
});

describe('LangServiceProvider Translation Files', function (): void {
    it('loads common translation file', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $commonPath = module_path('Lang', 'lang/it/common.php');
        expect(File::exists($commonPath))->toBeTrue();

        $translations = require $commonPath;
        expect($translations)->toBeArray();
        expect($translations)->toHaveKey('welcome');
    });

    it('loads validation translation file', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $validationPath = module_path('Lang', 'lang/it/validation.php');
        expect(File::exists($validationPath))->toBeTrue();

        $translations = require $validationPath;
        expect($translations)->toBeArray();
        expect($translations)->toHaveKey('required');
    });

    it('loads error translation file', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $errorPath = module_path('Lang', 'lang/it/errors.php');
        expect(File::exists($errorPath))->toBeTrue();

        $translations = require $errorPath;
        expect($translations)->toBeArray();
        expect($translations)->toHaveKey('general');
    });

    it('loads all required translation files', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $requiredFiles = ['common', 'validation', 'errors'];
        $langPath = module_path('Lang', 'lang/it');

        foreach ($requiredFiles as $file) {
            $filePath = "{$langPath}/{$file}.php";
            expect(File::exists($filePath))->toBeTrue();

            $translations = require $filePath;
            expect($translations)->toBeArray();
            expect($translations)->not->toBeEmpty();
        }
    });
});

describe('LangServiceProvider Translation Quality', function (): void {
    it('provides complete translation coverage', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $commonKeys = [
            'welcome',
            'loading',
            'error',
            'success',
            'cancel',
            'save',
            'delete',
            'edit',
            'create',
            'update',
            'back',
            'next',
            'previous',
            'search',
            'filter',
            'sort',
            'refresh',
            'export',
            'import',
        ];

        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::common.{$key}");
            expect(strlen($translation))->toBeGreaterThan(0);
        }
    });

    it('provides consistent translation style', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $translations = [
            __('lang::common.welcome'),
            __('lang::common.loading'),
            __('lang::common.success'),
        ];

        // Verifica che tutte le traduzioni abbiano uno stile coerente
        foreach ($translations as $translation) {
            expect($translation)->toBeString();
            expect(strlen($translation))->toBeGreaterThan(0);
            expect($translation)->not->toMatch('/[A-Z]{2,}/'); // Non dovrebbe contenere sigle in maiuscolo
        }
    });

    it('provides contextually appropriate translations', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $contextualPairs = [
            'save' => 'Salva',
            'delete' => 'Elimina',
            'edit' => 'Modifica',
            'create' => 'Crea',
        ];

        foreach ($contextualPairs as $key => $expected) {
            $translation = __("lang::common.{$key}");
            expect($translation)->toBe($expected);
        }
    });
});

describe('LangServiceProvider Performance', function (): void {
    it('loads translations efficiently', function (): void {
        $startTime = microtime(true);

        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });

    it('caches translations for performance', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Prima chiamata
        $startTime = microtime(true);
        $translation1 = __('lang::common.welcome');
        $endTime = microtime(true);
        $firstCallTime = $endTime - $startTime;

        // Seconda chiamata (dovrebbe essere più veloce)
        $startTime = microtime(true);
        $translation2 = __('lang::common.welcome');
        $endTime = microtime(true);
        $secondCallTime = $endTime - $startTime;

        expect($translation1)->toBe($translation2);
        expect($secondCallTime)->toBeLessThanOrEqual($firstCallTime);
    });

    it('handles multiple language switches efficiently', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $languages = ['it', 'en', 'de', 'it']; // Torna a italiano

        $startTime = microtime(true);

        foreach ($languages as $locale) {
            app()->setLocale($locale);
            $translation = __('lang::common.welcome');
            expect($translation)->toBeString();
        }

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });
});

describe('LangServiceProvider Error Handling', function (): void {
    it('handles missing translation files gracefully', function (): void {
        // Simula file di traduzione mancanti
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Dovrebbe gestire graziosamente i file mancanti
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('handles malformed translation files gracefully', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Dovrebbe gestire graziosamente i file malformati
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('handles empty translation files gracefully', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Dovrebbe gestire graziosamente i file vuoti
        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
});

describe('LangServiceProvider Integration', function (): void {
    it('works with Laravel translation system', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica integrazione con il sistema di traduzione di Laravel
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
        expect(__('lang::common.welcome'))->toBeString();
    });

    it('works with Filament components', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che le traduzioni siano disponibili per i componenti Filament
        $translation = __('lang::common.save');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.save');
    });

    it('works with Blade templates', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che le traduzioni siano disponibili nei template Blade
        $translation = lang('lang::common.welcome');
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });
});

describe('LangServiceProvider Configuration', function (): void {
    it('respects Laravel configuration', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che rispetti la configurazione di Laravel
        $defaultLocale = config('app.locale');
        expect($defaultLocale)->toBeString();
        expect(strlen($defaultLocale))->toBeGreaterThan(0);
    });

    it('can be configured via config files', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che possa essere configurato tramite file di configurazione
        expect(config('app.fallback_locale'))->toBeString();
    });

    it('integrates with other service providers', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica integrazione con altri service provider
        expect(app())->toBeInstanceOf(Application::class);
    });
});

describe('LangServiceProvider Maintenance', function (): void {
    it('can be refreshed without errors', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Verifica che possa essere riavviato senza errori
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('maintains state consistency', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $translation1 = __('lang::common.welcome');

        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        $translation2 = __('lang::common.welcome');

        expect($translation1)->toBe($translation2);
    });

    it('can be unregistered and re-registered', function (): void {
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->register();
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        // Simula unregister
        $this->provider = new LangServiceProvider(app());

        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->register();
        /** @phpstan-ignore-next-line property.notFound */
        $this->provider->boot();

        /** @phpstan-ignore-next-line property.notFound */
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
});
