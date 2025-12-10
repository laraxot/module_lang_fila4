# Collegamento al Modulo Cms

Questo documento descrive le relazioni e i collegamenti tra il modulo Lang e il modulo Cms per quanto riguarda le traduzioni e l'internazionalizzazione.

## Traduzioni nei Componenti Filament

Il modulo Lang fornisce il sistema di traduzione utilizzato dal modulo Cms nei suoi componenti Filament. È fondamentale seguire le [regole per le traduzioni in Filament](./filament-translations.md) quando si lavora con i componenti nel modulo Cms.

## Convenzioni di Namespace e Struttura

<<<<<<< HEAD
<<<<<<< HEAD
Il modulo Cms segue specifiche convenzioni di namespace documentate in [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md) che si integrano con il sistema di traduzioni di questo modulo.
=======
Il modulo Cms segue specifiche convenzioni di namespace documentate in [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md) che si integrano con il sistema di traduzioni di questo modulo.
>>>>>>> 9ce799e (Check & fix styling)
=======
Il modulo Cms segue specifiche convenzioni di namespace documentate in [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md) che si integrano con il sistema di traduzioni di questo modulo.
=======
Il modulo Cms segue specifiche convenzioni di namespace documentate in [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md) che si integrano con il sistema di traduzioni di questo modulo.
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

## Punti di Integrazione

- **LangServiceProvider**: Gestisce automaticamente le etichette dei componenti Filament nel modulo Cms
- **File di traduzione**: I file di traduzione in `Modules/Cms/lang/<lingua>/` seguono la struttura definita da questo modulo
- **AutoLabelAction**: Applicata automaticamente ai componenti Filament nel modulo Cms

## Collegamenti Bidirezionali

<<<<<<< HEAD
<<<<<<< HEAD
- [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md)
- [Lang Link nel modulo Cms](../../Cms/docs/lang-link.md)
=======
- [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md)
- [Lang Link nel modulo Cms](../../Cms/project_docs/lang-link.md)
>>>>>>> 9ce799e (Check & fix styling)
=======
- [Convenzioni Namespace Filament](../../Cms/project_docs/convenzioni-namespace-filament.md)
- [Lang Link nel modulo Cms](../../Cms/project_docs/lang-link.md)
=======
- [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md)
- [Lang Link nel modulo Cms](../../Cms/docs/lang-link.md)
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

---

### Nota Importante
Quando aggiungi nuovi componenti Filament nel modulo Cms, ricorda di:
1. NON utilizzare mai `->label()` direttamente
2. Aggiungere le traduzioni appropriate nei file di lingua
3. Mantenere aggiornata la documentazione in entrambi i moduli

## Collegamenti tra versioni di cms-link.md
<<<<<<< HEAD
<<<<<<< HEAD
* [cms-link.md](../../../Xot/docs/cms-link.md)
* [cms-link.md](../../../User/docs/cms-link.md)
* [cms-link.md](../../../UI/docs/cms-link.md)
* [cms-link.md](../../../Lang/docs/cms-link.md)
=======
=======
>>>>>>> fe4a1a8 (.)
* [cms-link.md](../../../Xot/project_docs/cms-link.md)
* [cms-link.md](../../../User/project_docs/cms-link.md)
* [cms-link.md](../../../UI/project_docs/cms-link.md)
* [cms-link.md](../../../Lang/project_docs/cms-link.md)
<<<<<<< HEAD
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
* [cms-link.md](../../../Xot/docs/cms-link.md)
* [cms-link.md](../../../User/docs/cms-link.md)
* [cms-link.md](../../../UI/docs/cms-link.md)
* [cms-link.md](../../../Lang/docs/cms-link.md)
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

