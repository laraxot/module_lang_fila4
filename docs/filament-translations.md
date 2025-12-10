<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Regole per le Traduzioni in Filament

> **Regola fondamentale:** MAI utilizzare il metodo `->label()` nei componenti Filament, specialmente nei Blocks. Le etichette sono gestite automaticamente dal LangServiceProvider.
# ⚠️ Regola fondamentale: MAI usare chiavi che terminano con `.navigation` nei file di traduzione
=======
=======
>>>>>>> 1bb26ee (.)
# Regole per le Traduzioni in Filament

> **Regola fondamentale:** MAI utilizzare il metodo `->label()` nei componenti Filament, specialmente nei Blocks. Le etichette sono gestite automaticamente dal LangServiceProvider.

# ⚠️ Regola fondamentale: MAI usare chiavi che terminano con `.navigation` nei file di traduzione

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- Usa sempre la struttura array per navigation:
  ```php
  'navigation' => [
      'label' => 'Gestione Pazienti',
      'group' => 'Pazienti',
      'icon' => 'heroicon-o-user-group',
      'color' => 'primary',
  ],
  ```
- **Esempio ERRATO:**
<<<<<<< HEAD
<<<<<<< HEAD
  'group' => 'patient.navigation',
  'label' => 'patient.navigation',
- Consulta anche:
  - [translation_keys_best_practices.md](../translation_keys_best_practices.md)
  - [translation_keys_rules.md](../translation_keys_rules.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  - [docs <nome progetto>](../../<nome progetto>/docs/translations.md)
=======
  - [docs Modulo Generico](../../<nome modulo>/docs/translations.md)
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
  - [docs Modulo Generico](../../<nome modulo>/docs/translations.md)
  - [docs SaluteOra](../../SaluteOra/docs/translations.md)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

=======
>>>>>>> 9059f82 (.)
## Struttura Corretta per le Traduzioni
Le traduzioni in Filament devono seguire questa struttura nei file di traduzione:
=======
=======
>>>>>>> 1bb26ee (.)
  ```php
  'group' => 'patient.navigation',
  'label' => 'patient.navigation',
  ```
- Consulta anche:
  - [translation_keys_best_practices.md](../translation_keys_best_practices.md)
  - [translation_keys_rules.md](../translation_keys_rules.md)
<<<<<<< HEAD
  - [docs SaluteOra](../../SaluteOra/docs/translations.md)
=======
  - [docs Modulo Generico](../../<nome modulo>/docs/translations.md)
>>>>>>> 1bb26ee (.)

## Struttura Corretta per le Traduzioni

Le traduzioni in Filament devono seguire questa struttura nei file di traduzione:

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
```php
// File: /Modules/<NomeModulo>/lang/<lingua>/<risorsa>.php
return [
    'fields' => [
        'nome_campo' => [
            'label' => 'Etichetta Campo',
            'help' => 'Testo di aiuto',
            'placeholder' => 'Placeholder',
        ],
    ],
    'actions' => [
        'nome_azione' => [
            'label' => 'Etichetta Azione',
<<<<<<< HEAD
<<<<<<< HEAD
=======
        ],
    ],
>>>>>>> d5fc9cd (.)
=======
        ],
    ],
>>>>>>> 1bb26ee (.)
    'sections' => [
        'nome_sezione' => [
            'label' => 'Etichetta Sezione',
            'description' => 'Descrizione Sezione',
<<<<<<< HEAD
<<<<<<< HEAD
];
```
## Come Funziona il LangServiceProvider
Il `LangServiceProvider` registra automaticamente un sistema che intercetta la creazione dei componenti Filament e assegna le etichette basandosi sui file di traduzione, senza bisogno di chiamare manualmente `->label()`.
// Esempio di come il LangServiceProvider gestisce le etichette
// Questo avviene automaticamente, NON devi farlo tu
$component = app(AutoLabelAction::class)->execute($component);
## Esempi Corretti e Incorretti
### ❌ ERRATO
=======
=======
>>>>>>> 1bb26ee (.)
        ],
    ],
];
```

## Come Funziona il LangServiceProvider

Il `LangServiceProvider` registra automaticamente un sistema che intercetta la creazione dei componenti Filament e assegna le etichette basandosi sui file di traduzione, senza bisogno di chiamare manualmente `->label()`.

```php
// Esempio di come il LangServiceProvider gestisce le etichette
// Questo avviene automaticamente, NON devi farlo tu
$component = app(AutoLabelAction::class)->execute($component);
```

## Esempi Corretti e Incorretti

### ❌ ERRATO
```php
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
// NON fare questo
TextInput::make('title')
    ->label('Titolo')
    ->required();
<<<<<<< HEAD
<<<<<<< HEAD
### ✅ CORRETTO
// Fai questo
// L'etichetta "Titolo" sarà automaticamente aggiunta dal LangServiceProvider
// prendendo il valore da '<modulo>::<risorsa>.fields.title.label'
## Vantaggi dell'Approccio Corretto
=======
=======
>>>>>>> 1bb26ee (.)
```

### ✅ CORRETTO
```php
// Fai questo
TextInput::make('title')
    ->required();
// L'etichetta "Titolo" sarà automaticamente aggiunta dal LangServiceProvider
// prendendo il valore da '<modulo>::<risorsa>.fields.title.label'
```

## Vantaggi dell'Approccio Corretto

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
1. **Coerenza**: tutte le etichette sono gestite in modo uniforme
2. **Multilingua**: facilita la traduzione in più lingue
3. **Manutenibilità**: le etichette sono centralizzate nei file di traduzione
4. **Performance**: ottimizzazioni di caching implementate nel LangServiceProvider
<<<<<<< HEAD
<<<<<<< HEAD
## Collegamenti Bidirezionali
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
- [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/docs/README.md) - Best practice e linee guida generali
=======
- [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/project_docs/README.md) - Best practice e linee guida generali
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
- [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/project_docs/README.md) - Best practice e linee guida generali
- [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/docs/README.md) - Best practice e linee guida generali
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

=======
>>>>>>> 9059f82 (.)
---
### Link Bidirezionale
Questo documento è linkato anche dalla documentazione del modulo Cms per garantire coerenza tra i moduli.
# ⚠️ Regola vincolante: MAI usare ->label() nei componenti Filament
- Tutte le label sono gestite tramite i file di traduzione del modulo.
<<<<<<< HEAD
- Consulta anche:
<<<<<<< HEAD
<<<<<<< HEAD
  - [docs <nome progetto>](../../<nome progetto>/docs/README.md)
=======
  - [docs Modulo Generico](../../<nome modulo>/docs/README.md)
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
  - [docs Modulo Generico](../../<nome modulo>/docs/README.md)
  - [docs SaluteOra](../../SaluteOra/docs/README.md)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
  - [docs Xot](../../Xot/docs/README.md)
## Policy DRY sulle Traduzioni di Disponibilità/Appuntamenti
Tutte le label, placeholder, messaggi e azioni relativi a disponibilità e appuntamenti sono centralizzate nel file di traduzione appointment.php del modulo. Non vanno mai create label custom o tabelle custom per la disponibilità. Tutte le logiche di fetch, creazione, modifica, cancellazione sono centralizzate su Appointment.
=======

## Collegamenti Bidirezionali

- [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/docs/README.md) - Best practice e linee guida generali
=======

## Collegamenti Bidirezionali

- [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/project_docs/README.md) - Best practice e linee guida generali
>>>>>>> 1bb26ee (.)

---

### Link Bidirezionale
Questo documento è linkato anche dalla documentazione del modulo Cms per garantire coerenza tra i moduli.

# ⚠️ Regola vincolante: MAI usare ->label() nei componenti Filament

- Tutte le label sono gestite tramite i file di traduzione del modulo.
- Consulta anche:
<<<<<<< HEAD
  - [docs SaluteOra](../../SaluteOra/docs/README.md)
=======
  - [docs Modulo Generico](../../<nome modulo>/docs/README.md)
>>>>>>> 1bb26ee (.)
  - [docs Xot](../../Xot/docs/README.md)

## Policy DRY sulle Traduzioni di Disponibilità/Appuntamenti

Tutte le label, placeholder, messaggi e azioni relativi a disponibilità e appuntamenti sono centralizzate nel file di traduzione appointment.php del modulo. Non vanno mai create label custom o tabelle custom per la disponibilità. Tutte le logiche di fetch, creazione, modifica, cancellazione sono centralizzate su Appointment.

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
### Motivazione filosofica, politica, zen
- Un solo punto di verità: nessuna duplicazione, nessun lock-in
- DRY, KISS, serenità del codice
- Refactoring sicuro, massima estendibilità
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 121b362 (.)
=======
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
