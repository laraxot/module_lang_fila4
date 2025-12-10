<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
# FAQ e Problemi Comuni sulle Traduzioni

## 1. Perché il POST non funziona su rotte localizzate?
Se non usi URL localizzati anche nei form/action, il middleware può fare redirect e cambiare il metodo in GET. Usa sempre gli helper per generare URL localizzati nei form.
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
## 2. Come si cache-izzano le rotte tradotte?
Usa il comando:
```bash
php artisan route:trans:cache
```
Non usare `route:cache` standard. Per Laravel 11+ segui la doc ufficiale per il caricamento delle rotte cache.
<<<<<<< HEAD
<<<<<<< HEAD
## 3. Cosa succede se una chiave manca?
Laravel mostra la chiave stessa. Se usi PHP e hai impostato fallback_locale, cerca nella lingua di fallback. Con JSON, mostra sempre la chiave.
## 4. Come gestire traduzioni per traduttori non-dev?
Preferisci JSON solo se necessario. Altrimenti, esporta le chiavi PHP in formato gestibile (Excel, CSV) per i traduttori.
## 5. Come evitare conflitti tra PHP e JSON?
Non usare mai la stessa chiave in entrambi. Laravel dà priorità al file PHP.
## 6. Come tradurre blocchi di testo lunghi?
Usa chiavi dedicate in PHP (es. `onboarding.welcome_text`) o, solo se necessario, JSON. Documenta sempre la scelta.
## 7. Come testare la localizzazione nei feature test?
Usa la funzione `refreshApplicationWithLocale` nei test per forzare la lingua.
=======
=======
>>>>>>> 1bb26ee (.)

## 3. Cosa succede se una chiave manca?
Laravel mostra la chiave stessa. Se usi PHP e hai impostato fallback_locale, cerca nella lingua di fallback. Con JSON, mostra sempre la chiave.

## 4. Come gestire traduzioni per traduttori non-dev?
Preferisci JSON solo se necessario. Altrimenti, esporta le chiavi PHP in formato gestibile (Excel, CSV) per i traduttori.

## 5. Come evitare conflitti tra PHP e JSON?
Non usare mai la stessa chiave in entrambi. Laravel dà priorità al file PHP.

## 6. Come tradurre blocchi di testo lunghi?
Usa chiavi dedicate in PHP (es. `onboarding.welcome_text`) o, solo se necessario, JSON. Documenta sempre la scelta.

## 7. Come testare la localizzazione nei feature test?
Usa la funzione `refreshApplicationWithLocale` nei test per forzare la lingua.

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
## 8. Come impostare locale e fallback?
In `config/app.php`:
```php
'locale' => 'it',
'fallback_locale' => 'en',
<<<<<<< HEAD
<<<<<<< HEAD
## 9. Perché il fallback non funziona con JSON?
Perché i file JSON non supportano fallback: se manca la chiave, viene mostrata la chiave stessa.
## 10. Dove documentare le scelte?
Aggiorna sempre la documentazione in `/Modules/Lang/docs` e spiega la strategia scelta per il progetto.
## 12. Come personalizzare i messaggi di validazione?
- Usa i metodi `attributes()` e `messages()` nelle Form Request.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1bb26ee (.)
```

## 9. Perché il fallback non funziona con JSON?
Perché i file JSON non supportano fallback: se manca la chiave, viene mostrata la chiave stessa.

## 10. Dove documentare le scelte?
Aggiorna sempre la documentazione in `/Modules/Lang/docs` e spiega la strategia scelta per il progetto.

## 12. Come personalizzare i messaggi di validazione?
- Usa i metodi `attributes()` e `messages()` nelle Form Request.
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
- Consulta la guida dettagliata in `/Modules/Lang/docs/validation-messages.md`.

## 13. Come gestire plurale/singolare e localizzazione di date/valute?
- Consulta la guida dettagliata in `/Modules/Lang/docs/pluralization-and-localization.md`.
<<<<<<< HEAD
=======
=======
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- Consulta la guida dettagliata in `/Modules/Lang/project_docs/validation-messages.md`.
## 13. Come gestire plurale/singolare e localizzazione di date/valute?
- Consulta la guida dettagliata in `/Modules/Lang/project_docs/pluralization-and-localization.md`.
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
=======
>>>>>>> 9059f82 (.)
- Consulta la guida dettagliata in `/Modules/Lang/docs/validation-messages.md`.
- Consulta la guida dettagliata in `/Modules/Lang/docs/pluralization-and-localization.md`.
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

=======
>>>>>>> 9059f82 (.)
## FAQ
### Devo registrare manualmente i comandi console?
**No!** Tutti i comandi console sono autoregistrati tramite XotBaseServiceProvider. Non aggiungere mai `$this->commands([...])` nei provider. Perché? Vedi [lang-service-provider.md](./lang-service-provider.md) e [PHILOSOPHY.md](./PHILOSOPHY.md) 
=======
>>>>>>> 121b362 (.)
=======
=======
- Consulta la guida dettagliata in `/Modules/Lang/project_docs/validation-messages.md`.

## 13. Come gestire plurale/singolare e localizzazione di date/valute?
- Consulta la guida dettagliata in `/Modules/Lang/project_docs/pluralization-and-localization.md`.
>>>>>>> 1bb26ee (.)

## FAQ

### Devo registrare manualmente i comandi console?

**No!** Tutti i comandi console sono autoregistrati tramite XotBaseServiceProvider. Non aggiungere mai `$this->commands([...])` nei provider. Perché? Vedi [lang-service-provider.md](./lang-service-provider.md) e [PHILOSOPHY.md](./PHILOSOPHY.md) 
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
