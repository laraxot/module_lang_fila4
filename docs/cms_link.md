# Collegamento al Modulo Cms

Questo documento descrive le relazioni e i collegamenti tra il modulo Lang e il modulo Cms per quanto riguarda le traduzioni e l'internazionalizzazione.

## Traduzioni nei Componenti Filament

Il modulo Lang fornisce il sistema di traduzione utilizzato dal modulo Cms nei suoi componenti Filament. È fondamentale seguire le [regole per le traduzioni in Filament](./filament-translations.md) quando si lavora con i componenti nel modulo Cms.

## Convenzioni di Namespace e Struttura


## Punti di Integrazione

- **LangServiceProvider**: Gestisce automaticamente le etichette dei componenti Filament nel modulo Cms
- **File di traduzione**: I file di traduzione in `Modules/Cms/lang/<lingua>/` seguono la struttura definita da questo modulo
- **AutoLabelAction**: Applicata automaticamente ai componenti Filament nel modulo Cms

## Collegamenti Bidirezionali


---

### Nota Importante
Quando aggiungi nuovi componenti Filament nel modulo Cms, ricorda di:
1. NON utilizzare mai `->label()` direttamente
2. Aggiungere le traduzioni appropriate nei file di lingua
3. Mantenere aggiornata la documentazione in entrambi i moduli

## Collegamenti tra versioni di cms-link.md

