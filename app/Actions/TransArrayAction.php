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
    public null|string $transKey;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $transKey;
=======
    public ?string $transKey;
>>>>>>> a12f125f4a (.)
=======
    public null|string $transKey;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $transKey;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    /**
     * Esegue la traduzione di una collezione.
     *
     * @return array<int|string, string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    public function execute(array $array, null|string $transKey): array
    {
        if (null === $transKey) {
            return Arr::map($array, SafeStringCastAction::cast(...));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function execute(
        array $array,
        ?string $transKey,
    ): array {
        if (null === $transKey) {
            return Arr::map($array, fn (mixed $item): string => SafeStringCastAction::cast($item));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(array $array, null|string $transKey): array
    {
        if (null === $transKey) {
            return Arr::map($array, SafeStringCastAction::cast(...));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        $this->transKey = $transKey;

<<<<<<< HEAD
        return Arr::map($array, $this->trans(...));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return Arr::map($array, $this->trans(...));
=======
        return Arr::map($array, fn (mixed $item): string => $this->trans($item));
>>>>>>> a12f125f4a (.)
=======
        return Arr::map($array, $this->trans(...));
>>>>>>> b93ef594b4 (.)
=======
        return Arr::map($array, fn (mixed $item): string => $this->trans($item));
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
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
        if (!\is_string($item)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!\is_string($item)) {
=======
        if (! \is_string($item)) {
>>>>>>> a12f125f4a (.)
=======
        if (!\is_string($item)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! \is_string($item)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            $item = SafeStringCastAction::cast($item);
        }

        if (empty($item) || null === $this->transKey) {
            return $item;
        }

        // Prima prova la traduzione diretta
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item . '.label';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $key = $this->transKey . '.' . $item . '.label';
=======
        $key = $this->transKey.'.'.$item.'.label';
>>>>>>> a12f125f4a (.)
=======
        $key = $this->transKey . '.' . $item . '.label';
>>>>>>> b93ef594b4 (.)
=======
        $key = $this->transKey.'.'.$item.'.label';
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

        $trans = trans($key);

        // Se la traduzione esiste ed è una stringa, la restituisce
        if ($trans !== $key && \is_string($trans)) {
            return $trans;
        }

        // Seconda prova: sostituisce i punti con underscore
        $itemWithUnderscore = str_replace('.', '_', $item);
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> a12f125f4a (.)
=======
        $keyWithUnderscore = $this->transKey . '.' . $itemWithUnderscore;
>>>>>>> b93ef594b4 (.)
=======
        $keyWithUnderscore = $this->transKey.'.'.$itemWithUnderscore;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $transWithUnderscore = trans($keyWithUnderscore);

        // Se la traduzione con underscore esiste ed è una stringa, la restituisce
        if ($transWithUnderscore !== $keyWithUnderscore && \is_string($transWithUnderscore)) {
            return $transWithUnderscore;
        }

        // Se nessuna traduzione è stata trovata, restituisce l'elemento originale
        return $item;
    }
}
