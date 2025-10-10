<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Widgets;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
use Exception;
use Log;
use Illuminate\Support\Collection;
use Modules\Lang\Models\Language;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * Widget per il cambio di lingua.
 *
 * Fornisce un selettore dropdown per cambiare la lingua dell'interfaccia.
 * Utilizza il sistema di localizzazione di Laravel per gestire le traduzioni.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
 *
 * @package Modules\Lang\Filament\Widgets *
 * Fornisce un selettore dropdown per cambiare la lingua dell'interfaccia.
 * Utilizza il sistema di localizzazione di Laravel per gestire le traduzioni.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
 */
class LanguageSwitcherWidget extends XotBaseWidget
{
    /**
     * Vista del widget.
     */
    protected string $view = 'lang::filament.widgets.language-switcher';

    /**
     * Determina se il widget può essere visualizzato.
     */
    public static function canView(): bool
    {
        return true;
    }

    /**
     * Schema del form per la configurazione del widget.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
     *      *
     * @return array<int, Component>
     */
    #[Override]
<<<<<<< HEAD
=======
=======
     *
     * @return array<int, \Filament\Schemas\Components\Component>
     */
>>>>>>> a12f125f4a (.)
=======
     *      *
     * @return array<int, Component>
     */
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
    public function getFormSchema(): array
    {
        return [];
    }

    /**
     * Dati da passare alla vista.
<<<<<<< HEAD
     *      *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     *      *
=======
     *
>>>>>>> a12f125f4a (.)
=======
     *      *
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'current_locale' => app()->getLocale(),
            'available_locales' => $this->getAvailableLocales(),
<<<<<<< HEAD
            'widget_id' => 'language-switcher-' . uniqid(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'widget_id' => 'language-switcher-' . uniqid(),
=======
            'widget_id' => 'language-switcher-'.uniqid(),
>>>>>>> a12f125f4a (.)
=======
            'widget_id' => 'language-switcher-' . uniqid(),
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        ];
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * Metodo pubblico per esporre i dati della vista ad altri componenti.
     *
     * @return array<string, mixed>
     */
    public function exposeViewData(): array
    {
        return $this->getViewData();
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
     * Ottiene le lingue disponibili nel sistema.
     *
     * @return Collection<int, array{code: string, name: string, native_name: string, flag: string|null}>
     */
    public function getAvailableLocales(): Collection
<<<<<<< HEAD
=======
=======
=======
>>>>>>> b93ef594b4 (.)
     * Ottiene le lingue disponibili nel sistema.
     *
     * @return Collection<int, array{code: string, name: string, native_name: string, flag: string|null}>
     */
<<<<<<< HEAD
    protected function getAvailableLocales(): Collection
>>>>>>> a12f125f4a (.)
=======
    public function getAvailableLocales(): Collection
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
    {
        // Verifica se il modello Language esiste e ha dati
        if (class_exists(Language::class)) {
            try {
                $languages = Language::where('active', true)
                    ->orderBy('order')
                    ->get(['code', 'name', 'native_name', 'flag']);

                if ($languages->isNotEmpty()) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
                    return $languages->map(fn($language) => [
                        'code' => $language->code,
                        'name' => $language->name,
                        'native_name' => $language->native_name ?? $language->name,
                        'flag' => (string) ($language->flag ?? ''),
                    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                    return $languages->map(function ($language) {
                        return [
                            'code' => $language->code,
                            'name' => $language->name,
                            'native_name' => $language->native_name ?? $language->name,
                            'flag' => $language->flag ?? null,
                        ];
                    });
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
                }
            } catch (Exception $e) {
                // Log dell'errore ma continua con il fallback
                Log::warning('Language model query failed', ['error' => $e->getMessage()]);
            }
        }

        // Fallback alle lingue configurate staticamente
        return collect($this->getDefaultLanguages());
    }

    /**
     * Lingue di default se il modello Language non è disponibile.
     *
     * @return array<int, array{code: string, name: string, native_name: string, flag: string|null}>
     */
    protected function getDefaultLanguages(): array
    {
        return [
            [
                'code' => 'it',
                'name' => 'Italian',
                'native_name' => 'Italiano',
                'flag' => '🇮🇹',
            ],
            [
                'code' => 'en',
                'name' => 'English',
                'native_name' => 'English',
                'flag' => '🇬🇧',
            ],
            [
                'code' => 'de',
                'name' => 'German',
                'native_name' => 'Deutsch',
                'flag' => '🇩🇪',
            ],
        ];
    }

    /**
     * Cambia la lingua corrente.
     *
<<<<<<< HEAD
     * @param string $locale Codice della lingua
     * @return void     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $locale Codice della lingua
     * @return void     *
=======
>>>>>>> a12f125f4a (.)
=======
     * @param string $locale Codice della lingua
     * @return void     *
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * @param  string  $locale  Codice della lingua
     */
    public function changeLanguage(string $locale): void
    {
        if ($this->isValidLocale($locale)) {
            session(['locale' => $locale]);
            app()->setLocale($locale);

            // Redirect per applicare la nuova lingua
            $this->redirect(request()->url());
        }
    }

    /**
     * Verifica se il locale è valido.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
     *
     * @param string $locale
     * @return bool     */
    protected function isValidLocale(string $locale): bool
    {
        $availableLocales = $this->getAvailableLocales();
<<<<<<< HEAD
=======
=======
     */
    protected function isValidLocale(string $locale): bool
    {
        $availableLocales = $this->getAvailableLocales();

>>>>>>> a12f125f4a (.)
=======
     *
     * @param string $locale
     * @return bool     */
    protected function isValidLocale(string $locale): bool
    {
        $availableLocales = $this->getAvailableLocales();
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        return $availableLocales->contains('code', $locale);
    }

    /**
     * Genera l'URL per una specifica lingua.
     *
<<<<<<< HEAD
     * @param string $locale Codice della lingua     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $locale Codice della lingua     *
=======
>>>>>>> a12f125f4a (.)
=======
     * @param string $locale Codice della lingua     *
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * @param  string  $locale  Codice della lingua
     * @return string URL con la lingua specificata
     */
    public function getLanguageUrl(string $locale): string
    {
        $currentUrl = request()->url();
        $currentLocale = app()->getLocale();

        // Se l'URL contiene già la lingua corrente, sostituiscila
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        if (str_contains($currentUrl, '/' . $currentLocale . '/')) {
            return str_replace('/' . $currentLocale . '/', '/' . $locale . '/', $currentUrl);
        } elseif (str_ends_with($currentUrl, '/' . $currentLocale)) {
            return str_replace('/' . $currentLocale, '/' . $locale, $currentUrl);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (strpos($currentUrl, '/'.$currentLocale.'/') !== false) {
            return str_replace('/'.$currentLocale.'/', '/'.$locale.'/', $currentUrl);
        } elseif (str_ends_with($currentUrl, '/'.$currentLocale)) {
            return str_replace('/'.$currentLocale, '/'.$locale, $currentUrl);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        } else {
            // Aggiunge la lingua all'URL
            $path = request()->getPathInfo();

<<<<<<< HEAD
            return url($locale . ($path === '/' ? '' : $path));
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return url($locale . ($path === '/' ? '' : $path));
=======
            return url($locale.($path === '/' ? '' : $path));
>>>>>>> a12f125f4a (.)
=======
            return url($locale . ($path === '/' ? '' : $path));
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        }
    }
}
