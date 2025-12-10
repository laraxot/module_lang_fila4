<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Rinvex Countries Usage in Lang Module

## Overview
The Lang module utilizes the [Rinvex Countries](https://github.com/rinvex/countries) package to provide comprehensive country data including names, ISO codes, flags, currencies, and geographical information. This package provides data for all 250+ countries worldwide.
## Installation
The package is installed via Composer:
```bash
composer require rinvex/countries
```
## Basic Usage
### Getting Single Country
```php
// Get single country by ISO alpha-2 code
$italy = country('it');
// Get country name
echo $italy->getName(); // "Italy"
// Get native name
echo $italy->getNativeName(); // "Italia"
// Get official name
echo $italy->getOfficialName(); // "Italian Republic"
=======
=======
>>>>>>> 1bb26ee (.)
# Rinvex Countries Usage in Lang Module

## Overview

The Lang module utilizes the [Rinvex Countries](https://github.com/rinvex/countries) package to provide comprehensive country data including names, ISO codes, flags, currencies, and geographical information. This package provides data for all 250+ countries worldwide.

## Installation

The package is installed via Composer:

```bash
composer require rinvex/countries
```

## Basic Usage

### Getting Single Country

```php
// Get single country by ISO alpha-2 code
$italy = country('it');

// Get country name
echo $italy->getName(); // "Italy"

// Get native name
echo $italy->getNativeName(); // "Italia"

// Get official name
echo $italy->getOfficialName(); // "Italian Republic"

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
// Get ISO codes
echo $italy->getIsoAlpha2(); // "IT"
echo $italy->getIsoAlpha3(); // "ITA"
echo $italy->getIsoNumeric(); // "380"
<<<<<<< HEAD
<<<<<<< HEAD
### Getting All Countries
// Get all countries (short-listed for performance)
$countries = countries();
// Get countries with filtering
$oceaniaCountries = \Rinvex\Country\CountryLoader::where('geo.continent', ['OC' => 'Oceania']);
## Usage in NationalFlagSelect Component
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
The `NationalFlagSelect` component in `/var/www/html/_bases/base_<nome progetto>/laravel/Modules/Lang/app/Filament/Forms/Components/NationalFlagSelect.php` demonstrates practical usage:
=======
The `NationalFlagSelect` component in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Lang/app/Filament/Forms/Components/NationalFlagSelect.php` demonstrates practical usage:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
The `NationalFlagSelect` component in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Lang/app/Filament/Forms/Components/NationalFlagSelect.php` demonstrates practical usage:
The `NationalFlagSelect` component in `/var/www/html/_bases/base_saluteora/laravel/Modules/Lang/app/Filament/Forms/Components/NationalFlagSelect.php` demonstrates practical usage:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

```php
=======
>>>>>>> 9059f82 (.)
=======
=======
>>>>>>> 1bb26ee (.)
```

### Getting All Countries

```php
// Get all countries (short-listed for performance)
$countries = countries();

// Get countries with filtering
$oceaniaCountries = \Rinvex\Country\CountryLoader::where('geo.continent', ['OC' => 'Oceania']);
```

## Usage in NationalFlagSelect Component

<<<<<<< HEAD
The `NationalFlagSelect` component in `/var/www/html/_bases/base_saluteora/laravel/Modules/Lang/app/Filament/Forms/Components/NationalFlagSelect.php` demonstrates practical usage:

```php
>>>>>>> d5fc9cd (.)
=======
The `NationalFlagSelect` component in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Lang/app/Filament/Forms/Components/NationalFlagSelect.php` demonstrates practical usage:

```php
>>>>>>> 1bb26ee (.)
protected function getCountryOptions(): array
{
    // Get all countries using the countries() helper
    $countries = countries();
    
    // Sort countries by name
    $countries = Arr::sort($countries, function($c) {
        return $c['name'];
    });
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> d5fc9cd (.)
=======
    
>>>>>>> 1bb26ee (.)
    // Map countries to select options with flags
    $options = Arr::mapWithKeys($countries, function($c) {
        $code = $c['iso_3166_1_alpha2'];
        $label = $c['name'];
        $flag_name = strtolower($code);
        
        // Get localized country name from translation files
        $label = __('lang::countries.' . $flag_name);
<<<<<<< HEAD
<<<<<<< HEAD
        // Generate flag image HTML
        $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
        $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';
        $html = '<span class="flex items-center gap-2">' . $flag . $label . '</span>';
        return [$code => "{$html}"];
    return $options;
}
## Available Country Data
### Basic Information
=======
=======
>>>>>>> 1bb26ee (.)
        
        // Generate flag image HTML
        $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
        $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';
        
        $html = '<span class="flex items-center gap-2">' . $flag . $label . '</span>';
        return [$code => "{$html}"];
    });
    
    return $options;
}
```

## Available Country Data

### Basic Information

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- `getName()` - Common name in English
- `getOfficialName()` - Official name in English
- `getNativeName()` - Native name
- `getDemonym()` - Name of residents (e.g., "Italian")
- `getCapital()` - Capital city
<<<<<<< HEAD
<<<<<<< HEAD
### ISO Codes
- `getIsoAlpha2()` - 2-letter ISO code (e.g., "IT")
- `getIsoAlpha3()` - 3-letter ISO code (e.g., "ITA")
- `getIsoNumeric()` - Numeric ISO code (e.g., "380")
### Geographic Data
=======
=======
>>>>>>> 1bb26ee (.)

### ISO Codes

- `getIsoAlpha2()` - 2-letter ISO code (e.g., "IT")
- `getIsoAlpha3()` - 3-letter ISO code (e.g., "ITA")
- `getIsoNumeric()` - Numeric ISO code (e.g., "380")

### Geographic Data

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- `getContinent()` - Continent name
- `getRegion()` - Geographic region
- `getSubregion()` - Geographic sub-region
- `getLatitude()` - Latitude coordinates
- `getLongitude()` - Longitude coordinates
- `getArea()` - Land area in km²
- `getBorders()` - Array of bordering countries
- `isLandlocked()` - Boolean landlocked status
<<<<<<< HEAD
<<<<<<< HEAD
### Languages and Currencies
- `getLanguages()` - Array of official languages
- `getCurrency()` - Primary currency object
- `getCurrencies()` - All currencies used
### Communication
=======
=======
>>>>>>> 1bb26ee (.)

### Languages and Currencies

- `getLanguages()` - Array of official languages
- `getCurrency()` - Primary currency object
- `getCurrencies()` - All currencies used

### Communication

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- `getCallingCode()` - International calling code
- `getCallingCodes()` - All calling codes
- `getTld()` - Top-level domain (e.g., ".it")
- `getTlds()` - All top-level domains
<<<<<<< HEAD
<<<<<<< HEAD
### Visual Elements
- `getFlag()` - SVG flag data
- `getEmoji()` - Flag emoji (e.g., "🇮🇹")
### Translations
- `getTranslations()` - Names in multiple languages
- `getTranslation($language)` - Name in specific language
## Integration with Translation Files
The Lang module maintains synchronized translation files for country names and nationalities:
=======
=======
>>>>>>> 1bb26ee (.)

### Visual Elements

- `getFlag()` - SVG flag data
- `getEmoji()` - Flag emoji (e.g., "🇮🇹")

### Translations

- `getTranslations()` - Names in multiple languages
- `getTranslation($language)` - Name in specific language

## Integration with Translation Files

The Lang module maintains synchronized translation files for country names and nationalities:

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- `Modules/Lang/lang/it/countries.php` - Italian country names
- `Modules/Lang/lang/en/countries.php` - English country names  
- `Modules/Lang/lang/de/countries.php` - German country names
- `Modules/Lang/lang/it/nationalities.php` - Italian nationalities
- `Modules/Lang/lang/en/nationalities.php` - English nationalities
- `Modules/Lang/lang/de/nationalities.php` - German nationalities
<<<<<<< HEAD
<<<<<<< HEAD
These files are kept in sync with the Rinvex Countries data to ensure all country codes have corresponding translations.
## Data Structure Example
Each country object contains comprehensive data:
=======
=======
>>>>>>> 1bb26ee (.)

These files are kept in sync with the Rinvex Countries data to ensure all country codes have corresponding translations.

## Data Structure Example

Each country object contains comprehensive data:

```php
$italy = country('it');

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
// Returns structured data like:
[
    'name' => [
        'common' => 'Italy',
        'official' => 'Italian Republic',
        'native' => ['ita' => ['common' => 'Italia', 'official' => 'Repubblica Italiana']]
    ],
    'demonym' => 'Italian',
    'capital' => 'Rome',
    'iso_3166_1_alpha2' => 'IT',
    'iso_3166_1_alpha3' => 'ITA',
    'iso_3166_1_numeric' => '380',
    'currency' => ['EUR' => [...]], 
    'tld' => ['.it'],
    'languages' => ['ita' => 'Italian'],
    'geo' => [
        'continent' => ['EU' => 'Europe'],
        'area' => 301336,
        'borders' => ['AUT', 'FRA', 'SMR', 'SVN', 'CHE', 'VAT'],
        // ... more geo data
<<<<<<< HEAD
<<<<<<< HEAD
    'dialling' => [
        'calling_code' => ['39'],
        // ... more dialling data
=======
=======
>>>>>>> 1bb26ee (.)
    ],
    'dialling' => [
        'calling_code' => ['39'],
        // ... more dialling data
    ],
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
    'extra' => [
        'emoji' => '🇮🇹',
        // ... more extra data
    ]
]
<<<<<<< HEAD
<<<<<<< HEAD
## Performance Considerations
=======
=======
>>>>>>> 1bb26ee (.)
```

## Performance Considerations

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- When retrieving all countries with `countries()`, you get a short-listed result set for better performance
- When retrieving a single country with `country('code')`, you get the full country details
- Consider caching country data for frequently accessed information
- Use filtering with `CountryLoader::where()` for specific subsets
<<<<<<< HEAD
<<<<<<< HEAD
## Best Practices
=======

## Best Practices

>>>>>>> d5fc9cd (.)
=======

## Best Practices

>>>>>>> 1bb26ee (.)
1. **Use ISO codes consistently** - Always use lowercase 2-letter ISO codes for consistency
2. **Leverage translations** - Use the translation files instead of hardcoding country names
3. **Cache when appropriate** - Cache country data for better performance in high-traffic scenarios
4. **Validate input** - Always validate country codes before using them
5. **Handle missing data** - Some countries may have incomplete data for certain fields
<<<<<<< HEAD
<<<<<<< HEAD
## Error Handling
=======
=======
>>>>>>> 1bb26ee (.)

## Error Handling

```php
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
try {
    $country = country('invalid');
} catch (\Exception $e) {
    // Handle invalid country code
    $country = null;
<<<<<<< HEAD
<<<<<<< HEAD
=======
}

>>>>>>> d5fc9cd (.)
=======
}

>>>>>>> 1bb26ee (.)
// Check if country exists
if ($country) {
    echo $country->getName();
} else {
    echo 'Country not found';
<<<<<<< HEAD
<<<<<<< HEAD
## Related Documentation
=======
=======
>>>>>>> 1bb26ee (.)
}
```

## Related Documentation

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- [Translation File Management](translation-file-management.md)
- [Filament Components](filament.md)
- [Localization System](laravel-localization.md)
- [Static Text Translation](static-text-translation.md)
<<<<<<< HEAD
<<<<<<< HEAD
## External Resources
- [Rinvex Countries GitHub Repository](https://github.com/rinvex/countries)
- [ISO 3166 Country Codes](https://en.wikipedia.org/wiki/ISO_3166-1)
- [Country Data Sources](https://github.com/rinvex/countries#data-sources)
=======
>>>>>>> 121b362 (.)
=======
=======
>>>>>>> 1bb26ee (.)

## External Resources

- [Rinvex Countries GitHub Repository](https://github.com/rinvex/countries)
- [ISO 3166 Country Codes](https://en.wikipedia.org/wiki/ISO_3166-1)
- [Country Data Sources](https://github.com/rinvex/countries#data-sources)
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
