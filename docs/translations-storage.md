<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d5fc9cd (.)
# Storage delle Traduzioni: PHP vs JSON

## Introduzione
In Laravel puoi salvare le traduzioni in file PHP strutturati o in file JSON flat. Ogni approccio ha vantaggi, svantaggi e impatti diversi su fallback, gestione team e manutenzione.
<<<<<<< HEAD
## Confronto tra PHP e JSON
=======

## Confronto tra PHP e JSON

>>>>>>> d5fc9cd (.)
| Caratteristica         | PHP Files                        | JSON Files                      |
|-----------------------|----------------------------------|---------------------------------|
| **Struttura**         | Annidata, multi-livello          | Flat, chiave = frase            |
| **Contesto**          | Sì (chiavi strutturate)          | No (tutto in un file)           |
| **Commenti**          | Sì                               | No                              |
| **Fallback**          | Sì (usa fallback_locale)         | No (mostra la chiave)           |
| **Per traduttori**    | Più difficile, serve contesto    | Più facile, chiavi leggibili    |
| **Per dev**           | Più flessibile, DRY              | Più semplice, meno controllo    |
| **Consistenza**       | Più facile con chiavi            | Rischio duplicati/frasi simili  |
| **Uso consigliato**   | UI, errori, messaggi brevi       | Frasi lunghe, onboarding, email |
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
## Best Practice per <nome progetto>
=======
## Best Practice per 
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
## Best Practice per 
## Best Practice per SaluteOra
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======

## Best Practice per SaluteOra
>>>>>>> d5fc9cd (.)
- **Usa file PHP** per UI, errori, messaggi brevi, validazione, notifiche.
- **Usa JSON** solo per frasi lunghe o onboarding, se serve collaborazione con traduttori non-dev.
- **Non mischiare** chiavi tra PHP e JSON con lo stesso nome.
- **Fallback:** solo i file PHP supportano il fallback_locale. I JSON mostrano la chiave se manca la traduzione.
- **Mantieni la coerenza**: scegli uno stile e seguilo in tutto il progetto.
<<<<<<< HEAD
## Esempi
=======

## Esempi

>>>>>>> d5fc9cd (.)
### PHP
/lang/en/auth.php
```php
return [
    'register' => [
        'name' => 'Name',
        'email' => 'Email',
    ],
    'login' => [
        'login' => 'Login',
<<<<<<< HEAD
];
```
Uso:
```blade
{{ __('auth.register.name') }}
=======
    ],
];
```

Uso:
```blade
{{ __('auth.register.name') }}
```

>>>>>>> d5fc9cd (.)
### JSON
/lang/en.json
```json
{
  "Register to Join our Community": "Sign up to join our community"
}
<<<<<<< HEAD
{{ __('Register to Join our Community') }}
## Raccomandazioni
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Per <nome progetto>, **PHP è la scelta principale**. JSON solo per casi particolari.
=======
- Per , **PHP è la scelta principale**. JSON solo per casi particolari.
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
- Per , **PHP è la scelta principale**. JSON solo per casi particolari.
- Per SaluteOra, **PHP è la scelta principale**. JSON solo per casi particolari.
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- Documenta sempre la scelta e spiega ai traduttori/dev come aggiungere nuove stringhe.
- Per fallback, imposta sempre `fallback_locale` in `config/app.php`.
- Per traduzioni lunghe, valuta se usare chiavi dedicate in PHP o, solo se necessario, JSON.
## Fonti
- [Laravel Daily: Store in PHP or JSON?](https://laraveldaily.com/lesson/multi-language-laravel/mcamara-laravel-localization)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Docs](https://laravel.com/docs/11.x/localization)
=======
- [Laravel Docs](https://laravel.com/project_docs/11.x/localization)
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
- [Laravel Docs](https://laravel.com/project_docs/11.x/localization)
- [Laravel Docs](https://laravel.com/docs/11.x/localization)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization)
## Processo Dev → Traduttore: Checklist e Istruzioni
1. **Preparazione**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Esporta i file PHP/JSON di riferimento da `/var/www/html/<nome progetto>/laravel/lang/en/` o `/lang/en.json`.
=======
   - Esporta i file PHP/JSON di riferimento da `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en/` o `/lang/en.json`.
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
   - Esporta i file PHP/JSON di riferimento da `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/lang/en/` o `/lang/en.json`.
   - Esporta i file PHP/JSON di riferimento da `/var/www/html/saluteora/laravel/lang/en/` o `/lang/en.json`.
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======
```

Uso:
```blade
{{ __('Register to Join our Community') }}
```

## Raccomandazioni
- Per SaluteOra, **PHP è la scelta principale**. JSON solo per casi particolari.
- Documenta sempre la scelta e spiega ai traduttori/dev come aggiungere nuove stringhe.
- Per fallback, imposta sempre `fallback_locale` in `config/app.php`.
- Per traduzioni lunghe, valuta se usare chiavi dedicate in PHP o, solo se necessario, JSON.

## Fonti
- [Laravel Daily: Store in PHP or JSON?](https://laraveldaily.com/lesson/multi-language-laravel/mcamara-laravel-localization)
- [Laravel Docs](https://laravel.com/docs/11.x/localization)
- [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization)

## Processo Dev → Traduttore: Checklist e Istruzioni

1. **Preparazione**
   - Esporta i file PHP/JSON di riferimento da `/var/www/html/saluteora/laravel/lang/en/` o `/lang/en.json`.
>>>>>>> d5fc9cd (.)
   - Elimina tutte le stringhe non usate prima di inviare ai traduttori.
2. **Istruzioni per i Traduttori**
   - Nei file PHP: traduci solo il testo a destra di `=>`, non cambiare chiavi o struttura.
   - Nei file JSON: traduci solo il valore, non la chiave.
   - Non aggiungere, rimuovere o spostare chiavi.
   - Se serve un apostrofo (`'`), anteporre `\`.
3. **Reintegrazione**
   - Sostituisci i file tradotti in `/lang/{locale}/` o `/lang/{locale}.json`.
   - Verifica la sintassi e testa l'applicazione.
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
### Modifiche Proposte
- Uniformare la struttura delle chiavi in tutti i file PHP.
- Usare sempre chiavi strutturate in inglese.
- Nei Blade, sostituire stringhe hardcoded con chiavi (es. `__('auth.login.submit_button')`).
- Documentare ogni file PHP con commenti per i traduttori. 
<<<<<<< HEAD
## Gestione Plurale/Singolare nelle Traduzioni
=======

## Gestione Plurale/Singolare nelle Traduzioni

>>>>>>> d5fc9cd (.)
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
=======
  ```

>>>>>>> d5fc9cd (.)
### Sintassi delle Regole Plurali
- `{0}`: caso zero
- `{1}`: caso singolare
- `[2,*]`: da 2 in poi
- Usa `:count` per il numero
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
### Plurale in JSON
- Supportato ma meno leggibile:
  ```json
  {
    "{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages": "{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages"
  }
<<<<<<< HEAD
  {{ trans_choice('{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages', $messagesCount) }}
- **Raccomandazione**: Preferire i file PHP per le stringhe plurali.
- Inserire tutte le stringhe plurali in `/lang/{locale}/messages.php`.
- Nei Blade, sostituire blocchi condizionali con `trans_choice()` o `@choice()`.
- Evitare l'uso del JSON per le stringhe plurali.
=======
>>>>>>> 121b362 (.)
=======
  ```
- In Blade:
  ```blade
  {{ trans_choice('{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages', $messagesCount) }}
  ```
- **Raccomandazione**: Preferire i file PHP per le stringhe plurali.

### Modifiche Proposte
- Inserire tutte le stringhe plurali in `/lang/{locale}/messages.php`.
- Nei Blade, sostituire blocchi condizionali con `trans_choice()` o `@choice()`.
- Evitare l'uso del JSON per le stringhe plurali.
>>>>>>> d5fc9cd (.)
