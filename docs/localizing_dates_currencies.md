# Localizzazione di Date e Valute

## Introduzione


## Localizzazione di Date con Carbon

Carbon, la libreria di gestione delle date integrata in Laravel, rende semplice la localizzazione delle date. È sufficiente impostare il locale di Carbon in base alla lingua corrente dell'applicazione.

**Configurazione in `AppServiceProvider`**:
```php
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // ...
        Carbon::setLocale(app()->getLocale());
        // ...
    }
}
```

Con questa configurazione, Carbon utilizzerà automaticamente il locale corrente per formattare le date.

**Esempio in una Vista Blade**:
```blade
{{ now()->isoFormat('dddd, D MMMM YYYY') }}
```

**Risultati in Diverse Lingue**:
- Inglese: `Monday, 3 April 2023`
- Italiano: `lunedì, 3 aprile 2023`
- Spagnolo: `lunes, 3 abril 2023`
- Tedesco: `Montag, 3 April 2023`

**Vantaggi**: Non è necessario tradurre manualmente i nomi dei mesi o dei giorni; Carbon gestisce tutto automaticamente in base al locale impostato.

## Localizzazione delle Differenze Temporali

Carbon permette anche di localizzare le differenze tra date in un formato leggibile per l'utente, utilizzando il metodo `diffForHumans`.

**Esempio in un Controller**:
```php
$start = now()->subMinutes(56)->subSeconds(33)->subHour();
$end = now();
$difference = $end->longRelativeDiffForHumans($start, 5);
dd($difference);
```

**Risultati in Diverse Lingue**:
- Inglese: `1 hour 56 minutes 33 seconds after`
- Italiano: `1 ora 56 minuti 33 secondi dopo`
- Spagnolo: `1 hora 56 minutos 33 segundos después`
- Tedesco: `1 Stunde 56 Minuten 33 Sekunden später`

**Vantaggi**: Questo approccio è utile per mostrare agli utenti quanto tempo è passato da un evento (es. creazione di un appuntamento) in modo intuitivo e localizzato.

## Localizzazione di Valute

La formattazione delle valute varia tra paesi per posizione del simbolo, separatori decimali e migliaia. PHP offre la classe `NumberFormatter` per gestire queste differenze.

**Nota**: È necessario abilitare l'estensione `intl` di PHP nel file `php.ini` per utilizzare `NumberFormatter`.

**Esempio in un Controller**:
```php
$formatter = new NumberFormatter('it_IT', NumberFormatter::CURRENCY);
dd($formatter->formatCurrency(35578.883, 'EUR'));
```

**Risultati per EUR in Diversi Locali**:
- `it_IT`: `35.578,88 €`
- `en_US`: `€35,578.88`
- `es_ES`: `35.578,88 €`
- `de_DE`: `35.578,88 €`

**Esempio per GBP**:
```php
$formatter = new NumberFormatter('en_GB', NumberFormatter::CURRENCY);
dd($formatter->formatCurrency(35578.883, 'GBP'));
```

**Risultati per GBP in Diversi Locali**:
- `en_GB`: `£35,578.88`
- `it_IT`: `35.578,88 GBP`
- `es_ES`: `35.578,88 GBP`
- `de_DE`: `35.578,88 £`

**Vantaggi**: `NumberFormatter` gestisce automaticamente il posizionamento del simbolo della valuta e i separatori, evitando errori manuali nella formattazione.

## Creazione di una Funzione Helper per le Valute

Per semplificare l'uso di `NumberFormatter` nelle viste o in altre parti del sistema, si può creare una funzione helper.

**Esempio in `app/helpers.php`**:
```php
if (!function_exists('formatCurrency')) {
    function formatCurrency($amount, $locale = 'it_IT', $currency = 'EUR')
    {
        $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($amount, $currency);
    }
}
```

**Uso in una Vista Blade**:
```blade
{{ formatCurrency(35578.883) }}
```

**Risultato**:
- `35.578,88 €` (per locale `it_IT` e valuta `EUR`)

**Vantaggi**: Una funzione helper rende la formattazione delle valute accessibile ovunque nell'applicazione senza dover ripetere il codice di inizializzazione di `NumberFormatter`.

- Configurare Carbon per utilizzare il locale corrente in `AppServiceProvider`, garantendo che date e differenze temporali siano mostrate correttamente in italiano, inglese o altre lingue supportate.
- Implementare una funzione helper per formattare valute, considerando che in un'applicazione sanitaria potrebbero essere visualizzati costi di trattamenti o servizi. Usare `NumberFormatter` assicura che i prezzi siano formattati correttamente in base alla lingua e al paese dell'utente.

Questo approccio è coerente con le regole di localizzazione del progetto, che richiedono l'uso di `app()->getLocale()` per determinare la lingua corrente e garantire che tutti gli elementi siano tradotti correttamente.

## Modifiche Proposte

   - Modifica: Aggiungere la configurazione del locale di Carbon nel metodo `boot()`:
     ```php
     use Carbon\Carbon;

     class AppServiceProvider extends ServiceProvider
     {
         public function boot()
         {
             // ...
             Carbon::setLocale(app()->getLocale());
             // ...
         }
     }
     ```
   - Modifica: Creare o aggiornare il file con la funzione `formatCurrency()`:
     ```php
     if (!function_exists('formatCurrency')) {
         function formatCurrency($amount, $locale = null, $currency = 'EUR')
         {
             $locale = $locale ?? app()->getLocale();
             $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
             return $formatter->formatCurrency($amount, $currency);
         }
     }
     ```
   - Modifica: Usare Carbon e la funzione helper per formattare date e valute:
     ```blade
     <!-- Data dell'appuntamento -->
     <p>Data: {{ $appointment->date->isoFormat('dddd, D MMMM YYYY') }}</p>
     <!-- Tempo trascorso -->
     <p>Creato: {{ $appointment->created_at->longRelativeDiffForHumans(now(), 5) }}</p>
     <!-- Costo del trattamento -->
     <p>Costo: {{ formatCurrency($appointment->cost) }}</p>
     ```
