<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per la traduzione di elementi di una collezione.
 */
class TransArrayAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> 8b0b6ac (.)
=======
    public null|string $transKey;
>>>>>>> 1c4a063 (.)

    /**
     * Esegue la traduzione di una collezione.
     *
     * @return array<int|string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    public function execute(array $array, null|string $transKey): array
    {
        if (null === $transKey) {
            return Arr::map($array, SafeStringCastAction::cast(...));
<<<<<<< HEAD
=======
    public function execute(
        array $array,
        ?string $transKey,
    ): array {
        if (null === $transKey) {
            return Arr::map($array, fn (mixed $item): string => SafeStringCastAction::cast($item));
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
<<<<<<< HEAD
        return Arr::map($array, $this->trans(...));
=======
        return Arr::map($array, fn (mixed $item): string => $this->trans($item));
>>>>>>> 8b0b6ac (.)
=======
        return Arr::map($array, $this->trans(...));
>>>>>>> 1c4a063 (.)
    }

    /**
     * Traduce un singolo elemento.
     *
     * @param mixed $item L'elemento da tradurre
     *
     * @return string L'elemento tradotto o l'elemento originale se la traduzione non esiste
     */
    public function trans(mixed $item): string
    {
        // Converte l'item in stringa se non lo è già
<<<<<<< HEAD
<<<<<<< HEAD
        if (!\is_string($item)) {
=======
        if (! \is_string($item)) {
>>>>>>> 8b0b6ac (.)
=======
        if (!\is_string($item)) {
>>>>>>> 1c4a063 (.)
            $item = SafeStringCastAction::cast($item);
        }

        if (empty($item) || null === $this->transKey) {
            return $item;
        }

        // Prima prova la traduzione diretta
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item . '.label';
=======
        $key = $this->transKey.'.'.$item.'.label';
>>>>>>> 8b0b6ac (.)
=======
        $key = $this->transKey . '.' . $item . '.label';
>>>>>>> 1c4a063 (.)

        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
<<<<<<< HEAD
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> 8b0b6ac (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> 1c4a063 (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
