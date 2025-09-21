<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
use Exception;
=======
<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Xot\Actions\Array\SaveArrayAction;
use Spatie\QueueableAction\QueueableAction;

class SaveTransAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
    public function execute(string $key, int|string|array|Htmlable|null $data): void
=======
<<<<<<< HEAD
    public function execute(string $key, int|string|array|Htmlable|null $data): void
=======
    public function execute(string $key, int|string|array|\Illuminate\Contracts\Support\Htmlable|null $data): void
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    {
        $cont = [];

        $filename = app(GetTransPathAction::class)->execute($key);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        if (!File::exists($filename)) {
            app(SaveArrayAction::class)->execute(
                data: $cont,
                filename: $filename,
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (! File::exists($filename)) {
            app(SaveArrayAction::class)->execute(data: $cont, filename: $filename);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (! File::exists($filename)) {
            app(SaveArrayAction::class)->execute(data: $cont, filename: $filename);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        try {
            $cont = File::getRequire($filename);
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            dddx([
                'key' => $key,
                'data' => $data,
                'filename' => $filename,
                'message' => $e->getMessage(),
            ]);
        }

<<<<<<< HEAD
        if (!is_array($cont)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($cont)) {
=======
        if (! is_array($cont)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($cont)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! is_array($cont)) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            $cont = [];
        }

        $piece = implode('.', array_slice(explode('.', $key), 1));
        if ('' !== $piece) {
            Arr::set($cont, $piece, $data);
        } else {
            $cont = $data;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        if (!is_array($cont)) {
            throw new Exception('Error in SaveTransAction');
        }

        app(SaveArrayAction::class)->execute(
            data: $cont,
            filename: $filename,
        );
<<<<<<< HEAD
=======
=======
        if (! is_array($cont)) {
            throw new Exception('Error in SaveTransAction');
        }

        app(SaveArrayAction::class)->execute(data: $cont, filename: $filename);
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($cont)) {
            throw new Exception('Error in SaveTransAction');
        }

        app(SaveArrayAction::class)->execute(
            data: $cont,
            filename: $filename,
        );
>>>>>>> b93ef594b4 (.)
=======
        if (! is_array($cont)) {
            throw new \Exception('Error in SaveTransAction');
        }

        app(SaveArrayAction::class)->execute(data: $cont, filename: $filename);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }
}
