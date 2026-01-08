<?php

declare(strict_types=1);

namespace Modules\Lang\Providers\Traits;

// --- services ---
use Illuminate\Translation\Translator;
use Modules\Lang\Services\TranslatorService;

trait TranslatorTrait
{
    public function registerTranslator(): void
    {
        // Override the JSON Translator
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        $this->app->extend('translator', static function (Translator $translator): TranslatorService {
            $translatorService = new TranslatorService($translator->getLoader(), $translator->getLocale());
            $translatorService->setFallback($translator->getFallback());

            return $translatorService;
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->app->extend(
            'translator',
            static function (Translator $translator): TranslatorService {
                $translatorService = new TranslatorService($translator->getLoader(), $translator->getLocale());
                $translatorService->setFallback($translator->getFallback());

                return $translatorService;
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->app->extend('translator', static function (Translator $translator): TranslatorService {
            $translatorService = new TranslatorService($translator->getLoader(), $translator->getLocale());
            $translatorService->setFallback($translator->getFallback());

            return $translatorService;
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }
}
