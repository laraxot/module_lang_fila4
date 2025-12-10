<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Traduzione di Testi Statici in Laravel

## Introduzione
La traduzione di testi statici in Laravel può essere gestita utilizzando due approcci principali: file PHP e file JSON. Questa documentazione, basata sul corso di Laravel Daily, analizza entrambi i metodi, evidenziando vantaggi e svantaggi, e propone un'implementazione per il progetto `<nome progetto>`.
La traduzione di testi statici in Laravel può essere gestita utilizzando due approcci principali: file PHP e file JSON. Questa documentazione, basata sul corso di Laravel Daily, analizza entrambi i metodi, evidenziando vantaggi e svantaggi, e propone un'implementazione per il progetto `saluteora`.
## Opzioni di Archiviazione delle Traduzioni
### File PHP
I file PHP sono stati il metodo predefinito per lungo tempo. Le traduzioni sono organizzate in file separati per lingua e funzionalità.
**Esempio**:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
In un file Blade come `/var/www/html/<nome progetto>/laravel/resources/views/auth/register.blade.php`, potremmo avere:
=======
In un file Blade come `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
In un file Blade come `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/register.blade.php`, potremmo avere:
In un file Blade come `/var/www/html/saluteora/laravel/resources/views/auth/register.blade.php`, potremmo avere:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======
# Traduzione di Testi Statici in Laravel

## Introduzione

La traduzione di testi statici in Laravel può essere gestita utilizzando due approcci principali: file PHP e file JSON. Questa documentazione, basata sul corso di Laravel Daily, analizza entrambi i metodi, evidenziando vantaggi e svantaggi, e propone un'implementazione per il progetto `saluteora`.
=======
# Traduzione di Testi Statici in Laravel

## Introduzione

La traduzione di testi statici in Laravel può essere gestita utilizzando due approcci principali: file PHP e file JSON. Questa documentazione, basata sul corso di Laravel Daily, analizza entrambi i metodi, evidenziando vantaggi e svantaggi, e propone un'implementazione per il progetto `<nome progetto>`.
>>>>>>> 1bb26ee (.)

## Opzioni di Archiviazione delle Traduzioni

### File PHP

I file PHP sono stati il metodo predefinito per lungo tempo. Le traduzioni sono organizzate in file separati per lingua e funzionalità.

**Esempio**:
<<<<<<< HEAD
In un file Blade come `/var/www/html/saluteora/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> d5fc9cd (.)
=======
In un file Blade come `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> 1bb26ee (.)
```php
<!-- Nome -->
<div>
    <x-input-label for="name" :value="__('auth.register.name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
La traduzione corrispondente sarebbe in `/var/www/html/<nome progetto>/laravel/lang/it/auth.php`:
=======
La traduzione corrispondente sarebbe in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php`:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
La traduzione corrispondente sarebbe in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php`:
La traduzione corrispondente sarebbe in `/var/www/html/saluteora/laravel/lang/it/auth.php`:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
```php
=======
>>>>>>> 9059f82 (.)
=======

La traduzione corrispondente sarebbe in `/var/www/html/saluteora/laravel/lang/it/auth.php`:
```php
>>>>>>> d5fc9cd (.)
=======

La traduzione corrispondente sarebbe in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php`:
```php
>>>>>>> 1bb26ee (.)
return [
    'register' => [
        'name' => 'Nome',
        'email' => 'Email',
        // ...
    ],
    // ...
];
<<<<<<< HEAD
<<<<<<< HEAD
=======
```

>>>>>>> d5fc9cd (.)
=======
```

>>>>>>> 1bb26ee (.)
**Nota sulla Cartella `lang`**:
In Laravel 10 e versioni successive, la cartella `lang` non è inclusa di default. Per aggiungerla, eseguire:
```bash
php artisan lang:publish
<<<<<<< HEAD
<<<<<<< HEAD
=======
```

>>>>>>> d5fc9cd (.)
=======
```

>>>>>>> 1bb26ee (.)
**Vantaggi dei File PHP**:
- Chiavi nidificate a più livelli.
- Separazione delle traduzioni per funzionalità (es. `auth.php`, `validation.php`).
- Possibilità di avere chiavi identiche in file diversi con traduzioni diverse.
- Supporto per commenti nel codice.
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
**Svantaggi dei File PHP**:
- Necessità di definire tutte le stringhe immediatamente per evitare di mostrare chiavi non tradotte agli utenti.
- Difficoltà per traduttori non tecnici a causa della struttura dei file.
- Rischio di creare confusione con molti file e cartelle.
<<<<<<< HEAD
<<<<<<< HEAD
### File JSON
I file JSON contengono un elenco unico di traduzioni per ogni lingua, con chiavi leggibili dall'uomo.
<<<<<<< HEAD

**Esempio**:
<<<<<<< HEAD
<<<<<<< HEAD
In un file Blade come `/var/www/html/<nome progetto>/laravel/resources/views/auth/register.blade.php`, potremmo avere:
=======
In un file Blade come `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> 9ce799e (Check & fix styling)
=======
In un file Blade come `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/register.blade.php`, potremmo avere:
=======
In un file Blade come `/var/www/html/saluteora/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
=======
>>>>>>> 1bb26ee (.)

### File JSON

I file JSON contengono un elenco unico di traduzioni per ogni lingua, con chiavi leggibili dall'uomo.

**Esempio**:
<<<<<<< HEAD
In un file Blade come `/var/www/html/saluteora/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> d5fc9cd (.)
=======
In un file Blade come `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/register.blade.php`, potremmo avere:
>>>>>>> 1bb26ee (.)
```php
<!-- Nome -->
<div>
    <x-input-label for="name" :value="__('Nome')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
```

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
La traduzione corrispondente sarebbe in `/var/www/html/<nome progetto>/laravel/lang/it.json`:
=======
La traduzione corrispondente sarebbe in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
    <x-input-label for="name" :value="__('Nome')" />
>>>>>>> 9059f82 (.)
La traduzione corrispondente sarebbe in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`:
La traduzione corrispondente sarebbe in `/var/www/html/saluteora/laravel/lang/it.json`:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======
La traduzione corrispondente sarebbe in `/var/www/html/saluteora/laravel/lang/it.json`:
>>>>>>> d5fc9cd (.)
=======
La traduzione corrispondente sarebbe in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`:
>>>>>>> 1bb26ee (.)
```json
{
    "Nome": "Il Tuo Nome"
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
```

>>>>>>> d5fc9cd (.)
=======
```

>>>>>>> 1bb26ee (.)
**Vantaggi dei File JSON**:
- Possibilità di scrivere frasi complete come chiavi, che vengono mostrate se non tradotte.
- Facilità di consegna a traduttori non tecnici.
- Coerenza delle traduzioni per chiavi identiche in diverse viste.
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
**Svantaggi dei File JSON**:
- Impossibilità di avere chiavi nidificate, tutto è in un unico file.
- Mancanza di contesto per traduzioni ambigue.
- File di traduzione molto grandi in progetti complessi.
- Impossibilità di aggiungere commenti nei file JSON.
<<<<<<< HEAD
<<<<<<< HEAD
## Problemi nel Mescolare File PHP e JSON
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
Mescolare i due approcci può causare problemi se una chiave JSON corrisponde al nome di un file PHP. Ad esempio, se esiste un file `/var/www/html/<nome progetto>/laravel/lang/it/auth.php` e una chiave `"Auth": "Autenticazione"` in `/var/www/html/<nome progetto>/laravel/lang/it.json`, chiamare `__('Auth')` restituirà il contenuto di `auth.php` invece della traduzione attesa.
=======
Mescolare i due approcci può causare problemi se una chiave JSON corrisponde al nome di un file PHP. Ad esempio, se esiste un file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php` e una chiave `"Auth": "Autenticazione"` in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`, chiamare `__('Auth')` restituirà il contenuto di `auth.php` invece della traduzione attesa.
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
Mescolare i due approcci può causare problemi se una chiave JSON corrisponde al nome di un file PHP. Ad esempio, se esiste un file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php` e una chiave `"Auth": "Autenticazione"` in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`, chiamare `__('Auth')` restituirà il contenuto di `auth.php` invece della traduzione attesa.
Mescolare i due approcci può causare problemi se una chiave JSON corrisponde al nome di un file PHP. Ad esempio, se esiste un file `/var/www/html/saluteora/laravel/lang/it/auth.php` e una chiave `"Auth": "Autenticazione"` in `/var/www/html/saluteora/laravel/lang/it.json`, chiamare `__('Auth')` restituirà il contenuto di `auth.php` invece della traduzione attesa.
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

=======
>>>>>>> 9059f82 (.)
## `trans()` vs `__()`: Quale Usare?
- `__()` è una funzione helper che chiama internamente `trans()`.
- `__()` restituisce `null` se non viene passato alcun valore, mentre `trans()` restituisce l'istanza del traduttore, permettendo di concatenare metodi come `trans()->getLocale()`.
- **Raccomandazione**: Usare `__()` per stringhe di traduzione e `trans()` per operazioni più complesse come ottenere la lingua corrente.
## Analisi e Ragionamento per il Progetto `<nome progetto>`
Considerando la struttura del progetto `<nome progetto>` e le regole di localizzazione esistenti, propongo di adottare principalmente l'approccio con file PHP per le seguenti ragioni:
1. **Organizzazione**: I file PHP permettono di separare le traduzioni per modulo (es. `auth.php`, `patient.php`), coerente con la struttura modulare del progetto.
2. **Contesto**: Le chiavi nidificate offrono maggiore chiarezza e contesto, utili in un'applicazione complessa come `<nome progetto>`.
## Analisi e Ragionamento per il Progetto `saluteora`
Considerando la struttura del progetto `saluteora` e le regole di localizzazione esistenti, propongo di adottare principalmente l'approccio con file PHP per le seguenti ragioni:
2. **Contesto**: Le chiavi nidificate offrono maggiore chiarezza e contesto, utili in un'applicazione complessa come `saluteora`.
3. **Commenti**: La possibilità di commentare i file PHP è vantaggiosa per documentare traduzioni complesse o ambigue.
Tuttavia, per testi più lunghi o frasi complete che non richiedono contesto specifico, potremmo utilizzare file JSON per semplificare il lavoro dei traduttori non tecnici.
## Modifiche Proposte
Di seguito elenco i file che modificherei e le modifiche specifiche che apporterei per implementare il sistema di traduzione nel progetto `<nome progetto>`:
Di seguito elenco i file che modificherei e le modifiche specifiche che apporterei per implementare il sistema di traduzione nel progetto `saluteora`:
=======

## Problemi nel Mescolare File PHP e JSON

Mescolare i due approcci può causare problemi se una chiave JSON corrisponde al nome di un file PHP. Ad esempio, se esiste un file `/var/www/html/saluteora/laravel/lang/it/auth.php` e una chiave `"Auth": "Autenticazione"` in `/var/www/html/saluteora/laravel/lang/it.json`, chiamare `__('Auth')` restituirà il contenuto di `auth.php` invece della traduzione attesa.

## `trans()` vs `__()`: Quale Usare?

- `__()` è una funzione helper che chiama internamente `trans()`.
- `__()` restituisce `null` se non viene passato alcun valore, mentre `trans()` restituisce l'istanza del traduttore, permettendo di concatenare metodi come `trans()->getLocale()`.
- **Raccomandazione**: Usare `__()` per stringhe di traduzione e `trans()` per operazioni più complesse come ottenere la lingua corrente.

## Analisi e Ragionamento per il Progetto `saluteora`

Considerando la struttura del progetto `saluteora` e le regole di localizzazione esistenti, propongo di adottare principalmente l'approccio con file PHP per le seguenti ragioni:
1. **Organizzazione**: I file PHP permettono di separare le traduzioni per modulo (es. `auth.php`, `patient.php`), coerente con la struttura modulare del progetto.
2. **Contesto**: Le chiavi nidificate offrono maggiore chiarezza e contesto, utili in un'applicazione complessa come `saluteora`.
3. **Commenti**: La possibilità di commentare i file PHP è vantaggiosa per documentare traduzioni complesse o ambigue.

Tuttavia, per testi più lunghi o frasi complete che non richiedono contesto specifico, potremmo utilizzare file JSON per semplificare il lavoro dei traduttori non tecnici.

## Modifiche Proposte

Di seguito elenco i file che modificherei e le modifiche specifiche che apporterei per implementare il sistema di traduzione nel progetto `saluteora`:

>>>>>>> d5fc9cd (.)
=======

## Problemi nel Mescolare File PHP e JSON

Mescolare i due approcci può causare problemi se una chiave JSON corrisponde al nome di un file PHP. Ad esempio, se esiste un file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php` e una chiave `"Auth": "Autenticazione"` in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`, chiamare `__('Auth')` restituirà il contenuto di `auth.php` invece della traduzione attesa.

## `trans()` vs `__()`: Quale Usare?

- `__()` è una funzione helper che chiama internamente `trans()`.
- `__()` restituisce `null` se non viene passato alcun valore, mentre `trans()` restituisce l'istanza del traduttore, permettendo di concatenare metodi come `trans()->getLocale()`.
- **Raccomandazione**: Usare `__()` per stringhe di traduzione e `trans()` per operazioni più complesse come ottenere la lingua corrente.

## Analisi e Ragionamento per il Progetto `<nome progetto>`

Considerando la struttura del progetto `<nome progetto>` e le regole di localizzazione esistenti, propongo di adottare principalmente l'approccio con file PHP per le seguenti ragioni:
1. **Organizzazione**: I file PHP permettono di separare le traduzioni per modulo (es. `auth.php`, `patient.php`), coerente con la struttura modulare del progetto.
2. **Contesto**: Le chiavi nidificate offrono maggiore chiarezza e contesto, utili in un'applicazione complessa come `<nome progetto>`.
3. **Commenti**: La possibilità di commentare i file PHP è vantaggiosa per documentare traduzioni complesse o ambigue.

Tuttavia, per testi più lunghi o frasi complete che non richiedono contesto specifico, potremmo utilizzare file JSON per semplificare il lavoro dei traduttori non tecnici.

## Modifiche Proposte

Di seguito elenco i file che modificherei e le modifiche specifiche che apporterei per implementare il sistema di traduzione nel progetto `<nome progetto>`:

>>>>>>> 1bb26ee (.)
1. **Creazione della Cartella `lang` (se non presente)**:
   - Eseguire il comando:
     ```bash
     php artisan lang:publish
     ```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Questo creerà la cartella `/var/www/html/<nome progetto>/laravel/lang/` con le sottocartelle per le lingue supportate (es. `en`, `it`).

2. **Struttura dei File di Traduzione PHP**:
   - Creare file di traduzione per ogni modulo in `/var/www/html/<nome progetto>/laravel/lang/it/` e `/var/www/html/<nome progetto>/laravel/lang/en/`.
   - Esempio per il modulo di autenticazione in `/var/www/html/<nome progetto>/laravel/lang/it/auth.php`:
=======
=======
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
   - Questo creerà la cartella `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/` con le sottocartelle per le lingue supportate (es. `en`, `it`).
2. **Struttura dei File di Traduzione PHP**:
   - Creare file di traduzione per ogni modulo in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/` e `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en/`.
   - Esempio per il modulo di autenticazione in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php`:
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
=======
>>>>>>> 9059f82 (.)
   - Questo creerà la cartella `/var/www/html/saluteora/laravel/lang/` con le sottocartelle per le lingue supportate (es. `en`, `it`).
   - Creare file di traduzione per ogni modulo in `/var/www/html/saluteora/laravel/lang/it/` e `/var/www/html/saluteora/laravel/lang/en/`.
   - Esempio per il modulo di autenticazione in `/var/www/html/saluteora/laravel/lang/it/auth.php`:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======
   - Questo creerà la cartella `/var/www/html/saluteora/laravel/lang/` con le sottocartelle per le lingue supportate (es. `en`, `it`).

2. **Struttura dei File di Traduzione PHP**:
   - Creare file di traduzione per ogni modulo in `/var/www/html/saluteora/laravel/lang/it/` e `/var/www/html/saluteora/laravel/lang/en/`.
   - Esempio per il modulo di autenticazione in `/var/www/html/saluteora/laravel/lang/it/auth.php`:
>>>>>>> d5fc9cd (.)
=======
   - Questo creerà la cartella `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/` con le sottocartelle per le lingue supportate (es. `en`, `it`).

2. **Struttura dei File di Traduzione PHP**:
   - Creare file di traduzione per ogni modulo in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/` e `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en/`.
   - Esempio per il modulo di autenticazione in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it/auth.php`:
>>>>>>> 1bb26ee (.)
     ```php
     return [
         'register' => [
             'name' => 'Nome',
             'email' => 'Email',
             'password' => 'Password',
             'confirm_password' => 'Conferma Password',
             'already_registered' => 'Già registrato?',
             'register' => 'Registrati',
         ],
         'login' => [
<<<<<<< HEAD
<<<<<<< HEAD
             'remember_me' => 'Ricordami',
             'forgot_password' => 'Password dimenticata?',
             'login' => 'Accedi',
=======
=======
>>>>>>> 1bb26ee (.)
             'email' => 'Email',
             'password' => 'Password',
             'remember_me' => 'Ricordami',
             'forgot_password' => 'Password dimenticata?',
             'login' => 'Accedi',
         ],
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
         // Commento: Traduzioni per messaggi di errore
         'failed' => 'Queste credenziali non corrispondono ai nostri record.',
         'password_incorrect' => 'La password fornita non è corretta.',
         'throttle' => 'Troppi tentativi di accesso. Riprova tra :seconds secondi.',
     ];
<<<<<<< HEAD
<<<<<<< HEAD
   - Creare file simili per altri moduli come `patient.php`, `dental.php`, ecc.
3. **File JSON per Testi Lunghi**:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Creare file JSON per testi lunghi o frasi complete in `/var/www/html/<nome progetto>/laravel/lang/it.json` e `/var/www/html/<nome progetto>/laravel/lang/en.json`.
   - Esempio per `/var/www/html/<nome progetto>/laravel/lang/it.json`:
=======
   - Creare file JSON per testi lunghi o frasi complete in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json` e `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en.json`.
   - Esempio per `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
   - Creare file JSON per testi lunghi o frasi complete in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json` e `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en.json`.
   - Esempio per `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`:
   - Creare file JSON per testi lunghi o frasi complete in `/var/www/html/saluteora/laravel/lang/it.json` e `/var/www/html/saluteora/laravel/lang/en.json`.
   - Esempio per `/var/www/html/saluteora/laravel/lang/it.json`:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======
=======
>>>>>>> 1bb26ee (.)
     ```
   - Creare file simili per altri moduli come `patient.php`, `dental.php`, ecc.

3. **File JSON per Testi Lunghi**:
<<<<<<< HEAD
   - Creare file JSON per testi lunghi o frasi complete in `/var/www/html/saluteora/laravel/lang/it.json` e `/var/www/html/saluteora/laravel/lang/en.json`.
   - Esempio per `/var/www/html/saluteora/laravel/lang/it.json`:
>>>>>>> d5fc9cd (.)
=======
   - Creare file JSON per testi lunghi o frasi complete in `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json` e `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en.json`.
   - Esempio per `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/it.json`:
>>>>>>> 1bb26ee (.)
     ```json
     {
         "Benvenuto nel sistema di gestione sanitaria": "Benvenuto nel sistema di gestione sanitaria",
         "Hai dimenticato la password? Nessun problema. Inserisci il tuo indirizzo email e ti invieremo un link per reimpostare la password.": "Hai dimenticato la password? Nessun problema. Inserisci il tuo indirizzo email e ti invieremo un link per reimpostare la password."
     }
<<<<<<< HEAD
<<<<<<< HEAD
4. **Modifica dei File Blade per Utilizzare le Traduzioni**:
   - Modificare i file Blade per utilizzare la funzione `__()` con chiavi appropriate.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Esempio per `/var/www/html/<nome progetto>/laravel/resources/views/auth/login.blade.php`:
=======
   - Esempio per `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/login.blade.php`:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
   - Esempio per `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/login.blade.php`:
   - Esempio per `/var/www/html/saluteora/laravel/resources/views/auth/login.blade.php`:
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

4. **Modifica dei File Blade per Utilizzare le Traduzioni**:
   - Modificare i file Blade per utilizzare la funzione `__()` con chiavi appropriate.
<<<<<<< HEAD
   - Esempio per `/var/www/html/saluteora/laravel/resources/views/auth/login.blade.php`:
     ```php
>>>>>>> d5fc9cd (.)
=======
   - Esempio per `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/auth/login.blade.php`:
     ```php
>>>>>>> 1bb26ee (.)
     <!-- Email -->
     <div>
         <x-input-label for="email" :value="__('auth.login.email')" />
         <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
         <x-input-error :messages="$errors->get('email')" class="mt-2" />
     </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
     <!-- Password -->
     <div class="mt-4">
         <x-input-label for="password" :value="__('auth.login.password')" />
         <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
         <x-input-error :messages="$errors->get('password')" class="mt-2" />
<<<<<<< HEAD
<<<<<<< HEAD
=======
     </div>

>>>>>>> d5fc9cd (.)
=======
     </div>

>>>>>>> 1bb26ee (.)
     <!-- Ricordami -->
     <div class="block mt-4">
         <label for="remember_me" class="flex items-center">
             <x-checkbox id="remember_me" name="remember" />
             <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('auth.login.remember_me') }}</span>
         </label>
<<<<<<< HEAD
<<<<<<< HEAD
=======
     </div>

>>>>>>> d5fc9cd (.)
=======
     </div>

>>>>>>> 1bb26ee (.)
     <div class="flex items-center justify-end mt-4">
         @if (Route::has('password.request'))
             <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-indigo-600" href="{{ route('password.request') }}">
                 {{ __('auth.login.forgot_password') }}
             </a>
         @endif
<<<<<<< HEAD
<<<<<<< HEAD
         <x-primary-button class="ms-4">
             {{ __('auth.login.login') }}
         </x-primary-button>
   - Applicare modifiche simili a tutti i file Blade rilevanti nel progetto.
5. **Integrazione con `mcamara/laravel-localization`**:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Assicurarsi che il pacchetto `mcamara/laravel-localization` sia installato e configurato come descritto nella documentazione `/var/www/html/<nome progetto>/laravel/Modules/Lang/docs/laravel-localization-complete.md`.
   - Modificare il file `/var/www/html/<nome progetto>/laravel/routes/web.php` per aggiungere il prefisso della lingua:
=======
   - Assicurarsi che il pacchetto `mcamara/laravel-localization` sia installato e configurato come descritto nella documentazione `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Lang/project_docs/laravel-localization-complete.md`.
   - Modificare il file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/routes/web.php` per aggiungere il prefisso della lingua:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
   - Assicurarsi che il pacchetto `mcamara/laravel-localization` sia installato e configurato come descritto nella documentazione `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Lang/project_docs/laravel-localization-complete.md`.
   - Modificare il file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/routes/web.php` per aggiungere il prefisso della lingua:
   - Assicurarsi che il pacchetto `mcamara/laravel-localization` sia installato e configurato come descritto nella documentazione `/var/www/html/saluteora/laravel/Modules/Lang/docs/laravel-localization-complete.md`.
   - Modificare il file `/var/www/html/saluteora/laravel/routes/web.php` per aggiungere il prefisso della lingua:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
     ```php
=======
>>>>>>> 9059f82 (.)
=======
=======
>>>>>>> 1bb26ee (.)

         <x-primary-button class="ms-4">
             {{ __('auth.login.login') }}
         </x-primary-button>
     </div>
     ```
   - Applicare modifiche simili a tutti i file Blade rilevanti nel progetto.

5. **Integrazione con `mcamara/laravel-localization`**:
<<<<<<< HEAD
   - Assicurarsi che il pacchetto `mcamara/laravel-localization` sia installato e configurato come descritto nella documentazione `/var/www/html/saluteora/laravel/Modules/Lang/docs/laravel-localization-complete.md`.
   - Modificare il file `/var/www/html/saluteora/laravel/routes/web.php` per aggiungere il prefisso della lingua:
     ```php
>>>>>>> d5fc9cd (.)
=======
   - Assicurarsi che il pacchetto `mcamara/laravel-localization` sia installato e configurato come descritto nella documentazione `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Lang/project_docs/laravel-localization-complete.md`.
   - Modificare il file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/routes/web.php` per aggiungere il prefisso della lingua:
     ```php
>>>>>>> 1bb26ee (.)
     Route::group([
         'prefix' => LaravelLocalization::setLocale(),
         'middleware' => ['localeSessionRedirect', 'localizationRedirect']
     ], function () {
         // Tutte le route web
         Route::get('/', function () {
             return view('welcome');
         });
         // altre route...
     });
<<<<<<< HEAD
<<<<<<< HEAD
6. **Creazione di un Selettore di Lingua**:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Modificare il file `/var/www/html/<nome progetto>/laravel/resources/views/layouts/navigation.blade.php` per aggiungere un selettore di lingua:
=======
   - Modificare il file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/layouts/navigation.blade.php` per aggiungere un selettore di lingua:
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
   - Modificare il file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/layouts/navigation.blade.php` per aggiungere un selettore di lingua:
   - Modificare il file `/var/www/html/saluteora/laravel/resources/views/layouts/navigation.blade.php` per aggiungere un selettore di lingua:
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
     ```php
=======
>>>>>>> 9059f82 (.)
=======
     ```

6. **Creazione di un Selettore di Lingua**:
   - Modificare il file `/var/www/html/saluteora/laravel/resources/views/layouts/navigation.blade.php` per aggiungere un selettore di lingua:
     ```php
>>>>>>> d5fc9cd (.)
=======
     ```

6. **Creazione di un Selettore di Lingua**:
   - Modificare il file `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/resources/views/layouts/navigation.blade.php` per aggiungere un selettore di lingua:
     ```php
>>>>>>> 1bb26ee (.)
     @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
         <x-nav-link rel="alternate" hreflang="{{ $localeCode }}"
                     :active="$localeCode === app()->getLocale()"
                     href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
             {{ ucfirst($properties['native']) }}
         </x-nav-link>
     @endforeach
<<<<<<< HEAD
<<<<<<< HEAD
## Gestione Plurale/Singolare nelle Traduzioni
=======
=======
>>>>>>> 1bb26ee (.)
     ```

## Gestione Plurale/Singolare nelle Traduzioni

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
### Uso di `trans_choice()` e `@choice`
- Per messaggi che variano in base al conteggio, usa `trans_choice()` o la direttiva Blade `@choice()`.
- Sintassi tipica in PHP:
  ```php
  // lang/en/messages.php
  return [
      'newMessageIndicator' => '{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages',
  ];
  ```
- In Blade:
  ```blade
  @choice('messages.newMessageIndicator', $messagesCount)
<<<<<<< HEAD
<<<<<<< HEAD
=======
  ```

>>>>>>> d5fc9cd (.)
=======
  ```

>>>>>>> 1bb26ee (.)
### Sintassi delle Regole Plurali
- `{0}`: caso zero
- `{1}`: caso singolare
- `[2,*]`: da 2 in poi
- Usa `:count` per il numero
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
### Plurale in JSON
- Supportato ma meno leggibile:
  ```json
  {
    "{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages": "{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages"
  }
<<<<<<< HEAD
<<<<<<< HEAD
  {{ trans_choice('{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages', $messagesCount) }}
- **Raccomandazione**: Preferire i file PHP per le stringhe plurali.
=======
=======
>>>>>>> 1bb26ee (.)
  ```
- In Blade:
  ```blade
  {{ trans_choice('{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages', $messagesCount) }}
  ```
- **Raccomandazione**: Preferire i file PHP per le stringhe plurali.

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
### Modifiche Proposte
- Inserire tutte le stringhe plurali in `/lang/{locale}/messages.php`.
- Nei Blade, sostituire blocchi condizionali con `trans_choice()` o `@choice()`.
- Evitare l'uso del JSON per le stringhe plurali.
<<<<<<< HEAD
<<<<<<< HEAD
## Processo Dev → Traduttore: Istruzioni e Modifiche Proposte
=======

## Processo Dev → Traduttore: Istruzioni e Modifiche Proposte

>>>>>>> d5fc9cd (.)
=======

## Processo Dev → Traduttore: Istruzioni e Modifiche Proposte

>>>>>>> 1bb26ee (.)
1. **Preparazione**: Prepara i file PHP/JSON di riferimento in `/lang/en/` e `/lang/en.json`.
2. **Istruzioni per i Traduttori**:
   - Nei file PHP: traduci solo il testo a destra di `=>`, non cambiare chiavi o struttura.
   - Nei file JSON: traduci solo il valore, non la chiave.
   - Non aggiungere, rimuovere o spostare chiavi.
   - Se serve un apostrofo (`'`), anteporre `\`.
3. **Reintegrazione**: Sostituisci i file tradotti nella lingua target e verifica la sintassi.
4. **Modifiche Proposte**:
   - Nei Blade, sostituire tutte le stringhe hardcoded con chiavi strutturate.
   - Nei file PHP, uniformare la struttura e aggiungere commenti per i traduttori.
   - Versionare i file di traduzione separatamente.
<<<<<<< HEAD
<<<<<<< HEAD
## Conclusione
Implementare un sistema di traduzione per testi statici nel progetto `<nome progetto>` migliorerà l'accessibilità e l'esperienza utente per utenti di diverse lingue. L'approccio con file PHP è raccomandato per la maggior parte delle traduzioni a causa della sua flessibilità e organizzazione, mentre i file JSON possono essere utilizzati per testi più lunghi o frasi complete. Le modifiche proposte ai file Blade, ai file di traduzione e alle route garantiranno che il sistema di localizzazione sia robusto e conforme alle regole del progetto, come l'uso del prefisso della lingua negli URL.
Implementare un sistema di traduzione per testi statici nel progetto `saluteora` migliorerà l'accessibilità e l'esperienza utente per utenti di diverse lingue. L'approccio con file PHP è raccomandato per la maggior parte delle traduzioni a causa della sua flessibilità e organizzazione, mentre i file JSON possono essere utilizzati per testi più lunghi o frasi complete. Le modifiche proposte ai file Blade, ai file di traduzione e alle route garantiranno che il sistema di localizzazione sia robusto e conforme alle regole del progetto, come l'uso del prefisso della lingua negli URL.
## Risorse
- Corso Laravel Daily: [Multi-Language Laravel 11: All You Need to Know](https://laraveldaily.com/course/multi-language-laravel)
=======
>>>>>>> 121b362 (.)
=======

## Conclusione

Implementare un sistema di traduzione per testi statici nel progetto `saluteora` migliorerà l'accessibilità e l'esperienza utente per utenti di diverse lingue. L'approccio con file PHP è raccomandato per la maggior parte delle traduzioni a causa della sua flessibilità e organizzazione, mentre i file JSON possono essere utilizzati per testi più lunghi o frasi complete. Le modifiche proposte ai file Blade, ai file di traduzione e alle route garantiranno che il sistema di localizzazione sia robusto e conforme alle regole del progetto, come l'uso del prefisso della lingua negli URL.
=======

## Conclusione

Implementare un sistema di traduzione per testi statici nel progetto `<nome progetto>` migliorerà l'accessibilità e l'esperienza utente per utenti di diverse lingue. L'approccio con file PHP è raccomandato per la maggior parte delle traduzioni a causa della sua flessibilità e organizzazione, mentre i file JSON possono essere utilizzati per testi più lunghi o frasi complete. Le modifiche proposte ai file Blade, ai file di traduzione e alle route garantiranno che il sistema di localizzazione sia robusto e conforme alle regole del progetto, come l'uso del prefisso della lingua negli URL.
>>>>>>> 1bb26ee (.)

## Risorse

- Corso Laravel Daily: [Multi-Language Laravel 11: All You Need to Know](https://laraveldaily.com/course/multi-language-laravel)
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
