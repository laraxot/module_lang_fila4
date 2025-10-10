<?php

declare(strict_types=1);

namespace Modules\Lang\View\Composers;

<<<<<<< HEAD
use Exception;
use InvalidArgumentException;
=======
<<<<<<< HEAD
use Exception;
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Lang\Datas\LangData;
use Spatie\LaravelData\DataCollection;

/**
 * Classe per la composizione di dati relativi alle lingue nei template.
 */
class ThemeComposer
{
    /**
     * Get all supported languages as a DataCollection.
     *
<<<<<<< HEAD
     * @throws Exception if supportedLocales config is not an array
=======
<<<<<<< HEAD
     * @throws Exception if supportedLocales config is not an array
=======
     * @throws \Exception if supportedLocales config is not an array
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
     *
     * @return DataCollection<LangData>
     */
    public function languages(): DataCollection
    {
        // ✅ Controllo sicuro della configurazione laravellocalization
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        $langs = config()->has('laravellocalization.supportedLocales')
            ? config('laravellocalization.supportedLocales')
            : [
                'it' => ['name' => 'Italiano', 'regional' => 'it_IT'],
                'en' => ['name' => 'English', 'regional' => 'en_US'],
            ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        if (!is_array($langs)) {
            throw new Exception(sprintf(
                'Invalid config for supportedLocales on line %d in %s',
                __LINE__,
                class_basename($this),
            ));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => ['name' => 'Italiano', 'regional' => 'it_IT'], 'en' => ['name' => 'English', 'regional' => 'en_US']];

        if (! is_array($langs)) {
<<<<<<< HEAD
            throw new Exception(sprintf('Invalid config for supportedLocales on line %d in %s', __LINE__, class_basename($this)));
>>>>>>> a12f125f4a (.)
=======

        if (!is_array($langs)) {
            throw new Exception(sprintf(
                'Invalid config for supportedLocales on line %d in %s',
                __LINE__,
                class_basename($this),
            ));
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception(sprintf('Invalid config for supportedLocales on line %d in %s', __LINE__, class_basename($this)));
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        $languages = collect($langs)->map(function (mixed $item, string $locale): array {
            // Ensure $item is an array
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
            if (!is_array($item)) {
                throw new InvalidArgumentException(sprintf(
                    'Expected array at locale %s, got %s',
                    $locale,
                    gettype($item),
                ));
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
            }

            // Ensure $item has the required keys
            if (!isset($item['regional'], $item['name'])) {
                throw new InvalidArgumentException(sprintf(
                    'Expected array with "regional" and "name" keys at locale %s',
                    $locale,
                ));
<<<<<<< HEAD
=======
=======
            if (! is_array($item)) {
                throw new InvalidArgumentException(sprintf('Expected array at locale %s, got %s', $locale, gettype($item)));
=======
            if (! is_array($item)) {
                throw new \InvalidArgumentException(sprintf('Expected array at locale %s, got %s', $locale, gettype($item)));
>>>>>>> origin/develop
            }

            // Ensure $item has the required keys
            if (! isset($item['regional'], $item['name'])) {
<<<<<<< HEAD
                throw new InvalidArgumentException(sprintf('Expected array with "regional" and "name" keys at locale %s', $locale));
>>>>>>> a12f125f4a (.)
=======
            }

            // Ensure $item has the required keys
            if (!isset($item['regional'], $item['name'])) {
                throw new InvalidArgumentException(sprintf(
                    'Expected array with "regional" and "name" keys at locale %s',
                    $locale,
                ));
>>>>>>> b93ef594b4 (.)
=======
                throw new \InvalidArgumentException(sprintf('Expected array with "regional" and "name" keys at locale %s', $locale));
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            }

            // Extract regional code and handle 'en' to 'gb' mapping.
            // Verifichiamo che regional sia una stringa o lo convertiamo in modo sicuro
            $regional = $item['regional'];
<<<<<<< HEAD
            if (!is_string($regional)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_string($regional)) {
=======
            if (! is_string($regional)) {
>>>>>>> a12f125f4a (.)
=======
            if (!is_string($regional)) {
>>>>>>> b93ef594b4 (.)
=======
            if (! is_string($regional)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
                $regional = '';
            }
            $regionalParts = explode('_', $regional);
            $regionalCode = $regionalParts[0] ?? 'en';

            if ('en' === $regionalCode) {
                $regionalCode = 'gb';
            }

            $url = '#'; // Placeholder URL for frontend.
            if (inAdmin()) {
                $url = $this->buildAdminLanguageUrl($locale);
            }

            // Verifichiamo che name sia una stringa o lo convertiamo in modo sicuro
            $name = $item['name'];
<<<<<<< HEAD
            if (!is_string($name)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_string($name)) {
=======
            if (! is_string($name)) {
>>>>>>> a12f125f4a (.)
=======
            if (!is_string($name)) {
>>>>>>> b93ef594b4 (.)
=======
            if (! is_string($name)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
                $name = $locale; // Fallback al codice locale
            }

            return [
                'id' => $locale,
                'name' => $name,
                'flag' => $this->buildFlagHtml($regionalCode),
                'url' => $url,
            ];
        });

        // Convertiamo esplicitamente a array<int, mixed> per soddisfare il tipo richiesto
        $languagesArray = $languages->values()->all();

        return LangData::collection($languagesArray);
    }

    /**
     * Get all languages except the current one.
     *
     * @return DataCollection<LangData>
     */
    public function otherLanguages(): DataCollection
    {
        $currentLocale = app()->getLocale();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        return $this->languages()->filter(function (mixed $item) use ($currentLocale): bool {
            // Ensure the item is an instance of LangData
            if (!($item instanceof LangData)) {
                throw new Exception(sprintf(
                    'Expected instance of LangData, got %s',
                    is_object($item) ? get_class($item) : gettype($item),
                ));
            }
<<<<<<< HEAD

            return $item->id !== $currentLocale;
        });
=======
<<<<<<< HEAD

            return $item->id !== $currentLocale;
        });
=======
=======
>>>>>>> origin/develop
        return $this->languages()
            ->filter(function (mixed $item) use ($currentLocale): bool {
                // Ensure the item is an instance of LangData
                if (! $item instanceof LangData) {
<<<<<<< HEAD
                    throw new Exception(sprintf('Expected instance of LangData, got %s', is_object($item) ? get_class($item) : gettype($item)));
=======
                    throw new \Exception(sprintf('Expected instance of LangData, got %s', is_object($item) ? get_class($item) : gettype($item)));
>>>>>>> origin/develop
                }

                return $item->id !== $currentLocale;
            });
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            return $item->id !== $currentLocale;
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Get a specific field of the current language.
     *
<<<<<<< HEAD
     * @throws Exception if the current language is not found
=======
<<<<<<< HEAD
     * @throws Exception if the current language is not found
=======
     * @throws \Exception if the current language is not found
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
     */
    public function currentLang(string $field): string
    {
        $currentLocale = app()->getLocale();

        // Convert DataCollection to a Laravel Collection to use firstWhere()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        $lang = $this->languages()->toCollection()->firstWhere('id', $currentLocale);

        if (!($lang instanceof LangData)) {
            throw new Exception(sprintf(
                'Current language not found on line %d in %s',
                __LINE__,
                class_basename($this),
            ));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $lang = $this->languages()
            ->toCollection()
            ->firstWhere('id', $currentLocale);

        if (! $lang instanceof LangData) {
<<<<<<< HEAD
            throw new Exception(sprintf('Current language not found on line %d in %s', __LINE__, class_basename($this)));
>>>>>>> a12f125f4a (.)
=======
        $lang = $this->languages()->toCollection()->firstWhere('id', $currentLocale);

        if (!($lang instanceof LangData)) {
            throw new Exception(sprintf(
                'Current language not found on line %d in %s',
                __LINE__,
                class_basename($this),
            ));
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception(sprintf('Current language not found on line %d in %s', __LINE__, class_basename($this)));
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        // Verifichiamo che il valore del campo sia una stringa o lo convertiamo in modo sicuro
        $value = $lang->{$field};
<<<<<<< HEAD
        if (!is_string($value)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($value)) {
=======
        if (! is_string($value)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($value)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_string($value)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            return 'id' === $field ? $currentLocale : '';
        }

        return $value;
    }

    /**
     * Build the URL for the admin panel based on the current route and parameters.
     *
     * @param string $locale The locale code to build URL for
     *
     * @return string The generated URL
     */
    private function buildAdminLanguageUrl(string $locale): string
    {
        $routeName = Route::currentRouteName();
<<<<<<< HEAD
        if (!is_string($routeName)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($routeName)) {
=======
        if (! is_string($routeName)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($routeName)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_string($routeName)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            return '#';
        }
        $routeParameters = array_merge(getRouteParameters(), ['lang' => $locale]);
        $queryParameters = request()->all();

        $url = route($routeName, $routeParameters);

        return Request::create($url)->fullUrlWithQuery($queryParameters);
    }

    /**
     * Build the HTML for the language flag.
     *
     * @param string $regionalCode The regional code for the flag
     *
     * @return string The HTML for the flag
     */
    private function buildFlagHtml(string $regionalCode): string
    {
<<<<<<< HEAD
        return sprintf('<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>', e($regionalCode));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return sprintf('<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>', e($regionalCode));
=======
=======
>>>>>>> origin/develop
        return sprintf(
            '<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>',
            e($regionalCode)
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return sprintf('<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>', e($regionalCode));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }
}
