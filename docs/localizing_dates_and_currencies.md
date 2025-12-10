# Localizzazione di Date e Valute

## Introduzione


## Localizzazione di Date con Carbon

Carbon, la libreria di gestione delle date integrata in Laravel, rende la localizzazione delle date estremamente semplice. È sufficiente impostare il locale di Carbon in base alla lingua corrente dell'applicazione.

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

Con questa configurazione, Carbon formatterà automaticamente le date in base al locale corrente. Ad esempio, in una vista Blade:
```blade
{{ now()->isoFormat('dddd, D MMMM YYYY') }}
```

**Output per diversi locali**:
- Inglese (`en`): Monday, 3 April 2023
- Italiano (`it`): lunedì, 3 aprile 2023
- Spagnolo (`es`): lunes, 3 abril 2023

**Vantaggi**: Non è necessario tradurre manualmente i nomi dei mesi o dei giorni; Carbon si occupa di tutto, adattandosi alla lingua corrente.

## Localizzazione delle Differenze Temporali

Carbon permette anche di localizzare le differenze tra due date in un formato leggibile dall'utente, utile per mostrare quanto tempo fa è stato creato un elemento (es. un post o un appuntamento).

**Esempio in un Controller**:
```php
$start = now()->subMinutes(56)->subSeconds(33)->subHour();
$end = now();
$difference = $end->longRelativeDiffForHumans($start, 5);
```

**Output per diversi locali**:
- Inglese (`en`): 1 hour 56 minutes 33 seconds after
- Italiano (`it`): 1 ora 56 minuti 33 secondi dopo
- Spagnolo (`es`): 1 hora 56 minutos 33 segundos después

**Vantaggi**: Questo approccio rende i messaggi temporali intuitivi e localizzati automaticamente, migliorando l'esperienza utente.

## Localizzazione di Valute con `NumberFormatter`

La formattazione delle valute varia tra paesi per posizionamento del simbolo, separatori decimali e migliaia. PHP offre la classe `NumberFormatter` per gestire queste differenze, richiedendo l'estensione `intl` (da abilitare in `php.ini` se non già attiva).

**Esempio in un Controller**:
```php
$formatter = new NumberFormatter('it_IT', NumberFormatter::CURRENCY);
echo $formatter->formatCurrency(35578.883, 'EUR');
```

**Output per diversi locali con valuta EUR**:
- Italiano (`it_IT`): 35.578,88 €
- Inglese (`en_US`): €35,578.88
- Spagnolo (`es_ES`): 35.578,88 €

**Output per diversi locali con valuta USD**:
- Italiano (`it_IT`): 35.578,88 USD
- Inglese (`en_US`): $35,578.88
- Spagnolo (`es_ES`): 35.578,88 $US

**Vantaggi**: `NumberFormatter` gestisce automaticamente il posizionamento del simbolo di valuta e i separatori, eliminando la necessità di configurazioni manuali per ogni lingua.

## Creazione di una Funzione Helper per le Valute

Per semplificare l'uso di `NumberFormatter` nelle viste o in altre parti del sistema, si può creare una funzione helper.

**Definizione in `app/helpers.php`**:
```php
if (!function_exists('formatCurrency')) {
    function formatCurrency($amount, $locale = 'it_IT', $currency = 'EUR')
    {
        $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($amount, $currency);
    }
}
```

**Uso in una vista Blade**:
```blade
{{ formatCurrency(35578.883) }}
```

**Output** (con locale `it_IT` e valuta `EUR`):
- 35.578,88 €

**Vantaggi**: Un helper centralizzato rende la formattazione delle valute accessibile ovunque, con parametri personalizzabili per locale e valuta.

- Configurare Carbon per utilizzare il locale corrente, garantendo che date e differenze temporali siano mostrate correttamente in italiano (`it`), inglese (`en`), o altre lingue supportate.
- Implementare `NumberFormatter` per formattare valute, specialmente per costi di trattamenti o pagamenti, rispettando le convenzioni locali (es. simbolo € in Europa).
- Creare un helper per le valute, permettendo un uso flessibile in viste e logiche di business.

Questo approccio si integra con il sistema di localizzazione esistente (`mcamara/laravel-localization`), che utilizza il prefisso della lingua negli URL, garantendo che il locale corrente (`app()->getLocale()`) sia sempre disponibile per Carbon e `NumberFormatter`.

## Modifiche Proposte

   - Modifica: Aggiungere o aggiornare il metodo `boot()` per impostare il locale di Carbon:
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
   - Modifica: Creare o aggiornare il file per aggiungere la funzione `formatCurrency()`:
     ```php
     if (!function_exists('formatCurrency')) {
         function formatCurrency($amount, $locale = null, $currency = 'EUR')
         {
             $locale = $locale ?? app()->getLocale() . '_' . strtoupper(app()->getLocale());
             $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
             return $formatter->formatCurrency($amount, $currency);
         }
     }
     ```
   - Modifica: Usare Carbon per formattare date e l'helper per le valute:
     ```blade
     <div>
         <p>Data Appuntamento: {{ $appointment->date->isoFormat('dddd, D MMMM YYYY') }}</p>
         <p>Tempo trascorso dalla prenotazione: {{ $appointment->created_at->longRelativeDiffForHumans(now(), 3) }}</p>
         <p>Costo: {{ formatCurrency($appointment->cost) }}</p>
     </div>
     ```

4. **Verifica dell'Estensione `intl` per `NumberFormatter`**:
   - Nota: Assicurarsi che l'estensione `intl` sia abilitata nel file `php.ini` del server. Se non è abilitata, aggiungere o decommentare la linea:
     ```ini
     extension=intl
     ```
