# Lang Module Documentation

## Overview
The Lang module provides comprehensive internationalization and localization capabilities for the Laraxot system. It manages multilingual content, language switching, translation management, and cultural adaptation features.

## Key Features
- **Multilingual Content**: Support for multiple languages in content
- **Language Switching**: Seamless language switching for users
- **Translation Management**: Centralized translation string management
- **Cultural Adaptation**: Locale-specific formatting and conventions
- **Translation Extraction**: Automatic extraction of translatable strings
- **Translation Memory**: Reuse of previously translated content

## Architecture
The module follows the Laraxot architecture principles:
- Extends Xot base classes
- Uses Filament for admin interface
- Implements proper service providers
- Follows DRY/KISS principles

## Supported Locales
1. **European Languages**: English, Italian, French, German, Spanish
2. **Asian Languages**: Chinese, Japanese, Korean
3. **Middle Eastern Languages**: Arabic, Hebrew
4. **Other Languages**: Portuguese, Russian, Dutch

## Core Components

### Models
- `Language` - Language definitions and metadata
- `Translation` - Translation strings and their translations
- `TranslationKey` - Keys for translation strings
- `TranslationMemory` - Previously translated content for reuse

### Resources
- `LanguageResource` - Language management interface
- `TranslationResource` - Translation string management
- `TranslationKeyResource` - Translation key management
- `LangDashboard` - Language and translation dashboard

### Services
- `LangService` - Core language and translation operations
- `Translator` - Translation functionality
- `LanguageSwitcher` - Language switching capabilities
- `TranslationExtractor` - Extract translatable strings
- `TranslationMemory` - Translation memory management

## Implementation Guide

### Basic Translation Usage
```php
// Using Laravel's translation helper
echo __('Welcome to our application');

// Using translation with parameters
echo __('Hello :name', ['name' => $user->name]);

// Using translation in specific language
echo __('Welcome', [], 'it'); // Italian translation

// Using translation with count
echo trans_choice('{0} No messages|[1] One message|[2,*] :count messages', $count, ['count' => $count]);
```

### Translation Management
```php
// Programmatically manage translations
$langService = app(LangService::class);

// Add new translation
$langService->addTranslation('en', 'welcome_message', 'Welcome to our application');

// Update existing translation
$langService->updateTranslation('it', 'welcome_message', 'Benvenuto nella nostra applicazione');

// Get translation
$translation = $langService->getTranslation('welcome_message', 'it');

// Bulk import translations
$langService->importTranslationsFromFile('/path/to/translations.csv');
```

### Language Switching
```php
// Implement language switching
$languageSwitcher = app(LanguageSwitcher::class);

// Switch to specific language
$languageSwitcher->switchTo('es'); // Switch to Spanish

// Get current language
$currentLanguage = $languageSwitcher->getCurrentLanguage();

// Get available languages
$availableLanguages = $languageSwitcher->getAvailableLanguages();

// Auto-detect user language
$userLanguage = $languageSwitcher->detectUserLanguage($request);
```

## Translation File Structure
```php
// resources/lang/en/messages.php
return [
    'welcome' => 'Welcome to our application',
    'goodbye' => 'Goodbye!',
    'user' => [
        'profile' => 'User Profile',
        'settings' => 'User Settings',
        'messages' => [
            'unread' => 'You have :count unread messages',
            'none' => 'You have no unread messages',
        ],
    ],
];
```

## Translation Extraction
```php
// Extract translatable strings from codebase
$extractor = app(TranslationExtractor::class);

// Extract from PHP files
$strings = $extractor->extractFromPHPFiles(base_path('Modules'));

// Extract from Blade templates
$bladeStrings = $extractor->extractFromBladeFiles(resource_path('views'));

// Extract from JavaScript files
$jsStrings = $extractor->extractFromJSFiles(resource_path('js'));

// Generate translation files
$extractor->generateTranslationFiles($strings, 'en');
```

## Cultural Adaptation Features

### Date and Time Formatting
```php
// Format dates according to locale
$dateFormatter = app(DateFormatter::class);

// Format date in user's locale
$formattedDate = $dateFormatter->formatDate($date, $user->locale);

// Format time according to cultural conventions
$formattedTime = $dateFormatter->formatTime($time, $user->locale);

// Format currency
$currencyFormatter = app(CurrencyFormatter::class);
$formattedCurrency = $currencyFormatter->format($amount, $user->locale);
```

### Number Formatting
- **Decimal Separators**: Comma vs. period based on locale
- **Thousands Separators**: Space, comma, or period separators
- **Number Grouping**: Different grouping patterns for large numbers

### Text Direction
- **Left-to-Right**: English, French, German, etc.
- **Right-to-Left**: Arabic, Hebrew
- **Vertical Writing**: Traditional Chinese, Japanese

## Translation Memory
1. **Reuse Translations**: Automatically suggest previously translated content
2. **Fuzzy Matching**: Find similar translations for new strings
3. **Translation Quality**: Maintain translation quality and consistency
4. **Reviewer Workflow**: Review and approve translations

## Performance Optimization
1. **Caching**: Cache frequently accessed translations
2. **Lazy Loading**: Load translations only when needed
3. **Preloading**: Preload commonly used translation files
4. **Minification**: Minimize translation file sizes
5. **CDN Distribution**: Distribute translation files via CDN

## Best Practices
1. **Consistent Keys**: Use consistent and descriptive translation keys
2. **Context Preservation**: Maintain context in translations
3. **Plural Forms**: Handle plural forms correctly for different languages
4. **Gender Neutrality**: Consider gender-neutral language options
5. **Cultural Sensitivity**: Be aware of cultural differences and sensitivities
6. **Regular Updates**: Keep translations up-to-date with content changes
7. **Professional Translation**: Use professional translators for important content

## Related Modules
- [Xot Module](../Xot/docs/index.md) - Core base classes
- [User Module](../User/docs/README.md) - User authentication and management
- [UI Module](../UI/docs/README.md) - User interface components
- [Notify Module](../Notify/docs/index.md) - Notification system

## Troubleshooting
Common issues and solutions:
- Missing translation strings
- Incorrect plural forms
- Character encoding issues
- RTL layout problems
- Currency formatting errors