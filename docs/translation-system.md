<<<<<<< HEAD
<<<<<<< HEAD
# Sistema di Traduzione in il progetto

## LangServiceProvider
Il `LangServiceProvider` è il cuore del sistema di traduzione e gestisce automaticamente le label dei componenti Filament.
### Funzionamento
=======
# Sistema di Traduzione in il progetto

## LangServiceProvider

Il `LangServiceProvider` è il cuore del sistema di traduzione e gestisce automaticamente le label dei componenti Filament.

### Funzionamento

>>>>>>> d5fc9cd (.)
1. **Caricamento Traduzioni**
   - Le traduzioni sono caricate dai file nella cartella `lang` di ogni modulo
   - Supporta sia file PHP che JSON
   - Usa il nome del modulo in minuscolo come namespace delle traduzioni
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
2. **Gestione Automatica Label**
   - Non si usa mai il metodo `->label()` direttamente sui componenti
   - Le label sono gestite automaticamente dal provider
   - Usa i file di traduzione per tutte le etichette
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
3. **Struttura File Traduzioni**
```php
return [
    'fields' => [
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Inserisci il tuo nome completo',
        ],
    ],
];
```
<<<<<<< HEAD
### Componenti Supportati
=======

### Componenti Supportati

>>>>>>> d5fc9cd (.)
- `Filament\Forms\Components\Field`
- `Filament\Tables\Columns\Column`
- `Filament\Forms\Components\Placeholder`
- `Filament\Infolists\Components\Entry`
- `Filament\Tables\Filters\BaseFilter`
- `Filament\Forms\Components\Wizard\Step`
<<<<<<< HEAD
## Best Practices
=======

## Best Practices

>>>>>>> d5fc9cd (.)
1. **Mai Usare label() Direttamente**
   ```php
   // ❌ Errato
   TextInput::make('first_name')->label('Nome')
   
   // ✅ Corretto
   TextInput::make('first_name') // Label da file traduzione
   ```
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
2. **Struttura Traduzioni**
   - Usa array nidificati per organizzare le traduzioni
   - Separa label, placeholder, help e altre proprietà
   - Mantieni coerenza nella struttura tra i moduli
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
3. **Namespace Traduzioni**
   - Usa il nome del modulo come namespace
   - Organizza le traduzioni per entità/risorsa
   - Mantieni una gerarchia logica
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
4. **Manutenibilità**
   - Centralizza le traduzioni nei file lang
   - Evita testo hardcoded nel codice
   - Facilita il supporto multilingua
<<<<<<< HEAD
## Collegamenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

## Collegamenti
>>>>>>> d5fc9cd (.)
- [Form Components](../Patient/docs/filament-form-components.md)
- [Wizard Structure](../Patient/docs/filament-wizard-structure.md)
- [Best Practices](../Xot/docs/filament-best-practices.md)

## Vedi Anche
- [Laravel Translations](https://laravel.com/docs/localization)
<<<<<<< HEAD
- [Filament i18n](https://filamentphp.com/docs/internationalization) 
=======
=======
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- [Form Components](../Patient/project_docs/filament-form-components.md)
- [Wizard Structure](../Patient/project_docs/filament-wizard-structure.md)
- [Best Practices](../Xot/project_docs/filament-best-practices.md)
## Vedi Anche
- [Laravel Translations](https://laravel.com/project_docs/localization)
- [Filament i18n](https://filamentphp.com/project_docs/internationalization) 
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
=======
>>>>>>> 9059f82 (.)
- [Form Components](../Patient/docs/filament-form-components.md)
- [Wizard Structure](../Patient/docs/filament-wizard-structure.md)
- [Best Practices](../Xot/docs/filament-best-practices.md)
- [Laravel Translations](https://laravel.com/docs/localization)
- [Filament i18n](https://filamentphp.com/docs/internationalization) 
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
=======
>>>>>>> 121b362 (.)
=======
- [Filament i18n](https://filamentphp.com/docs/internationalization) 
>>>>>>> d5fc9cd (.)
