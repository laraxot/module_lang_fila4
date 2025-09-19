<?php

declare(strict_types=1);

namespace Modules\Lang\Datas;

use Exception;
use Modules\Xot\Actions\File\FixPathAction;
use Illuminate\Support\Facades\File;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class TranslationData extends Data
{
    // public string $id
    public string $lang;

    public string $namespace;

    public string $group;

    public string $item;

<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $filename = null;
=======
    public ?string $filename=null;
>>>>>>> 8b0b6ac (.)
=======
    public null|string $filename = null;
>>>>>>> 1c4a063 (.)

    // public string $key;
    public int|string|null $value = null;

    public function getFilename(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->filename !== null) {
=======
        if($this->filename!=null){
>>>>>>> 8b0b6ac (.)
=======
        if ($this->filename !== null) {
>>>>>>> 1c4a063 (.)
            return $this->filename;
        }
        $hints = app('translator')->getLoader()->namespaces();
        $path = collect($hints)->get($this->namespace);
        if (null === $path) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> 8b0b6ac (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 1c4a063 (.)
        }

        // Verifichiamo che $path sia una stringa
        Assert::string($path, 'Il percorso del namespace deve essere una stringa');

<<<<<<< HEAD
<<<<<<< HEAD
        $this->filename = app(FixPathAction::class)
            ->execute($path . '/' . $this->lang . '/' . $this->group . '.php');
=======
        $this->filename= app(FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');
>>>>>>> 8b0b6ac (.)
=======
        $this->filename = app(FixPathAction::class)
            ->execute($path . '/' . $this->lang . '/' . $this->group . '.php');
>>>>>>> 1c4a063 (.)
        return $this->filename;
    }

    public function getData(): array
    {
        $filename = $this->getFilename();
        $data = [];
        if (File::exists($filename)) {
            $data = File::getRequire($filename);
        }
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($data)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> 8b0b6ac (.)
=======
        if (!is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 1c4a063 (.)
        }

        return $data;
    }
}
