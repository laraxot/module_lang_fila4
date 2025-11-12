<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Lang\Datas\TranslationData;
use Modules\Xot\Actions\Array\SaveArrayAction;
use Spatie\QueueableAction\QueueableAction;

class PublishTranslationAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(TranslationData $translationData): void
    {
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
         * $hints=app('translator')->getLoader()->namespaces();
         * $path=collect($hints)->get($row->namespace);
         * if($path==null){
         * throw new Exception('['.__LINE__.']['.class_basename($this).']');
         * }
         * $filename=app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$row->lang.'/'.$row->group.'.php');
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        $filename = $translationData->getFilename();
        /*
         * $data=[];
         * if(File::exists($filename)){
         * $data=File::getRequire($filename);
         * }
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $hints=app('translator')->getLoader()->namespaces();
        $path=collect($hints)->get($row->namespace);
        if($path==null){
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }
        $filename=app(\Modules\Xot\Actions\File\FixPathAction::class)->execute($path.'/'.$row->lang.'/'.$row->group.'.php');
        */
        $filename = $translationData->getFilename();
        /*
        $data=[];
        if(File::exists($filename)){
            $data=File::getRequire($filename);
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $filename = $translationData->getFilename();
        /*
         * $data=[];
         * if(File::exists($filename)){
         * $data=File::getRequire($filename);
         * }
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        $data = $translationData->getData();
        $data_up = $data;
        Arr::set($data_up, $translationData->item, $translationData->value);
        if ($data !== $data_up) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
            app(SaveArrayAction::class)->execute(
                data: $data_up,
                filename: $filename,
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            app(SaveArrayAction::class)->execute(data: $data_up, filename: $filename);
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            app(SaveArrayAction::class)->execute(data: $data_up, filename: $filename);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }
    }
}
