<?php

declare(strict_types=1);

namespace Modules\Lang\Datas;

<<<<<<< HEAD
use Exception;
use Modules\Xot\Actions\File\FixPathAction;
=======
<<<<<<< HEAD
use Exception;
use Modules\Xot\Actions\File\FixPathAction;
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
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
    public null|string $filename = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $filename = null;
=======
    public ?string $filename=null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $filename = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $filename=null;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    // public string $key;
    public int|string|null $value = null;

    public function getFilename(): string
    {
<<<<<<< HEAD
        if ($this->filename !== null) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->filename !== null) {
=======
        if($this->filename!=null){
>>>>>>> a12f125f4a (.)
=======
        if ($this->filename !== null) {
>>>>>>> b93ef594b4 (.)
=======
        if($this->filename!=null){
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            return $this->filename;
        }
        $hints = app('translator')->getLoader()->namespaces();
        $path = collect($hints)->get($this->namespace);
        if (null === $path) {
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        // Verifichiamo che $path sia una stringa
        Assert::string($path, 'Il percorso del namespace deve essere una stringa');

<<<<<<< HEAD
        $this->filename = app(FixPathAction::class)
            ->execute($path . '/' . $this->lang . '/' . $this->group . '.php');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->filename = app(FixPathAction::class)
            ->execute($path . '/' . $this->lang . '/' . $this->group . '.php');
=======
        $this->filename= app(FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');
>>>>>>> a12f125f4a (.)
=======
        $this->filename = app(FixPathAction::class)
            ->execute($path . '/' . $this->lang . '/' . $this->group . '.php');
>>>>>>> b93ef594b4 (.)
=======
        $this->filename= app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$this->lang.'/'.$this->group.'.php');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
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
        if (!is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($data)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($data)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        if (! is_array($data)) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        return $data;
    }
}
