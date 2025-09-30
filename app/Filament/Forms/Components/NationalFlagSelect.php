<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Lang\Filament\Forms\Components;
=======
namespace Modules\Notify\Filament\Forms\Components;
>>>>>>> 1f77ca0 (.)

use Filament\Forms\Components\Select;
use Illuminate\Support\Arr;
use Modules\Xot\Actions\File\AssetAction;

/**
 * National Flag Select Component.
 *
 * A Filament Select component that displays countries with their flags
 * and supports searching by country name using localized translations.
 */
class NationalFlagSelect extends Select
{
    /**
     * Set up the component configuration.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->searchable()
            ->allowHtml()
            ->optionsLimit(300)
            ->native(false)
            ->options($this->getCountryOptions(...))
            ->getSearchResultsUsing($this->getFilteredCountryOptions(...));
    }

    /**
     * Get all country options with flags and localized names.
     *
     * @return array<string, string>
     */
    /**
     * @return array<string, string>
     */
    protected function getCountryOptions(): array
    {
        $countries = countries();
        $countries = Arr::sort($countries, fn ($c) => is_array($c) && isset($c['name']) ? $c['name'] : '');

        $options = Arr::mapWithKeys($countries, function ($c) {
            if (! is_array($c) || ! isset($c['iso_3166_1_alpha2']) || ! isset($c['name'])) {
                return [];
            }
            
            $code = is_string($c['iso_3166_1_alpha2']) ? $c['iso_3166_1_alpha2'] : '';
            $name = is_string($c['name']) ? $c['name'] : '';
            $flag_name = strtolower($code);
            $localizedLabel = __('lang::countries.'.$flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/'.$flag_name.'.svg');
            $flag = '<img src="'.$flag_src.'" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">'.$flag.$localizedLabel.'</span>';

            return [$code => $html];
        });

        // Assicura che sia array<string, string>
        $result = [];
        foreach ($options as $key => $value) {
            if (is_string($key) && is_string($value)) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    /**
     * Get filtered country options based on search query.
     *
     * @param  string  $search  The search query
     * @return array<string, string>
     */
    protected function getFilteredCountryOptions(string $search): array
    {
        if (empty(trim($search))) {
            return $this->getCountryOptions();
        }

        $countries = countries();
        $searchLower = strtolower($search);

        // Filter countries by search term
        $filteredCountries = array_filter($countries, function ($country) use ($searchLower) {
            if (! is_array($country) || ! isset($country['iso_3166_1_alpha2']) || ! isset($country['name'])) {
                return false;
            }
            
            $code = is_string($country['iso_3166_1_alpha2']) ? $country['iso_3166_1_alpha2'] : '';
            $flag_name = strtolower($code);

            // Get localized country name
            $localizedName = __('lang::countries.'.$flag_name);

            // Search in both English name and localized name
            $name = is_string($country['name']) ? strtolower($country['name']) : '';
            return
                str_contains($name, $searchLower) ||
                str_contains(strtolower($localizedName), $searchLower) ||
                str_contains(strtolower($code), $searchLower);
        });

        // Sort filtered results by name
        $filteredCountries = Arr::sort($filteredCountries, fn ($c) => is_array($c) && isset($c['name']) ? $c['name'] : '');

        // Map to options format with flags
        $options = Arr::mapWithKeys($filteredCountries, function ($c) {
            if (! is_array($c) || ! isset($c['iso_3166_1_alpha2']) || ! isset($c['name'])) {
                return [];
            }
            
            $code = is_string($c['iso_3166_1_alpha2']) ? $c['iso_3166_1_alpha2'] : '';
            $flag_name = strtolower($code);
            $localizedLabel = __('lang::countries.'.$flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/'.$flag_name.'.svg');
            $flag = '<img src="'.$flag_src.'" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">'.$flag.$localizedLabel.'</span>';

            return [$code => $html];
        });

        // Assicura che sia array<string, string>
        $result = [];
        foreach ($options as $key => $value) {
            if (is_string($key) && is_string($value)) {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
