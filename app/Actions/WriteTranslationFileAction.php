<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

<<<<<<< HEAD
use Exception;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

use function Safe\exec;
use function Safe\file_put_contents;
use function Safe\tempnam;
<<<<<<< HEAD
=======
=======
use function Safe\tempnam;
use function Safe\file_put_contents;
use function Safe\exec;
>>>>>>> a12f125f4a (.)
=======

use function Safe\exec;
use function Safe\file_put_contents;
use function Safe\tempnam;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;
use function Safe\tempnam;
use function Safe\file_put_contents;
use function Safe\exec;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use function Safe\unlink;

class WriteTranslationFileAction
{
    use QueueableAction;

    /**
     * Scrive il contenuto in un file di traduzione con backup automatico.
     *
     * @param string $filePath Percorso del file di traduzione
     * @param array<string, mixed> $translations Traduzioni da scrivere
     * @return bool True se il file è stato scritto con successo
<<<<<<< HEAD
     * @throws Exception Se il file non può essere scritto
=======
<<<<<<< HEAD
     * @throws Exception Se il file non può essere scritto
=======
     * @throws \Exception Se il file non può essere scritto
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
     */
    public function execute(string $filePath, array $translations): bool
    {
        // Crea backup del file esistente
        $this->createBackup($filePath);

        // Converte le traduzioni in formato PHP
        $readAction = app(ReadTranslationFileAction::class);
        $phpContent = $readAction->toPhp($translations);

        // Verifica la sintassi PHP prima di scrivere
        $this->validatePhpSyntax($phpContent);

        // Scrivi il file
        $result = File::put($filePath, $phpContent);

        if ($result === false) {
<<<<<<< HEAD
            throw new Exception("Impossibile scrivere il file: {$filePath}");
=======
<<<<<<< HEAD
            throw new Exception("Impossibile scrivere il file: {$filePath}");
=======
            throw new \Exception("Impossibile scrivere il file: {$filePath}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        // Pulisci la cache delle traduzioni
        $this->clearTranslationCache();

        return true;
    }

    /**
     * Crea un backup del file di traduzione.
     *
     * @param string $filePath Percorso del file
     * @return void
     */
    private function createBackup(string $filePath): void
    {
        if (!file_exists($filePath)) {
            return;
        }

        $backupDir = storage_path('app/backups/translations');
        $backupPath = $backupDir . '/' . date('Y-m-d_H-i-s') . '_' . basename($filePath);

        // Crea la directory di backup se non esiste
        if (!File::exists($backupDir)) {
<<<<<<< HEAD
            File::makeDirectory($backupDir, 0o755, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            File::makeDirectory($backupDir, 0o755, true);
=======
            File::makeDirectory($backupDir, 0755, true);
>>>>>>> a12f125f4a (.)
=======
            File::makeDirectory($backupDir, 0o755, true);
>>>>>>> b93ef594b4 (.)
=======
            File::makeDirectory($backupDir, 0755, true);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        // Copia il file
        File::copy($filePath, $backupPath);
    }

    /**
     * Valida la sintassi PHP del contenuto.
     *
     * @param string $phpContent Contenuto PHP da validare
     * @return void
<<<<<<< HEAD
     * @throws Exception Se la sintassi PHP non è valida
=======
<<<<<<< HEAD
     * @throws Exception Se la sintassi PHP non è valida
=======
     * @throws \Exception Se la sintassi PHP non è valida
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
     */
    private function validatePhpSyntax(string $phpContent): void
    {
        // Crea un file temporaneo per la validazione
        $tempFile = tempnam(sys_get_temp_dir(), 'translation_');
        file_put_contents($tempFile, $phpContent);

        // Esegue php -l per validare la sintassi
        $output = [];
        $returnCode = 0;
        exec("php -l {$tempFile} 2>&1", $output, $returnCode);

        // Rimuove il file temporaneo
        unlink($tempFile);

        if ($returnCode !== 0) {
<<<<<<< HEAD
            $error = implode("\n", $output ?? []);
            throw new Exception("Sintassi PHP non valida: {$error}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $error = implode("\n", $output ?? []);
=======
            $error = implode("\n", $output);
>>>>>>> a12f125f4a (.)
=======
            $error = implode("\n", $output ?? []);
>>>>>>> b93ef594b4 (.)
            throw new Exception("Sintassi PHP non valida: {$error}");
=======
            $error = implode("\n", $output);
            throw new \Exception("Sintassi PHP non valida: {$error}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }
    }

    /**
     * Pulisce la cache delle traduzioni.
     *
     * @return void
     */
    private function clearTranslationCache(): void
    {
        // Pulisce la cache di Laravel
        if (app()->bound('cache')) {
            app('cache')->flush();
        }

        // Pulisce la cache delle traduzioni
        if (app()->bound('translation.loader')) {
            /** @phpstan-ignore method.notFound */
            app('translation.loader')->flush();
        }
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
