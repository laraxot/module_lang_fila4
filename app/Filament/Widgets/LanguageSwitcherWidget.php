<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Widgets;

use Exception;
use Filament\Schemas\Components\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Override;

/**
 * Widget per il cambio di lingua.
 *
 * Fornisce un selettore dropdown per cambiare la lingua dell'interfaccia.
 * Utilizza il sistema di localizzazione di Laravel per gestire le traduzioni.
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
     *      *
     * @return array<int, Component>
     */
    #[Override]
    /**
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    /**
     * Dati da passare alla vista.
     *      *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'current_locale' => app()->getLocale(),
            'available_locales' => $this->getAvailableLocales(),
            'widget_id' => 'language-switcher-'.uniqid(),
        ];
    }

    /**
     * Metodo pubblico per esporre i dati della vista ad altri componenti.
     *
     * @return array<string, mixed>
     */
    public function exposeViewData(): array
    {
        return $this->getViewData();
    }

    /**
     * Ottiene le lingue disponibili nel sistema.
     *
     * @return Collection<int, array{code: string, name: string, native_name: string, flag: string|null}>
     */
    public function getAvailableLocales(): Collection
    {
        // Verifica se il modello Language esiste e ha dati
        if (class_exists('Modules\\Lang\\Models\\Language')) {
            try {
                $query = \Modules\Lang\Models\Language::query();
                if (is_object($query) && method_exists($query, 'where')) {
                    $query = $query->where('active', true);
                }
                if (is_object($query) && method_exists($query, 'orderBy')) {
                    $query = $query->orderBy('order');
                }
                if (is_object($query) && method_exists($query, 'get')) {
                    /** @var \Illuminate\Database\Eloquent\Collection $languages */
                    $languages = $query->get(['code', 'name', 'native_name', 'flag']);
                } else {
                    $languages = collect();
                }

                if ($languages->isNotEmpty()) {
                    /** @var Collection<int, array{code: string, name: string, native_name: string, flag: string|null}> $out */
                    $out = $languages->map(function ($language): array {
                        // Estrazione sicura degli attributi senza accesso diretto a proprietà dinamiche
                        if (is_object($language) && method_exists($language, 'only')) {
                            /** @var array{code:mixed,name:mixed,native_name:mixed,flag:mixed} $attr */
                            $attr = $language->only(['code', 'name', 'native_name', 'flag']);
                        } else {
                            /** @var array{code:mixed,name:mixed,native_name:mixed,flag:mixed} $attr */
                            $attr = [
                                'code' => null,
                                'name' => null,
                                'native_name' => null,
                                'flag' => null,
                            ];
                        }

                        $code = is_string($attr['code']) ? $attr['code'] : '';
                        $name = is_string($attr['name']) ? $attr['name'] : '';
                        $nativeName = is_string($attr['native_name']) ? $attr['native_name'] : $name;
                        $flag = is_string($attr['flag']) ? $attr['flag'] : null;

                        return [
                            'code' => $code,
                            'name' => $name,
                            'native_name' => $nativeName,
                            'flag' => $flag,
                        ];
                    })->values();

                    return $out;
                }
            } catch (Exception $e) {
                // Log dell'errore ma continua con il fallback
                Log::warning('Language model query failed', ['error' => $e->getMessage()]);
            }
        }

        // Fallback alle lingue configurate staticamente
        /** @var Collection<int, array{code: string, name: string, native_name: string, flag: string|null}> */
        $fallback = collect($this->getDefaultLanguages());

        return $fallback;
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
     */
    protected function isValidLocale(string $locale): bool
    {
        $availableLocales = $this->getAvailableLocales();

        return $availableLocales->contains('code', $locale);
    }

    /**
     * Genera l'URL per una specifica lingua.
     */
    public function getLanguageUrl(string $locale): string
    {
        $currentUrl = request()->url();
        $currentLocale = app()->getLocale();

        // Se l'URL contiene già la lingua corrente, sostituiscila
        if (str_contains($currentUrl, '/'.$currentLocale.'/')) {
            return str_replace('/'.$currentLocale.'/', '/'.$locale.'/', $currentUrl);
        } elseif (str_ends_with($currentUrl, '/'.$currentLocale)) {
            return str_replace('/'.$currentLocale, '/'.$locale, $currentUrl);
        } else {
            // Aggiunge la lingua all'URL
            $path = request()->getPathInfo();

            return url($locale.($path === '/' ? '' : $path));
        }
    }
}
