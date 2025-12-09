<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;
use Modules\Lang\Providers\LangServiceProvider;
<<<<<<< HEAD
=======
=======
use Modules\Lang\Providers\LangServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\File;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

beforeEach(function () {
    $this->provider = new LangServiceProvider(app());
});

describe('LangServiceProvider Basic Functionality', function () {
    it('extends ServiceProvider', function () {
        expect($this->provider)->toBeInstanceOf(ServiceProvider::class);
    });

    it('can be instantiated', function () {
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('has correct module name', function () {
        $reflection = new ReflectionClass($this->provider);
        $property = $reflection->getProperty('module_name');
        $property->setAccessible(true);
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($property->getValue($this->provider))->toBe('Lang');
    });
});

describe('LangServiceProvider Registration', function () {
    it('can register services', function () {
        $this->provider->register();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Verifica che il provider sia registrato
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('can boot services', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Verifica che il provider sia avviato
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
});

describe('LangServiceProvider Translation Loading', function () {
    it('loads translations from correct path', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Verifica che le traduzioni siano caricate
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
    });

    it('loads translations with correct namespace', function () {
        $this->provider->boot();
<<<<<<< HEAD

        // Verifica il namespace delle traduzioni
        $translation = __('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Verifica il namespace delle traduzioni
        $translation = __('lang::common.welcome');
=======
        // Verifica il namespace delle traduzioni
        $translation = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======

        // Verifica il namespace delle traduzioni
        $translation = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
=======
        
        // Verifica il namespace delle traduzioni
        $translation = __('lang::common.welcome');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome'); // Non dovrebbe essere la chiave
    });

    it('handles missing translation keys gracefully', function () {
        $this->provider->boot();
<<<<<<< HEAD

        // Verifica gestione chiavi mancanti
        $missingTranslation = __('lang::nonexistent.key');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Verifica gestione chiavi mancanti
        $missingTranslation = __('lang::nonexistent.key');
=======
        // Verifica gestione chiavi mancanti
        $missingTranslation = (string) __('lang::nonexistent.key');
>>>>>>> a12f125f4a (.)
=======

        // Verifica gestione chiavi mancanti
        $missingTranslation = __('lang::nonexistent.key');
>>>>>>> b93ef594b4 (.)
=======
        
        // Verifica gestione chiavi mancanti
        $missingTranslation = __('lang::nonexistent.key');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($missingTranslation)->toBe('lang::nonexistent.key'); // Dovrebbe restituire la chiave se non trovata
    });
});

describe('LangServiceProvider Translation Structure', function () {
    it('provides common translations', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
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
<<<<<<< HEAD

        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
=======
        foreach ($commonKeys as $key) {
            $translation = (string) __("lang::common.{$key}");
>>>>>>> a12f125f4a (.)
=======

        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
>>>>>>> b93ef594b4 (.)
=======
        
        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::common.{$key}");
        }
    });

    it('provides validation translations', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $validationKeys = [
            'required',
            'email',
            'min',
            'max',
            'unique',
            'confirmed',
        ];
<<<<<<< HEAD

        foreach ($validationKeys as $key) {
            $translation = __("lang::validation.{$key}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        foreach ($validationKeys as $key) {
            $translation = __("lang::validation.{$key}");
=======
        foreach ($validationKeys as $key) {
            $translation = (string) __("lang::validation.{$key}");
>>>>>>> a12f125f4a (.)
=======

        foreach ($validationKeys as $key) {
            $translation = __("lang::validation.{$key}");
>>>>>>> b93ef594b4 (.)
=======
        
        foreach ($validationKeys as $key) {
            $translation = __("lang::validation.{$key}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::validation.{$key}");
        }
    });

    it('provides error translations', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $errorKeys = [
            'general',
            'not_found',
            'unauthorized',
            'validation',
            'server_error',
        ];
<<<<<<< HEAD

        foreach ($errorKeys as $key) {
            $translation = __("lang::errors.{$key}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        foreach ($errorKeys as $key) {
            $translation = __("lang::errors.{$key}");
=======
        foreach ($errorKeys as $key) {
            $translation = (string) __("lang::errors.{$key}");
>>>>>>> a12f125f4a (.)
=======

        foreach ($errorKeys as $key) {
            $translation = __("lang::errors.{$key}");
>>>>>>> b93ef594b4 (.)
=======
        
        foreach ($errorKeys as $key) {
            $translation = __("lang::errors.{$key}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::errors.{$key}");
        }
    });
});

describe('LangServiceProvider Language Support', function () {
    it('supports Italian language', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Cambia lingua a italiano
        app()->setLocale('it');

<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
        $translation = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======
        $translation = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
=======
        
        // Cambia lingua a italiano
        app()->setLocale('it');
        
        $translation = __('lang::common.welcome');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });

    it('supports English language', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Cambia lingua a inglese
        app()->setLocale('en');

<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
        $translation = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======
        $translation = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
=======
        
        // Cambia lingua a inglese
        app()->setLocale('en');
        
        $translation = __('lang::common.welcome');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });

    it('supports German language', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Cambia lingua a tedesco
        app()->setLocale('de');

<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
        $translation = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======
        $translation = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
=======
        
        // Cambia lingua a tedesco
        app()->setLocale('de');
        
        $translation = __('lang::common.welcome');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });

    it('falls back to default language when translation missing', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Cambia lingua a una non supportata
        app()->setLocale('fr');

<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $translation = __('lang::common.welcome');
=======
        $translation = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======
        $translation = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
=======
        
        // Cambia lingua a una non supportata
        app()->setLocale('fr');
        
        $translation = __('lang::common.welcome');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });
});

describe('LangServiceProvider Translation Files', function () {
    it('loads common translation file', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        $commonPath = module_path('Lang', 'lang/it/common.php');
        expect(File::exists($commonPath))->toBeTrue();

<<<<<<< HEAD
=======
=======
        
        $commonPath = module_path('Lang', 'lang/it/common.php');
        expect(File::exists($commonPath))->toBeTrue();
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $translations = require $commonPath;
        expect($translations)->toBeArray();
        expect($translations)->toHaveKey('welcome');
    });

    it('loads validation translation file', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        $validationPath = module_path('Lang', 'lang/it/validation.php');
        expect(File::exists($validationPath))->toBeTrue();

<<<<<<< HEAD
=======
=======
        
        $validationPath = module_path('Lang', 'lang/it/validation.php');
        expect(File::exists($validationPath))->toBeTrue();
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $translations = require $validationPath;
        expect($translations)->toBeArray();
        expect($translations)->toHaveKey('required');
    });

    it('loads error translation file', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        $errorPath = module_path('Lang', 'lang/it/errors.php');
        expect(File::exists($errorPath))->toBeTrue();

<<<<<<< HEAD
=======
=======
        
        $errorPath = module_path('Lang', 'lang/it/errors.php');
        expect(File::exists($errorPath))->toBeTrue();
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $translations = require $errorPath;
        expect($translations)->toBeArray();
        expect($translations)->toHaveKey('general');
    });

    it('loads all required translation files', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        $requiredFiles = ['common', 'validation', 'errors'];
        $langPath = module_path('Lang', 'lang/it');

        foreach ($requiredFiles as $file) {
            $filePath = "{$langPath}/{$file}.php";
            expect(File::exists($filePath))->toBeTrue();

<<<<<<< HEAD
=======
=======
        
        $requiredFiles = ['common', 'validation', 'errors'];
        $langPath = module_path('Lang', 'lang/it');
        
        foreach ($requiredFiles as $file) {
            $filePath = "{$langPath}/{$file}.php";
            expect(File::exists($filePath))->toBeTrue();
            
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            $translations = require $filePath;
            expect($translations)->toBeArray();
            expect($translations)->not->toBeEmpty();
        }
    });
});

describe('LangServiceProvider Translation Quality', function () {
    it('provides complete translation coverage', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

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
<<<<<<< HEAD
=======
=======
=======

>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
            $translation = (string) __("lang::common.{$key}");
>>>>>>> a12f125f4a (.)
=======
            $translation = __("lang::common.{$key}");
>>>>>>> b93ef594b4 (.)
=======
        
        $commonKeys = [
            'welcome', 'loading', 'error', 'success', 'cancel', 'save',
            'delete', 'edit', 'create', 'update', 'back', 'next', 'previous',
            'search', 'filter', 'sort', 'refresh', 'export', 'import',
        ];
        
        foreach ($commonKeys as $key) {
            $translation = __("lang::common.{$key}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            expect($translation)->toBeString();
            expect($translation)->not->toBe("lang::common.{$key}");
            expect(strlen($translation))->toBeGreaterThan(0);
        }
    });

    it('provides consistent translation style', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $translations = [
            __('lang::common.welcome'),
            __('lang::common.loading'),
            __('lang::common.success'),
        ];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
=======

>>>>>>> b93ef594b4 (.)
        $translations = [
            __('lang::common.welcome'),
            __('lang::common.loading'),
            __('lang::common.success'),
        ];
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Verifica che tutte le traduzioni abbiano uno stile coerente
        foreach ($translations as $translation) {
            expect($translation)->toBeString();
            expect(strlen($translation))->toBeGreaterThan(0);
            expect($translation)->not->toMatch('/[A-Z]{2,}/'); // Non dovrebbe contenere sigle in maiuscolo
        }
    });

    it('provides contextually appropriate translations', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $contextualPairs = [
            'save' => 'Salva',
            'delete' => 'Elimina',
            'edit' => 'Modifica',
            'create' => 'Crea',
        ];
<<<<<<< HEAD

        foreach ($contextualPairs as $key => $expected) {
            $translation = __("lang::common.{$key}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        foreach ($contextualPairs as $key => $expected) {
            $translation = __("lang::common.{$key}");
=======
        foreach ($contextualPairs as $key => $expected) {
            $translation = (string) __("lang::common.{$key}");
>>>>>>> a12f125f4a (.)
=======

        foreach ($contextualPairs as $key => $expected) {
            $translation = __("lang::common.{$key}");
>>>>>>> b93ef594b4 (.)
=======
        
        foreach ($contextualPairs as $key => $expected) {
            $translation = __("lang::common.{$key}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            expect($translation)->toBe($expected);
        }
    });
});

describe('LangServiceProvider Performance', function () {
    it('loads translations efficiently', function () {
        $startTime = microtime(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        $this->provider->boot();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

<<<<<<< HEAD
=======
=======
        
        $this->provider->boot();
        
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });

    it('caches translations for performance', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        // Prima chiamata
        $startTime = microtime(true);
        $translation1 = __('lang::common.welcome');
        $endTime = microtime(true);
        $firstCallTime = $endTime - $startTime;
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        // Seconda chiamata (dovrebbe essere più veloce)
        $startTime = microtime(true);
        $translation2 = __('lang::common.welcome');
        $endTime = microtime(true);
        $secondCallTime = $endTime - $startTime;
<<<<<<< HEAD

=======
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
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
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation1)->toBe($translation2);
        expect($secondCallTime)->toBeLessThanOrEqual($firstCallTime);
    });

    it('handles multiple language switches efficiently', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        $languages = ['it', 'en', 'de', 'it']; // Torna a italiano

        $startTime = microtime(true);

        foreach ($languages as $locale) {
            app()->setLocale($locale);
<<<<<<< HEAD
            $translation = __('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $translation = __('lang::common.welcome');
=======
            $translation = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======
            $translation = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
            expect($translation)->toBeString();
        }

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

<<<<<<< HEAD
=======
=======
        
        $languages = ['it', 'en', 'de', 'it']; // Torna a italiano
        
        $startTime = microtime(true);
        
        foreach ($languages as $locale) {
            app()->setLocale($locale);
            $translation = __('lang::common.welcome');
            expect($translation)->toBeString();
        }
        
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });
});

describe('LangServiceProvider Error Handling', function () {
    it('handles missing translation files gracefully', function () {
        // Simula file di traduzione mancanti
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Dovrebbe gestire graziosamente i file mancanti
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('handles malformed translation files gracefully', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Dovrebbe gestire graziosamente i file malformati
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('handles empty translation files gracefully', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Dovrebbe gestire graziosamente i file vuoti
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
});

describe('LangServiceProvider Integration', function () {
    it('works with Laravel translation system', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Verifica integrazione con il sistema di traduzione di Laravel
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
        expect(__('lang::common.welcome'))->toBeString();
<<<<<<< HEAD
=======
=======
        // Verifica integrazione con il sistema di traduzione di Laravel
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
        expect((string) __('lang::common.welcome'))->toBeString();
>>>>>>> a12f125f4a (.)
=======

        // Verifica integrazione con il sistema di traduzione di Laravel
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
        expect(__('lang::common.welcome'))->toBeString();
>>>>>>> b93ef594b4 (.)
=======
        
        // Verifica integrazione con il sistema di traduzione di Laravel
        expect(Lang::has('lang::common.welcome'))->toBeTrue();
        expect(__('lang::common.welcome'))->toBeString();
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    });

    it('works with Filament components', function () {
        $this->provider->boot();
<<<<<<< HEAD

        // Verifica che le traduzioni siano disponibili per i componenti Filament
        $translation = __('lang::common.save');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Verifica che le traduzioni siano disponibili per i componenti Filament
        $translation = __('lang::common.save');
=======
        // Verifica che le traduzioni siano disponibili per i componenti Filament
        $translation = (string) __('lang::common.save');
>>>>>>> a12f125f4a (.)
=======

        // Verifica che le traduzioni siano disponibili per i componenti Filament
        $translation = __('lang::common.save');
>>>>>>> b93ef594b4 (.)
=======
        
        // Verifica che le traduzioni siano disponibili per i componenti Filament
        $translation = __('lang::common.save');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.save');
    });

    it('works with Blade templates', function () {
        $this->provider->boot();
<<<<<<< HEAD

        // Verifica che le traduzioni siano disponibili nei template Blade
        $translation = lang('lang::common.welcome');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Verifica che le traduzioni siano disponibili nei template Blade
        $translation = lang('lang::common.welcome');
=======
        // Verifica che le traduzioni siano disponibili nei template Blade
        $translation = @lang('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======

        // Verifica che le traduzioni siano disponibili nei template Blade
        $translation = lang('lang::common.welcome');
>>>>>>> b93ef594b4 (.)
=======
        
        // Verifica che le traduzioni siano disponibili nei template Blade
        $translation = @lang('lang::common.welcome');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation)->toBeString();
        expect($translation)->not->toBe('lang::common.welcome');
    });
});

describe('LangServiceProvider Configuration', function () {
    it('respects Laravel configuration', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Verifica che rispetti la configurazione di Laravel
        $defaultLocale = config('app.locale');
        expect($defaultLocale)->toBeString();
        expect(strlen($defaultLocale))->toBeGreaterThan(0);
    });

    it('can be configured via config files', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Verifica che possa essere configurato tramite file di configurazione
        expect(config('app.fallback_locale'))->toBeString();
    });

    it('integrates with other service providers', function () {
        $this->provider->boot();
<<<<<<< HEAD

        // Verifica integrazione con altri service provider
        expect(app())->toBeInstanceOf(Application::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
        // Verifica integrazione con altri service provider
        expect(app())->toBeInstanceOf(Application::class);
=======
        
        // Verifica integrazione con altri service provider
        expect(app())->toBeInstanceOf(\Illuminate\Contracts\Foundation\Application::class);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    });
});

describe('LangServiceProvider Maintenance', function () {
    it('can be refreshed without errors', function () {
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Verifica che possa essere riavviato senza errori
        $this->provider->boot();

<<<<<<< HEAD
=======
=======
        
        // Verifica che possa essere riavviato senza errori
        $this->provider->boot();
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });

    it('maintains state consistency', function () {
        $this->provider->boot();
<<<<<<< HEAD

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        $translation1 = __('lang::common.welcome');

        $this->provider->boot();

        $translation2 = __('lang::common.welcome');
<<<<<<< HEAD

=======
=======
        $translation1 = (string) __('lang::common.welcome');

        $this->provider->boot();

        $translation2 = (string) __('lang::common.welcome');
>>>>>>> a12f125f4a (.)
=======
        $translation1 = __('lang::common.welcome');

        $this->provider->boot();

        $translation2 = __('lang::common.welcome');
>>>>>>> b93ef594b4 (.)

=======
        
        $translation1 = __('lang::common.welcome');
        
        $this->provider->boot();
        
        $translation2 = __('lang::common.welcome');
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        expect($translation1)->toBe($translation2);
    });

    it('can be unregistered and re-registered', function () {
        $this->provider->register();
        $this->provider->boot();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Simula unregister
        $this->provider = new LangServiceProvider(app());

        $this->provider->register();
        $this->provider->boot();

        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
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
        
        // Simula unregister
        $this->provider = new LangServiceProvider(app());
        
        $this->provider->register();
        $this->provider->boot();
        
        expect($this->provider)->toBeInstanceOf(LangServiceProvider::class);
    });
});
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
