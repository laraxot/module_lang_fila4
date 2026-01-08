<?php

declare(strict_types=1);

return [
    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
     * |--------------------------------------------------------------------------
     * | Configurazione Base Localizzazione
     * |--------------------------------------------------------------------------
     * |
     * | Configurazione principale per il sistema di localizzazione
     * | del modulo Lang. Segue i principi DRY + KISS + SOLID.
     * |
     */
<<<<<<< HEAD
=======
    |--------------------------------------------------------------------------
    | Configurazione Base Localizzazione
    |--------------------------------------------------------------------------
    |
    | Configurazione principale per il sistema di localizzazione
    | del modulo Lang. Segue i principi DRY + KISS + SOLID.
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'default_locale' => env('APP_LOCALE', 'it'),
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
    'available_locales' => ['it', 'en', 'de'],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Cache e Performance
     * |--------------------------------------------------------------------------
     * |
     * | Ottimizzazioni per performance e scalabilità
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Cache e Performance
    |--------------------------------------------------------------------------
    |
    | Ottimizzazioni per performance e scalabilità
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'cache' => [
        'enabled' => env('LANG_CACHE_ENABLED', true),
        'ttl' => env('LANG_CACHE_TTL', 3600), // 1 ora
        'prefix' => 'lang_translations',
        'compression' => env('LANG_CACHE_COMPRESSION', true),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Validazione
     * |--------------------------------------------------------------------------
     * |
     * | Sistema di validazione e controllo qualità traduzioni
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Validazione
    |--------------------------------------------------------------------------
    |
    | Sistema di validazione e controllo qualità traduzioni
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'validation' => [
        'enabled' => env('LANG_VALIDATION_ENABLED', true),
        'strict_mode' => env('LANG_STRICT_MODE', false),
        'auto_fix' => env('LANG_AUTO_FIX', false),
        'report_missing_keys' => env('LANG_REPORT_MISSING', true),
        'quality_threshold' => env('LANG_QUALITY_THRESHOLD', 95), // %
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Auto-Translation
     * |--------------------------------------------------------------------------
     * |
     * | Integrazione con servizi di traduzione automatica
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Auto-Translation
    |--------------------------------------------------------------------------
    |
    | Integrazione con servizi di traduzione automatica
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'auto_translate' => [
        'enabled' => env('LANG_AUTO_TRANSLATE', false),
        'provider' => env('LANG_TRANSLATION_PROVIDER', 'google'),
        'api_key' => env('LANG_TRANSLATION_API_KEY'),
        'fallback_chain' => [
            'it' => ['en', 'de'],
            'de' => ['en', 'it'],
            'en' => ['it', 'de'],
        ],
        'quality_check' => env('LANG_AUTO_QUALITY_CHECK', true),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Filament Integration
     * |--------------------------------------------------------------------------
     * |
     * | Integrazione specifica con Filament UI
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Filament Integration
    |--------------------------------------------------------------------------
    |
    | Integrazione specifica con Filament UI
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'filament' => [
        'auto_labels' => env('LANG_FILAMENT_AUTO_LABELS', true),
        'auto_placeholders' => env('LANG_FILAMENT_AUTO_PLACEHOLDERS', true),
        'auto_help_text' => env('LANG_FILAMENT_AUTO_HELP', true),
        'component_prefix' => env('LANG_FILAMENT_PREFIX', ''),
        'fallback_to_key' => env('LANG_FILAMENT_FALLBACK_KEY', false),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Struttura File
     * |--------------------------------------------------------------------------
     * |
     * | Standardizzazione struttura file traduzioni
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Struttura File
    |--------------------------------------------------------------------------
    |
    | Standardizzazione struttura file traduzioni
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'structure' => [
        'required_files' => [
            'fields.php',
            'actions.php',
            'messages.php',
            'validation.php',
        ],
        'optional_files' => [
            'navigation.php',
            'errors.php',
            'notifications.php',
            'emails.php',
        ],
        'naming_convention' => 'snake_case',
        'array_syntax' => 'short', // [] invece di array()
        'strict_types' => true,
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Debug e Logging
     * |--------------------------------------------------------------------------
     * |
     * | Strumenti per sviluppo e troubleshooting
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Debug e Logging
    |--------------------------------------------------------------------------
    |
    | Strumenti per sviluppo e troubleshooting
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'debug' => [
        'enabled' => env('LANG_DEBUG', false),
        'log_missing_keys' => env('LANG_LOG_MISSING', true),
        'log_performance' => env('LANG_LOG_PERFORMANCE', false),
        'log_channel' => env('LANG_LOG_CHANNEL', 'translations'),
        'show_keys_in_production' => env('LANG_SHOW_KEYS_PROD', false),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Performance
     * |--------------------------------------------------------------------------
     * |
     * | Ottimizzazioni avanzate per performance
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Performance
    |--------------------------------------------------------------------------
    |
    | Ottimizzazioni avanzate per performance
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'performance' => [
        'lazy_loading' => env('LANG_LAZY_LOADING', true),
        'memory_optimization' => env('LANG_MEMORY_OPT', true),
        'batch_loading' => env('LANG_BATCH_LOADING', true),
        'preload_common_keys' => env('LANG_PRELOAD_COMMON', true),
        'compression_level' => env('LANG_COMPRESSION_LEVEL', 6),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Sicurezza
     * |--------------------------------------------------------------------------
     * |
     * | Protezioni e validazioni di sicurezza
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Sicurezza
    |--------------------------------------------------------------------------
    |
    | Protezioni e validazioni di sicurezza
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'security' => [
        'validate_file_integrity' => env('LANG_VALIDATE_INTEGRITY', true),
        'max_file_size' => env('LANG_MAX_FILE_SIZE', 1024 * 1024), // 1MB
        'allowed_extensions' => ['php'],
        'scan_for_malicious_code' => env('LANG_SCAN_MALICIOUS', true),
        'rate_limiting' => env('LANG_RATE_LIMITING', true),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Business Logic
     * |--------------------------------------------------------------------------
     * |
     * | Regole specifiche per logica di business
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Business Logic
    |--------------------------------------------------------------------------
    |
    | Regole specifiche per logica di business
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'business' => [
        'enforce_naming_conventions' => true,
        'require_context_in_keys' => true,
        'validate_business_terms' => true,
        'consistency_check' => true,
        'domain_specific_validation' => true,
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    /*
     * |--------------------------------------------------------------------------
     * | Configurazione Laraxot Integration
     * |--------------------------------------------------------------------------
     * |
     * | Integrazione specifica con framework Laraxot
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Configurazione Laraxot Integration
    |--------------------------------------------------------------------------
    |
    | Integrazione specifica con framework Laraxot
    |
    */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)

    'laraxot' => [
        'module_auto_discovery' => true,
        'shared_translations' => true,
        'cross_module_validation' => true,
        'unified_naming' => true,
        'framework_compliance' => true,
    ],
];
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
