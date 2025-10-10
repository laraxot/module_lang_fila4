<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Illuminate\Support\Arr;
use Spatie\QueueableAction\QueueableAction;

class ReadTranslationFileAction
{
    use QueueableAction;

    /**
     * Legge il contenuto di un file di traduzione.
     *
     * @param string $filePath Percorso del file di traduzione
     * @return array<string, mixed> Contenuto del file di traduzione
<<<<<<< HEAD
     * @throws Exception Se il file non esiste o non è leggibile
=======
<<<<<<< HEAD
     * @throws Exception Se il file non esiste o non è leggibile
=======
     * @throws \Exception Se il file non esiste o non è leggibile
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
     */
    public function execute(string $filePath): array
    {
        if (!file_exists($filePath)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
            throw new Exception("File di traduzione non trovato: {$filePath}");
        }

        if (!is_readable($filePath)) {
            throw new Exception("File di traduzione non leggibile: {$filePath}");
<<<<<<< HEAD
=======
=======
            throw new \Exception("File di traduzione non trovato: {$filePath}");
        }

        if (!is_readable($filePath)) {
            throw new \Exception("File di traduzione non leggibile: {$filePath}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        // Carica il file di traduzione
        $translations = require $filePath;

        if (!is_array($translations)) {
<<<<<<< HEAD
            throw new Exception("File di traduzione non valido: {$filePath}");
=======
<<<<<<< HEAD
            throw new Exception("File di traduzione non valido: {$filePath}");
=======
            throw new \Exception("File di traduzione non valido: {$filePath}");
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }
        /** @phpstan-ignore return.type */
        return $translations;
    }

    /**
     * Converte un array di traduzioni in formato PHP.
     *
     * @param array<string, mixed> $translations Traduzioni da convertire
     * @return string Codice PHP del file di traduzione
     */
    public function toPhp(array $translations): string
    {
        $content = "<?php\n\nreturn [\n";
        $content .= $this->arrayToPhp($translations, 1);
        $content .= "];\n";

        return $content;
    }

    /**
     * Converte un array in formato PHP con indentazione.
     *
     * @param array<string, mixed> $array Array da convertire
     * @param int $indent Livello di indentazione
     * @return string Codice PHP dell'array
     */
    private function arrayToPhp(array $array, int $indent = 0): string
    {
        $content = '';
        $indentStr = str_repeat('    ', $indent);

        foreach ($array as $key => $value) {
            $content .= $indentStr . "'" . addslashes($key) . "' => ";

            if (is_array($value)) {
                $content .= "[\n";
                /** @phpstan-ignore argument.type */
                $content .= $this->arrayToPhp($value, $indent + 1);
                $content .= $indentStr . "],\n";
            } else {
                /** @phpstan-ignore-next-line */
                $content .= "'" . addslashes((string) $value) . "',\n";
            }
        }

        return $content;
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
