<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
# Traduzioni Automatiche con LangServiceProvider

## Regola Fondamentale
In il progetto, **NON utilizzare mai** il metodo `->label()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider` attraverso i file di traduzione.
<<<<<<< HEAD
<<<<<<< HEAD
## Come Funziona
### 1. Registrazione Automatica
Il `LangServiceProvider` registra automaticamente tutti i componenti Filament (Field, Column, Filter, Step, ecc.) e applica le traduzioni basate su chiavi generate automaticamente.
=======
=======
>>>>>>> 1bb26ee (.)

## Come Funziona

### 1. Registrazione Automatica
Il `LangServiceProvider` registra automaticamente tutti i componenti Filament (Field, Column, Filter, Step, ecc.) e applica le traduzioni basate su chiavi generate automaticamente.

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
```php
// Questo viene fatto automaticamente dal LangServiceProvider
Field::configureUsing(function (Field $component) {
    $component = app(AutoLabelAction::class)->execute($component);
    // ...
});
```
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
### 2. Generazione delle Chiavi di Traduzione
Le chiavi di traduzione vengono generate automaticamente basandosi su:
- Il modulo corrente
- Il nome della risorsa
- Il nome del campo
<<<<<<< HEAD
<<<<<<< HEAD
Il formato della chiave è:
{modulo}::{risorsa}.fields.{nome_campo}.label
Ad esempio, per un campo `first_name` in `DoctorResource` nel modulo `Patient`:
patient::doctor.fields.first_name.label
### 3. File di Traduzione
Le traduzioni vengono salvate in file PHP nella directory `lang/{locale}/` di ciascun modulo:
=======
=======
>>>>>>> 1bb26ee (.)

Il formato della chiave è:
```
{modulo}::{risorsa}.fields.{nome_campo}.label
```

Ad esempio, per un campo `first_name` in `DoctorResource` nel modulo `Patient`:
```
patient::doctor.fields.first_name.label
```

### 3. File di Traduzione
Le traduzioni vengono salvate in file PHP nella directory `lang/{locale}/` di ciascun modulo:

```php
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
// /Modules/Patient/lang/it/doctor.php
return [
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
        ],
        'last_name' => [
            'label' => 'Cognome',
<<<<<<< HEAD
<<<<<<< HEAD
    ],
];
### 4. Creazione Automatica
Se una chiave di traduzione non esiste, il sistema la crea automaticamente con un valore predefinito basato sul nome del campo.
## Perché Non Usare `->label()`
1. **Duplicazione del Codice**: L'uso di `->label()` crea una duplicazione, poiché il sistema applica comunque le traduzioni automaticamente.
2. **Inconsistenza**: Se si usa `->label()` in alcuni punti e non in altri, si creano inconsistenze nell'interfaccia.
3. **Difficoltà di Manutenzione**: Centralizzare le traduzioni nei file di lingua facilita la manutenzione e la localizzazione.
4. **Sovrascrittura delle Traduzioni**: `->label()` sovrascrive le traduzioni automatiche, rendendo inefficace il sistema centralizzato.
5. **Gestione Multilingua**: I file di traduzione facilitano la gestione di più lingue senza modificare il codice.
## Esempi
### ❌ Approccio Errato
Forms\Components\TextInput::make('first_name')
    ->label('Nome')
    ->required();
### ✅ Approccio Corretto
E nel file di traduzione:
## Casi Speciali
### Componenti con Nomi Complessi
Per componenti con nomi complessi o generati dinamicamente, è possibile utilizzare il metodo `translateLabel()`:
Forms\Components\TextInput::make('custom_field_'.$index)
    ->translateLabel(); // Forza la traduzione anche per nomi dinamici
### Traduzioni per Wizard Steps
Per gli step dei wizard, la chiave di traduzione segue un formato leggermente diverso:
{modulo}::{risorsa}.steps.{nome_step}.label
## Collegamenti Bidirezionali
- [LangServiceProvider](/var/www/html/base_<nome progetto>/laravel/Modules/Lang/app/Providers/LangServiceProvider.php)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1bb26ee (.)
        ],
    ],
];
```

### 4. Creazione Automatica
Se una chiave di traduzione non esiste, il sistema la crea automaticamente con un valore predefinito basato sul nome del campo.

## Perché Non Usare `->label()`

1. **Duplicazione del Codice**: L'uso di `->label()` crea una duplicazione, poiché il sistema applica comunque le traduzioni automaticamente.

2. **Inconsistenza**: Se si usa `->label()` in alcuni punti e non in altri, si creano inconsistenze nell'interfaccia.

3. **Difficoltà di Manutenzione**: Centralizzare le traduzioni nei file di lingua facilita la manutenzione e la localizzazione.

4. **Sovrascrittura delle Traduzioni**: `->label()` sovrascrive le traduzioni automatiche, rendendo inefficace il sistema centralizzato.

5. **Gestione Multilingua**: I file di traduzione facilitano la gestione di più lingue senza modificare il codice.

## Esempi

### ❌ Approccio Errato
```php
Forms\Components\TextInput::make('first_name')
    ->label('Nome')
    ->required();
```

### ✅ Approccio Corretto
```php
Forms\Components\TextInput::make('first_name')
    ->required();
```

E nel file di traduzione:
```php
// /Modules/Patient/lang/it/doctor.php
return [
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
        ],
    ],
];
```

## Casi Speciali

### Componenti con Nomi Complessi
Per componenti con nomi complessi o generati dinamicamente, è possibile utilizzare il metodo `translateLabel()`:

```php
Forms\Components\TextInput::make('custom_field_'.$index)
    ->translateLabel(); // Forza la traduzione anche per nomi dinamici
```

### Traduzioni per Wizard Steps
Per gli step dei wizard, la chiave di traduzione segue un formato leggermente diverso:

```
{modulo}::{risorsa}.steps.{nome_step}.label
```

## Collegamenti Bidirezionali
- [LangServiceProvider](/var/www/html/base_<nome progetto>/laravel/Modules/Lang/app/Providers/LangServiceProvider.php)
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
- [Convenzioni di Traduzione](/var/www/html/base_<nome progetto>/laravel/Modules/Lang/docs/translation-conventions.md)
- [Best Practices Filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/filament-best-practices.md)

## Collegamenti tra versioni di automatic-translations.md
* [automatic-translations.md](../../UI/docs/filament/automatic-translations.md)
<<<<<<< HEAD
=======
=======
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- [Convenzioni di Traduzione](/var/www/html/base_<nome progetto>/laravel/Modules/Lang/project_docs/translation-conventions.md)
- [Best Practices Filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament-best-practices.md)
## Collegamenti tra versioni di automatic-translations.md
* [automatic-translations.md](../../UI/project_docs/filament/automatic-translations.md)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
=======
>>>>>>> 9059f82 (.)
- [Convenzioni di Traduzione](/var/www/html/base_<nome progetto>/laravel/Modules/Lang/docs/translation-conventions.md)
- [Best Practices Filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/filament-best-practices.md)
* [automatic-translations.md](../../UI/docs/filament/automatic-translations.md)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

=======
>>>>>>> 9059f82 (.)
=======
>>>>>>> 121b362 (.)
=======

>>>>>>> d5fc9cd (.)
=======
- [Convenzioni di Traduzione](/var/www/html/base_<nome progetto>/laravel/Modules/Lang/project_docs/translation-conventions.md)
- [Best Practices Filament](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/filament-best-practices.md)

## Collegamenti tra versioni di automatic-translations.md
* [automatic-translations.md](../../UI/project_docs/filament/automatic-translations.md)

>>>>>>> 1bb26ee (.)
