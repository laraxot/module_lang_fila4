<<<<<<< HEAD
<<<<<<< HEAD
https://github.com/JoggApp/laravel-google-translate

https://github.com/tanmuhittin/laravel-google-translate

//--------------
https://github.com/Stichoza/google-translate-php   1700 stars
https://medium.com/@mwaqasiu/translating-text-in-laravel-made-easy-with-translatetexthelper-and-google-translate-library-214c7c76d655#id_token=eyJhbGciOiJSUzI1NiIsImtpZCI6IjZjZTExYWVjZjllYjE0MDI0YTQ0YmJmZDFiY2Y4YjMyYTEyMjg3ZmEiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL2FjY291bnRzLmdvb2dsZS5jb20iLCJhenAiOiIyMTYyOTYwMzU4MzQtazFrNnFlMDYwczJ0cDJhMmphbTRsamRjbXMwMHN0dGcuYXBwcy5nb29nbGV1c2VyY29udGVudC5jb20iLCJhdWQiOiIyMTYyOTYwMzU4MzQtazFrNnFlMDYwczJ0cDJhMmphbTRsamRjbXMwMHN0dGcuYXBwcy5nb29nbGV1c2VyY29udGVudC5jb20iLCJzdWIiOiIxMTU5MDIwMjQzMjQ3MDkwMzIyMDkiLCJlbWFpbCI6Im1hcmNvLnNvdHRhbmFAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsIm5iZiI6MTcxMzg2NzM3NCwibmFtZSI6Ik1hcmNvIFNvdHRhbmEiLCJwaWN0dXJlIjoiaHR0cHM6Ly9saDMuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2EvQUNnOG9jSUYxbWNZSmp0S0lfazl5TUlfMFlTVlprMmxlWTdJMlBwV3ljNk1MR0I5N2h2MHA1dzI9czk2LWMiLCJnaXZlbl9uYW1lIjoiTWFyY28iLCJmYW1pbHlfbmFtZSI6IlNvdHRhbmEiLCJpYXQiOjE3MTM4Njc2NzQsImV4cCI6MTcxMzg3MTI3NCwianRpIjoiN2UyMDUwMzRkOGI4M2EyY2UwNTIxMDk4NzNlNGExZGVkY2UzM2ZjNiJ9.BtohJ20fBpglGUpSbml1uMai4RoNtyHeHTDR60vqOzDFpS7uIy_rTNpMo-ksdHvSo60a7MCXuaTRKNA1JLtSLSxvtXBetozC6puVbczuvYqzkWkgkGpdLaQjEz08cFEb0KeZxcv_e9W--HjmTgFZROUA-OSV22rhp5t0w-QaByEcpAXhP-u2wiYVCvCb5-2rXaW8z30c3t9dXmJD51opX6TGTVEfdkkM42Ye5JbYNA3Op1dGZDfEVRHqT_97_0DDqRz480eP8EqfB1k42mzjTHQnC0N0szFfeW7W4IToaHlim8gB_3TfarBWe6LSyBsjUJZ4VD_T4JM8J8L55jZK-A

//----------------

## Extra risorse da _docs

(Nessun nuovo link da aggiungere: i link di _docs/links01.txt sono già presenti in questo file)
=======
# Gestione delle Traduzioni in Laravel

## Pacchetti Raccomandati

### Gestione Base delle Traduzioni
- [spatie/laravel-translation-loader](https://github.com/spatie/laravel-translation-loader)
  > Pacchetto avanzato per la gestione delle traduzioni che permette di memorizzare le stringhe nel database. Ottimo per progetti che richiedono gestione dinamica delle traduzioni.

- [barryvdh/laravel-translation-manager](https://github.com/barryvdh/laravel-translation-manager)
  > Interfaccia web per gestire le traduzioni. Ideale per team che necessitano di un'interfaccia user-friendly per gestire le stringhe di traduzione.

### Traduzioni Automatiche
- [tanmuhittin/laravel-google-translate](https://github.com/tanmuhittin/laravel-google-translate)
  > Integrazione con Google Translate per traduzioni automatiche. Utile per progetti che necessitano di traduzioni rapide e automatizzate.

### Gestione Modelli Multilingua
- [Astrotomic/laravel-translatable](https://github.com/Astrotomic/laravel-translatable)
  > Soluzione moderna per gestire modelli multilingua. Offre un'API pulita e funzionalità avanzate per la gestione dei contenuti tradotti.

### Gestione UI Multilingua
- [statikbe/laravel-filament-chained-translation-manager](https://github.com/statikbe/laravel-filament-chained-translation-manager)
  > Manager delle traduzioni integrato con Filament. Perfetto per progetti che utilizzano Filament come pannello amministrativo.

## Risorse di Apprendimento

### Tutorial e Guide
- [Laravel Localization Course](https://github.com/LaravelDaily/laravel11-localization-course)
  > Corso completo sulla localizzazione in Laravel 11, con esempi pratici e best practices.

### Pacchetti per Route Multilingua
- [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization)
  > Gestione avanzata delle route multilingua. Essenziale per progetti che necessitano di URL localizzati.

## Implementazioni di Esempio

### Formattazione Valuta
```php
if(! function_exists('formatCurrency')) {
    function formatCurrency($amount, $locale = 'en_US', $currency = 'USD')
    {
        $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($amount, $currency);
    }
}
```

### Middleware per Impostazione Locale
```php
use Auth;
use Carbon\Carbon;

public function handle(Request $request, Closure $next): Response
{
    if (Auth::check()) {
        app()->setLocale(Auth::user()->language);
        Carbon\Carbon::setLocale(Auth::user()->language);
    } else {
        app()->setLocale(session('locale', 'en'));
        Carbon\Carbon::setLocale(session('locale', 'en'));
    }

    return $next($request);
}
```

### Navigazione Multilingua con Blade
```php
@foreach(config('app.available_locales') as $locale)
    <x-nav-link
        :href="route('change-locale', $locale)"
        :active="app()->getLocale() == $locale">
        {{ strtoupper($locale) }}
    </x-nav-link>
@endforeach
```

## Collegamenti ai Moduli Correlati

### Moduli Core
- [Modulo GDPR](../../../Gdpr/docs/links.md)
  > Documentazione sulla gestione delle traduzioni per il modulo GDPR.

- [Modulo User](../../../User/docs/links.md)
  > Gestione delle traduzioni per l'interfaccia utente e le notifiche.

### Moduli di Supporto
- [Modulo Notify](../../../Notify/docs/links.md)
  > Sistema di notifiche multilingua.

- [Modulo CMS](../../../Cms/docs/links.md)
  > Gestione dei contenuti multilingua.

### Moduli Tematici
- [Theme One](../../../../Themes/One/docs/links.md)
  > Gestione delle traduzioni specifiche per il tema One.

## Best Practices

### 1. Organizzazione
- Utilizzare file di lingua separati per modulo
- Mantenere una struttura gerarchica chiara
- Documentare le chiavi di traduzione

### 2. Performance
- Implementare il caching delle traduzioni
- Utilizzare lazy loading quando possibile
- Ottimizzare le query al database

### 3. Manutenzione
- Mantenere un registro delle modifiche
- Implementare un sistema di backup
- Aggiornare regolarmente le traduzioni

### 4. Sicurezza
- Validare gli input di traduzione
- Implementare controlli di accesso
- Proteggere i file di traduzione

## Comandi Utili

```bash

# Lista delle route tradotte
php artisan route:trans:list {locale}

# Altri comandi utili per la gestione delle traduzioni
php artisan translations:import    # Importa traduzioni
php artisan translations:export    # Esporta traduzioni
php artisan translations:clean     # Pulisce le traduzioni non utilizzate
```

- [Gestione console commands: filosofia e tecnica](./lang-service-provider.md)
- [Filosofia Xot: zen e automazione](./PHILOSOPHY.md)

>>>>>>> e8163a6 (.)


=======
>>>>>>> e07991e (.)
