<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Standard per le Traduzioni nel Progetto <nome progetto>
=======
# Standard per le Traduzioni nel Progetto 
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
# Standard per le Traduzioni nel Progetto 
# Standard per le Traduzioni nel Progetto SaluteOra
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)

## Struttura delle Cartelle
Le traduzioni vanno posizionate nella cartella `lang` di ogni modulo, organizzate per lingua:
=======
# Standard per le Traduzioni nel Progetto SaluteOra

## Struttura delle Cartelle

Le traduzioni vanno posizionate nella cartella `lang` di ogni modulo, organizzate per lingua:

>>>>>>> d5fc9cd (.)
```
Modules/
  ├── ModuleName/
  │   └── lang/
  │       ├── it/
  │       │   ├── resource-name.php
  │       │   └── ...
  │       └── en/
  │           ├── resource-name.php
  │           └── ...
<<<<<<< HEAD
## Convenzione di Naming
=======
```

## Convenzione di Naming

>>>>>>> d5fc9cd (.)
1. **Chiavi di Traduzione**:
   - Usare la notazione `snake_case`
   - Seguire la struttura gerarchica: `tipo.entità.elemento`
   - Esempio: `fields.patient.birth_date.label`
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
2. **Struttura Standard per le Risorse**:
   ```php
   return [
       'navigation' => [
           'label' => 'Etichetta Menu',
           'group' => 'Gruppo Menu',
           'icon' => 'heroicon-o-icon-name',
       ],
       'fields' => [
           'field_name' => [
               'label' => 'Etichetta Campo',
               'placeholder' => 'Testo segnaposto',
               'helper_text' => 'Testo di aiuto',
               'tooltip' => 'Tooltip',
           ],
<<<<<<< HEAD
       'actions' => [
           'save' => 'Salva',
           'cancel' => 'Annulla',
=======
       ],
       'actions' => [
           'save' => 'Salva',
           'cancel' => 'Annulla',
       ],
>>>>>>> d5fc9cd (.)
       'messages' => [
           'created' => 'Record creato con successo',
           'updated' => 'Record aggiornato',
           'deleted' => 'Record eliminato',
       ]
   ];
   ```
<<<<<<< HEAD
## Linee Guida per le Traduzioni
=======

## Linee Guida per le Traduzioni

>>>>>>> d5fc9cd (.)
1. **Mai usare chiavi di traduzione in italiano** direttamente nel codice
2. **Non usare mai `.navigation`** come valore di traduzione
3. **Usare sempre la struttura espansa** per i campi
4. **Mantenere l'ordine alfabetico** delle chiavi
5. **Tutti i testi visibili all'utente** devono essere tradotti
6. **Usare le icone Heroicons** per le voci di menu
<<<<<<< HEAD
## Esempi
=======

## Esempi

>>>>>>> d5fc9cd (.)
### ❌ Errato:
```php
'label' => 'user.navigation',
'group' => 'user.navigation',
'icon' => 'user.navigation',
<<<<<<< HEAD
### ✅ Corretto:
=======
```

### ✅ Corretto:
```php
>>>>>>> d5fc9cd (.)
'navigation' => [
    'label' => 'Utenti',
    'group' => 'Amministrazione',
    'icon' => 'heroicon-o-users',
],
<<<<<<< HEAD
## Struttura Consigliata per le Risorse Filament
=======
```

## Struttura Consigliata per le Risorse Filament

```php
>>>>>>> d5fc9cd (.)
return [
    'navigation' => [
        'label' => 'Pazienti',
        'group' => 'Gestione',
        'icon' => 'heroicon-o-user-group',
    ],
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'helper_text' => 'Inserisci il nome del paziente',
        ],
        // Altri campi...
<<<<<<< HEAD
=======
    ],
>>>>>>> d5fc9cd (.)
    'actions' => [
        'create' => 'Nuovo Paziente',
        'edit' => 'Modifica',
        'delete' => 'Elimina',
    ]
];
<<<<<<< HEAD
## Best Practices
=======
```

## Best Practices

>>>>>>> d5fc9cd (.)
1. **Mantenere la coerenza** tra le diverse lingue
2. **Validare** che tutte le chiavi siano presenti in tutte le lingue
3. **Documentare** le nuove chiavi aggiunte
4. **Non duplicare** le traduzioni tra moduli diversi
5. **Usare i gruppi** per organizzare le voci di menu correlate
<<<<<<< HEAD
## Strumenti Utili
1. **php artisan translation:sync** - Sincronizza le chiavi tra le lingue
2. **php artisan translation:missing** - Trova le chiavi mancanti
3. **php artisan translation:export** - Esporta le traduzioni per la localizzazione
## Note Importanti
- Le traduzioni sono gestite automaticamente dal `LangServiceProvider`
- Non è necessario usare `->label()` nei componenti Filament
- Le etichette vengono risolte automaticamente in base al nome del campo
## [AGGIORNAMENTO 2024-06-XX] - Esempio appointment.php
=======

## Strumenti Utili

1. **php artisan translation:sync** - Sincronizza le chiavi tra le lingue
2. **php artisan translation:missing** - Trova le chiavi mancanti
3. **php artisan translation:export** - Esporta le traduzioni per la localizzazione

## Note Importanti

- Le traduzioni sono gestite automaticamente dal `LangServiceProvider`
- Non è necessario usare `->label()` nei componenti Filament
- Le etichette vengono risolte automaticamente in base al nome del campo

## [AGGIORNAMENTO 2024-06-XX] - Esempio appointment.php

>>>>>>> d5fc9cd (.)
La struttura delle traduzioni per le risorse cliniche (es. appuntamenti) è stata aggiornata per garantire:
- Centralizzazione delle chiavi
- Struttura gerarchica e inglese
- Coerenza enum/fields/actions/messages
- Nessun lock-in, massima serenità zen
<<<<<<< HEAD
### Esempio appointment.php
    'navigation' => [...],
    'model' => [...],
=======

### Esempio appointment.php

```php
return [
    'navigation' => [...],
    'model' => [...],
    'fields' => [
>>>>>>> d5fc9cd (.)
        'title' => [...],
        'doctor_id' => [...],
        'patient_id' => [...],
        'studio_id' => [...],
        'start_time' => [...],
        'end_time' => [...],
        'status' => [...],
        'notes' => [...],
        'reason' => [...],
<<<<<<< HEAD
=======
    ],
>>>>>>> d5fc9cd (.)
    'actions' => [...],
    'filters' => [...],
    'calendar' => [...],
    'notifications' => [...],
    'messages' => [...],
<<<<<<< HEAD
=======
];
```

>>>>>>> d5fc9cd (.)
### Motivazione filosofica, logica, religiosa, politica
- DRY: nessuna duplicazione
- KISS: struttura semplice e leggibile
- Centralizzazione: un solo punto di verità
- Nessun lock-in: ogni modulo può evolvere senza dipendenze nascoste
- Serenità zen: codice e traduzioni sempre coerenti
<<<<<<< HEAD
### Collegamenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [<nome progetto>/docs/appointment-management.md](../../<nome progetto>/docs/appointment-management.md)
=======
- [<nome modulo>/docs/appointment-management.md](../../<nome modulo>/docs/appointment-management.md)
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
- [<nome modulo>/docs/appointment-management.md](../../<nome modulo>/docs/appointment-management.md)
- [SaluteOra/docs/appointment-management.md](../../SaluteOra/docs/appointment-management.md)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- [Lang/translation_keys_best_practices.md](./translation_keys_best_practices.md)
=======

### Collegamenti
- [SaluteOra/docs/appointment-management.md](../../SaluteOra/docs/appointment-management.md)
- [Lang/translation_keys_best_practices.md](./translation_keys_best_practices.md)

>>>>>>> d5fc9cd (.)
### Checklist aggiornata
- Usare solo chiavi inglesi e struttura gerarchica
- Validare la presenza di tutte le chiavi in tutte le lingue
- Aggiornare la documentazione ogni volta che si modifica una risorsa clinica
- Non duplicare chiavi tra moduli
- Seguire sempre la filosofia DRY, KISS, centralizzazione
<<<<<<< HEAD
=======
>>>>>>> 121b362 (.)
=======
>>>>>>> d5fc9cd (.)
