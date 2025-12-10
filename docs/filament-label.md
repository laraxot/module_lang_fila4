<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d5fc9cd (.)
# Gestione automatica delle label in Filament tramite LangServiceProvider

## Funzionamento
- LangServiceProvider applica automaticamente la label corretta tramite AutoLabelAction a tutte le colonne, actions e fields Filament.
- Non serve mai usare ->label(): la label viene ricavata dalla chiave di traduzione secondo convenzione.
- Se la traduzione non esiste, il sistema può crearla o segnalarla (fallback).
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
## Pattern
- Label, heading, help e placeholder SOLO in file di traduzione modulo.
- Convenzione chiavi: `modulo.resource.fields.campo.label` o `modulo.resource.actions.azione.label`.
- Nessuna label hardcoded nei file Filament.
<<<<<<< HEAD
## Anti-pattern
- Uso di ->label() nei componenti Filament.
- Label hardcoded.
## Test di regressione
- Test statico che cerca ->label( nei file Filament.
- Test che verifica la presenza di tutte le chiavi di traduzione.
## Collegamenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [docs root](../../../../docs/actions.md)
- [docs Xot](../../../Xot/docs/MODULE_NAMESPACE_RULES.md)

=======
=======
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- [docs root](../../../../project_docs/actions.md)
- [docs Xot](../../../Xot/project_docs/MODULE_NAMESPACE_RULES.md)
- [docs root](../../../../docs/actions.md)
- [docs Xot](../../../Xot/docs/MODULE_NAMESPACE_RULES.md)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)

Ultimo aggiornamento: maggio 2025.
>>>>>>> 9ce799e (Check & fix styling)
=======
Ultimo aggiornamento: maggio 2025.
>>>>>>> 9059f82 (.)
=======
>>>>>>> 121b362 (.)
=======

## Anti-pattern
- Uso di ->label() nei componenti Filament.
- Label hardcoded.

## Test di regressione
- Test statico che cerca ->label( nei file Filament.
- Test che verifica la presenza di tutte le chiavi di traduzione.

## Collegamenti
- [docs root](../../../../docs/actions.md)
- [docs Xot](../../../Xot/docs/MODULE_NAMESPACE_RULES.md)

Ultimo aggiornamento: maggio 2025.
>>>>>>> d5fc9cd (.)
