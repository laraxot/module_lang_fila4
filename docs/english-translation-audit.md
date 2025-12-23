# Audit Traduzioni Inglesi - 

## Panoramica

Questo documento traccia l'audit e la correzione delle traduzioni inglesi nei file di lingua del progetto . Molti file nelle cartelle `lang/en/` contengono ancora testo in italiano che deve essere tradotto.

## Problemi Identificati

### File Completamente in Italiano

1. **Modules/UI/lang/en/opening_hours.php** ✅ CORRETTO
   - Status: Tradotto completamente
   - Conteneva: Tutto il testo in italiano
   - Risolto: 2025-01-06

2. **Modules/Notify/lang/en/test_smtp.php** ✅ CORRETTO
   - Status: Tradotto completamente
   - Conteneva: Tutto il testo in italiano
   - Risolto: 2025-01-06

3. **Modules/Notify/lang/en/send_email.php** ✅ CORRETTO
   - Status: Tradotto completamente
   - Conteneva: Tutto il testo in italiano
   - Risolto: 2025-01-06

### File con Mix Italiano/Inglese

1. **Modules//lang/en/find_doctor_widget.php** ✅ CORRETTO
   - Status: Tradotto completamente
   - Conteneva: Placeholder in italiano
   - Risolto: 2025-01-06

2. **Modules/UI/lang/en/opening_hours_field.php** ✅ CORRETTO
   - Status: Aggiornato completamente
   - Problemi: Mancavano molte voci presenti in italiano + sintassi array() invece di []
   - Risolto: 2025-01-06
   - Aggiunte: Tutte le voci mancanti (morning, afternoon, morning_label, afternoon_label, etc.)
   - Convertito: Sintassi short array []

3. **Modules//lang/en/doctor.php** ✅ CORRETTO
   - Status: Aggiornato completamente
   - Problemi: Sintassi array() invece di [] + molte voci mancanti dalla versione italiana
   - Risolto: 2025-01-06
   - Aggiunte: Tutte le voci mancanti (steps, fields, filters, actions, messages, sections, validation, empty_state, specialties)
   - Convertito: Sintassi short array []
   - Struttura: Allineata completamente con la versione italiana

4. **Modules//lang/de/doctor.php** ✅ CORRETTO
   - Status: Aggiornato completamente
   - Problemi: Era completamente in italiano invece che in tedesco + sintassi array() invece di []
   - Risolto: 2025-01-06
   - Tradotto: Tutto il contenuto in tedesco appropriato
   - Aggiunte: Tutte le voci mancanti dalla versione italiana
   - Convertito: Sintassi short array []

5. **Modules//lang/en/user_type_enum.php** ✅ CORRETTO
   - Status: Aggiornato completamente
   - Problemi: Testo in italiano + sintassi array() invece di [] + mancava declare(strict_types=1)
   - Risolto: 2025-01-06
   - Traduzioni: Complete in inglese (Doctor, Patient, Administrator)
   - Convertito: Sintassi short array [] + declare(strict_types=1)

6. **Modules//lang/de/user_type_enum.php** ✅ CORRETTO
   - Status: Aggiornato completamente
   - Problemi: Testo in italiano + sintassi array() invece di [] + mancava declare(strict_types=1)
   - Risolto: 2025-01-06
   - Traduzioni: Complete in tedesco (Arzt, Patient, Administrator)
   - Convertito: Sintassi short array [] + declare(strict_types=1)

## File da Verificare

### Modulo  - File con Testo Italiano in Cartelle EN/DE

I seguenti file contengono ancora testo in italiano nelle cartelle `en/` e `de/` e necessitano di correzione:

#### Cartella EN (21 file)
- `Modules//lang/en/admin.php`
- `Modules//lang/en/doctor-resource.php`
- `Modules//lang/en/find_doctor_and_appointment_widget.php`
- `Modules//lang/en/studio.php`
- `Modules//lang/en/doctor_availability.php`
- `Modules//lang/en/patient.php`
- `Modules//lang/en/medical_history.php`
- `Modules//lang/en/doctor_calendar.php`
- `Modules//lang/en/user-resource.php`
- `Modules//lang/en/filament.php`
- `Modules//lang/en/relation-managers.php`
- `Modules//lang/en/<nome progetto>.php`
- `Modules//lang/en/doctor_availability_calendar.php`
- `Modules//lang/en/widgets.php`
- `Modules//lang/en/appointment_workflow.php`
- `Modules//lang/en/studio-resource.php`
- `Modules//lang/en/fields.php`
- `Modules//lang/en/patient-resource.php`
- `Modules//lang/en/user.php`

#### Cartella DE (25 file)
- `Modules//lang/de/clinical_stats.php`
- `Modules//lang/de/admin.php`
- `Modules//lang/de/doctor_availabilities.php`
- `Modules//lang/de/actions.php`
- `Modules//lang/de/find_doctor_widget.php`
- `Modules//lang/de/doctor-resource.php`
- `Modules//lang/de/find-doctor-widget.php`
- `Modules//lang/de/find_doctor_and_appointment_widget.php`
- `Modules//lang/de/notifications.php`
- `Modules//lang/de/studio.php`
- `Modules//lang/de/doctor_availability.php`
- `Modules//lang/de/patient.php`
- `Modules//lang/de/doctor_calendar.php`
- `Modules//lang/de/user-resource.php`
- `Modules//lang/de/filament.php`
- `Modules//lang/de/success.php`
- `Modules//lang/de/appointment.php`
- `Modules//lang/de/relation-managers.php`
- `Modules//lang/de/<nome progetto>.php`
- `Modules//lang/de/doctor_availability_manager.php`
- `Modules//lang/de/doctor_availability_calendar.php`
- `Modules//lang/de/opening_hours.php`
- `Modules//lang/de/widgets.php`
- `Modules//lang/de/appointment_workflow.php`
- `Modules//lang/de/studio-resource.php`
- `Modules//lang/de/fields.php`
- `Modules//lang/de/patient-resource.php`
- `Modules//lang/de/user.php`

### Altri Moduli - File da Verificare

I seguenti file sono stati identificati come contenenti testo in italiano e necessitano di traduzione:

### Modulo Notify
- `Modules/Notify/lang/en/send_aws_email.php`
- `Modules/Notify/lang/en/channel.php`
- `Modules/Notify/lang/en/send_telegram.php`
- `Modules/Notify/lang/en/notify.php`
- `Modules/Notify/lang/en/dashboard.php`
- `Modules/Notify/lang/en/telegram.php`

### Modulo 
- `Modules//lang/en/find_doctor_and_appointment_widget.php`
- `Modules//lang/en/doctor_availability.php`
- `Modules//lang/en/doctor_calendar.php`
- `Modules//lang/en/doctor_availability_calendar.php`

### Altri Moduli
- `Modules/Geo/lang/en/setting.php`
- `Modules/Cms/lang/en/calendar.php`
- `Modules/Cms/lang/en/txt.php`
- `Modules/SaluteMo/lang/en/patient.php`
- `Modules/SaluteMo/lang/en/doctor.php`
- `Modules/Xot/lang/en/panel.php`
- `Modules/Xot/lang/en/artisan-commands-manager.php`
- `Modules/Xot/lang/en/extra.php`
- `Modules/UI/lang/en/user_calendar.php`
- `Modules/User/lang/en/validation.php`
- `Modules/User/lang/en/registration.php`
- `Modules/Activity/lang/en/log.php`
- `Modules/Job/lang/en/import.php`
- `Modules/Job/lang/en/schedule.php`
- `Modules/Job/lang/en/export.php`

## Regole di Traduzione

### 1. Struttura File
- Utilizzare `declare(strict_types=1);` all'inizio
- Utilizzare sintassi breve degli array `[]`
- Mantenere la struttura gerarchica esistente

### 2. Terminologia
- **Patient**: Paziente → Patient
- **Doctor**: Dottore → Doctor
- **Appointment**: Appuntamento → Appointment
- **Schedule**: Programma → Schedule
- **Configuration**: Configurazione → Configuration
- **Settings**: Impostazioni → Settings
- **Validation**: Validazione → Validation
- **Required**: Obbligatorio → Required
- **Optional**: Opzionale → Optional

### 3. Placeholder
- **Seleziona**: Select
- **Inserisci**: Enter
- **Scegli**: Choose
- **Seleziona una**: Select a
- **Inserisci il**: Enter the

### 4. Messaggi di Errore
- **Errore**: Error
- **Si è verificato un errore**: An error occurred
- **Verifica**: Check
- **Configurazione**: Configuration
- **Parametri**: Parameters

### 5. Azioni
- **Invia**: Send
- **Salva**: Save
- **Modifica**: Edit
- **Elimina**: Delete
- **Visualizza**: View
- **Crea**: Create
- **Aggiorna**: Update

## Processo di Traduzione

### Fase 1: Analisi
1. Identificare il file da tradurre
2. Analizzare la struttura esistente
3. Identificare tutti i testi in italiano

### Fase 2: Traduzione
1. Tradurre mantenendo la struttura
2. Verificare la coerenza terminologica
3. Controllare la grammatica inglese

### Fase 3: Verifica
1. Testare la sintassi PHP
2. Verificare che non ci siano errori
3. Controllare la coerenza con altri file

## Comandi Utili

### Trova File con Testo Italiano
```bash
find ./Modules -path "*/lang/en/*.php" -exec grep -l "Configurazione\|Giorno\|Mattina\|Pomeriggio\|Aperto\|Chiuso\|Lunedì\|Martedì\|Mercoledì\|Giovedì\|Venerdì\|Sabato\|Domenica\|Dalle\|Alle\|Utilizzare\|Lasciare\|Formato\|orario\|precedente\|successivo\|sovrapporsi" {} \;
```

### Verifica Sintassi PHP
```bash
php -l path/to/file.php
```

### Trova Parole Chiave Italiane
```bash
grep -r "Inserisci\|Seleziona\|Configurazione\|Errore\|Verifica" ./Modules/*/lang/en/
```

## Checklist Traduzione

- [ ] File identificato e analizzato
- [ ] Struttura mantenuta
- [ ] Tutti i testi tradotti
- [ ] Terminologia coerente
- [ ] Sintassi PHP verificata
- [ ] Documentazione aggiornata
- [ ] Test funzionale eseguito

## Note Importanti

1. **Mai tradurre**:
   - Nomi di file
   - Chiavi degli array
   - Nomi di classi/funzioni
   - Codici di errore tecnici

2. **Sempre tradurre**:
   - Label per l'utente
   - Placeholder
   - Messaggi di errore
   - Descrizioni
   - Help text

3. **Verificare**:
   - Coerenza terminologica
   - Grammatica inglese
   - Contesto appropriato

## Sintassi Array

### ✅ CORRETTO - Sintassi Short Array
```php
return [
    'field' => [
        'label' => 'Label',
        'placeholder' => 'Placeholder',
        'help' => 'Help text',
    ],
];
```

### ❌ ERRATO - Sintassi Array Tradizionale
```php
return array(
    'field' => array(
        'label' => 'Label',
        'placeholder' => 'Placeholder',
        'help' => 'Help text',
    ),
);
```

**Regola**: Utilizzare SEMPRE la sintassi short array `[]` invece di `array()` in tutti i file di traduzione.

## Collegamenti

- [Regole Traduzioni](../../docs/translation-standards.md)
- [Best Practices Filament](../../docs/FILAMENT-BEST-PRACTICES.md)
- [Convenzioni Laraxot](../../docs/laraxot_conventions.md)

---

**Ultimo aggiornamento**: 2025-01-06
**Status**: In corso 