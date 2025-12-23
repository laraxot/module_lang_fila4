<<<<<<< HEAD
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
=======
# 📚 **Indice Documentazione Modulo Lang - Laraxot**

## 🎯 **Panoramica**

Questo indice fornisce una mappa completa della documentazione del modulo Lang, organizzata per argomenti e livelli di competenza. Segue i principi **DRY**, **KISS**, **SOLID**, **Robust** e **Laraxot**.

---

## 🚀 **Inizio Rapido**

### **Per Sviluppatori**
1. [README.md](README.md) - Documentazione principale e panoramica
2. [config/lang.php](../config/lang.php) - Configurazione centralizzata
3. [EXAMPLES.md](EXAMPLES.md) - Esempi pratici e casi d'uso

### **Per Amministratori**
1. [BEST_PRACTICES.md](BEST_PRACTICES.md) - Best practices e linee guida
2. [TROUBLESHOOTING.md](TROUBLESHOOTING.md) - Guida troubleshooting
3. [config/lang.php](../config/lang.php) - Configurazione e ottimizzazioni

### **Per Integratori**
1. [API_REFERENCE.md](API_REFERENCE.md) - Riferimento API completo
2. [EXAMPLES.md](EXAMPLES.md) - Esempi di integrazione
3. [BEST_PRACTICES.md](BEST_PRACTICES.md) - Pattern di implementazione

---

## 📖 **Documentazione per Argomento**

### **🏗️ Architettura e Design**
- **Principi Fondamentali**: [BEST_PRACTICES.md](BEST_PRACTICES.md#principi-architetturali)
- **Struttura Modulo**: [README.md](README.md#architettura)
- **Configurazione**: [config/lang.php](../config/lang.php)

### **🔧 Implementazione e Sviluppo**
- **Setup Iniziale**: [README.md](README.md#installazione)
- **Configurazione**: [README.md](README.md#configurazione)
- **Utilizzo Base**: [README.md](README.md#utilizzo)
- **Esempi Pratici**: [EXAMPLES.md](EXAMPLES.md)

### **🎨 Integrazione Filament**
- **Componenti Automatici**: [EXAMPLES.md](EXAMPLES.md#integrazione-filament)
- **Actions Personalizzate**: [EXAMPLES.md](EXAMPLES.md#actions-personalizzate)
- **Resources**: [EXAMPLES.md](EXAMPLES.md#resource-base)
- **Best Practices**: [BEST_PRACTICES.md](BEST_PRACTICES.md#integrazione-filament)

### **📁 Struttura File Traduzioni**
- **Organizzazione**: [BEST_PRACTICES.md](BEST_PRACTICES.md#struttura-file-traduzioni)
- **Convenzioni**: [BEST_PRACTICES.md](BEST_PRACTICES.md#convenzioni-naming)
- **Esempi Completi**: [EXAMPLES.md](EXAMPLES.md#struttura-file-traduzioni)
- **Validazione**: [BEST_PRACTICES.md](BEST_PRACTICES.md#validazione-e-controlli)

### **🔒 Sicurezza e Validazione**
- **Validazione File**: [BEST_PRACTICES.md](BEST_PRACTICES.md#sicurezza-e-validazione)
- **Controlli Integrità**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#problemi-di-sicurezza)
- **Rate Limiting**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#rate-limiting)

### **🚀 Performance e Ottimizzazione**
- **Cache Strategy**: [BEST_PRACTICES.md](BEST_PRACTICES.md#performance-e-ottimizzazione)
- **Lazy Loading**: [BEST_PRACTICES.md](BEST_PRACTICES.md#lazy-loading)
- **Memory Management**: [BEST_PRACTICES.md](BEST_PRACTICES.md#memory-management)
- **Benchmark**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#metriche-performance)

### **🧪 Testing e Qualità**
- **Test Unitari**: [EXAMPLES.md](EXAMPLES.md#testing)
- **Test Feature**: [EXAMPLES.md](EXAMPLES.md#test-feature)
- **PHPStan Compliance**: [BEST_PRACTICES.md](BEST_PRACTICES.md#testing-e-qualità)
- **Validazione Automatica**: [BEST_PRACTICES.md](BEST_PRACTICES.md#validazione-automatica)

### **🔄 Manutenzione e Aggiornamenti**
- **Versioning**: [BEST_PRACTICES.md](BEST_PRACTICES.md#versioning-traduzioni)
- **Migrazione**: [BEST_PRACTICES.md](BEST_PRACTICES.md#migrazione-versioni)
- **Rollback**: [BEST_PRACTICES.md](BEST_PRACTICES.md#rollback-e-recovery)
- **Backup**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#emergenze-e-rollback)

---

## 🎓 **Livelli di Competenza**

### **🟢 Principiante**
**Conoscenze Base**
- Concetti di localizzazione Laravel
- Struttura base file traduzioni
- Utilizzo helper `__()` e `trans()`

**Documenti da Leggere**
1. [README.md](README.md) - Sezioni: Panoramica, Installazione, Utilizzo
2. [EXAMPLES.md](EXAMPLES.md) - Sezioni: Struttura File Base
3. [config/lang.php](../config/lang.php) - Configurazioni base

**Obiettivi**
- Comprendere l'architettura del modulo
- Creare file di traduzione semplici
- Integrare traduzioni in componenti base

### **🟡 Intermedio**
**Conoscenze Avanzate**
- Integrazione con Filament
- Gestione cache e performance
- Validazione e controllo qualità

**Documenti da Leggere**
1. [BEST_PRACTICES.md](BEST_PRACTICES.md) - Tutte le sezioni
2. [EXAMPLES.md](EXAMPLES.md) - Integrazione Filament e Testing
3. [TROUBLESHOOTING.md](TROUBLESHOOTING.md) - Problemi comuni

**Obiettivi**
- Implementare best practices
- Ottimizzare performance
- Gestire errori e troubleshooting

### **🔴 Esperto**
**Conoscenze Specialistiche**
- Architettura avanzata
- API personalizzate
- Estensioni e plugin

**Documenti da Leggere**
1. [API_REFERENCE.md](API_REFERENCE.md) - Tutte le sezioni
2. [BEST_PRACTICES.md](BEST_PRACTICES.md) - Pattern avanzati
3. [TROUBLESHOOTING.md](TROUBLESHOOTING.md) - Problemi complessi

**Obiettivi**
- Estendere funzionalità
- Creare plugin personalizzati
- Contribuire al framework

---

## 🔍 **Ricerca per Parole Chiave**

### **Localizzazione**
- **File PHP**: [BEST_PRACTICES.md](BEST_PRACTICES.md#sintassi-file-php)
- **File JSON**: [README.md](README.md#file-php-vs-json)
- **Fallback**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#fallback-traduzioni)
- **Pluralizzazione**: [EXAMPLES.md](EXAMPLES.md#gestione-pluralizzazione)

### **Filament**
- **Componenti**: [EXAMPLES.md](EXAMPLES.md#componenti-automatici)
- **Actions**: [EXAMPLES.md](EXAMPLES.md#actions-personalizzate)
- **Resources**: [EXAMPLES.md](EXAMPLES.md#resource-base)
- **Integrazione**: [BEST_PRACTICES.md](BEST_PRACTICES.md#integrazione-filament)

### **Performance**
- **Cache**: [BEST_PRACTICES.md](BEST_PRACTICES.md#cache-strategy)
- **Lazy Loading**: [BEST_PRACTICES.md](BEST_PRACTICES.md#lazy-loading)
- **Memory**: [BEST_PRACTICES.md](BEST_PRACTICES.md#memory-management)
- **Benchmark**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#benchmark-completo)

### **Validazione**
- **Sintassi**: [BEST_PRACTICES.md](BEST_PRACTICES.md#sintassi-valida)
- **Struttura**: [BEST_PRACTICES.md](BEST_PRACTICES.md#struttura-gerarchica)
- **Auto-fix**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#fix-automatici)
- **Report**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#report-qualità)

### **Testing**
- **Unit Test**: [EXAMPLES.md](EXAMPLES.md#test-unitari)
- **Feature Test**: [EXAMPLES.md](EXAMPLES.md#test-feature)
- **PHPStan**: [BEST_PRACTICES.md](BEST_PRACTICES.md#phpstan-compliance)
- **Validazione**: [BEST_PRACTICES.md](BEST_PRACTICES.md#validazione-automatica)

---

## 🛠️ **Comandi Artisan**

### **Gestione Traduzioni**
```bash
# Validazione
php artisan lang:validate [--module=MODULE] [--locale=LOCALE] [--detailed]

# Report qualità
php artisan lang:report [--format=json|csv] [--output=FILE]

# Fix automatici
php artisan lang:fix [--auto] [--backup]

# Gestione cache
php artisan lang:cache [--clear|--status|--warm]

# Benchmark performance
php artisan lang:benchmark [--detailed]

# Debug e troubleshooting
php artisan lang:debug [--log-missing] [--log-performance]
```

### **Opzioni Comuni**
- `--module=MODULE`: Specifica modulo da processare
- `--locale=LOCALE`: Specifica locale da processare
- `--detailed`: Output dettagliato
- `--format=FORMAT`: Formato output (json, csv, table)
- `--output=FILE`: Salva output su file
- `--auto`: Correzione automatica
- `--backup`: Crea backup prima delle modifiche

---

## 📋 **Checklist Implementazione**

### **Pre-Implementazione**
- [ ] Analisi requisiti business
- [ ] Definizione struttura traduzioni
- [ ] Pianificazione naming conventions
- [ ] Setup ambiente sviluppo

### **Implementazione**
- [ ] Creazione file traduzioni base
- [ ] Implementazione servizi core
- [ ] Integrazione Filament
- [ ] Configurazione cache

### **Post-Implementazione**
- [ ] Test PHPStan livello 9+
- [ ] Validazione traduzioni
- [ ] Test performance
- [ ] Documentazione aggiornata

---

## 🚨 **Problemi Comuni**

### **Traduzioni Non Caricate**
- **Sintomi**: Chiavi visibili invece del testo
- **Soluzione**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#traduzioni-non-caricate)

### **Performance Lente**
- **Sintomi**: Caricamento pagine lento
- **Soluzione**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#performance-lente)

### **Errori di Validazione**
- **Sintomi**: Comandi `lang:validate` falliscono
- **Soluzione**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#errori-di-validazione)

### **Integrazione Filament**
- **Sintomi**: Componenti senza label
- **Soluzione**: [TROUBLESHOOTING.md](TROUBLESHOOTING.md#integrazione-filament)

---

## 🔗 **Riferimenti Esterni**

### **Framework e Documentazione**
- [Laravel Localization](https://laravel.com/project_docs/localization) - Documentazione ufficiale
- [Filament Documentation](https://filamentphp.com/docs) - Documentazione Filament
- [Laraxot Framework](https://github.com/laraxot/laraxot) - Framework principale
- [PHPStan Documentation](https://phpstan.org/) - Analisi statica

### **Strumenti e Risorse**
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper) - Autocompletamento IDE
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) - Debug e profiling
- [Laravel Telescope](https://laravel.com/project_docs/telescope) - Monitoring applicazione

---

## 📞 **Supporto e Contributi**

### **Come Ottenere Aiuto**
1. **Documentazione**: Consulta prima questa documentazione
2. **Troubleshooting**: Verifica la sezione troubleshooting
3. **Esempi**: Studia i casi d'uso pratici
4. **Community**: Partecipa alla community Laraxot

### **Come Contribuire**
1. **Segui le linee guida**: [README.md](README.md#contributi)
2. **Testa il codice**: PHPStan livello 9+ e test unitari
3. **Documenta**: Aggiorna sempre la documentazione
4. **Pull Request**: Crea PR con descrizione dettagliata

---

**Ultimo aggiornamento**: Gennaio 2025  
**Versione**: 2.0.0  
**Autore**: Team Laraxot  
**Mantenuto da**: Community Laraxot
>>>>>>> laraxot/develop
