<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
=======
use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

>>>>>>> b93ef594b4 (.)
=======
use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use function Safe\glob;

class GetAllTranslationAction
{
    use QueueableAction;

    /**
     * Restituisce il path completo del file di traduzione dato un key.
     */
    public function execute(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        $lang = session()->get('locale');
        if (is_string($lang) && in_array($lang, ['it', 'en'], strict: true)) {
            app()->setLocale($lang);
        }

        $lang = app()->getLocale();
        $path = base_path('Modules/*/lang/' . $lang . '/*.php');
        $files = glob($path);
        $files = Arr::map($files, function ($file) {
            $module_low = Str::of($file)
                ->between('Modules/', '/lang/')
                ->lower()
                ->toString();
            return [
                'key' => $module_low . '::' . basename($file, '.php'),
                'path' => $file,
<<<<<<< HEAD
=======
=======
        $lang=session()->get('locale');
        if(is_string($lang) && in_array($lang,['it','en'])){
=======
        $lang = session()->get('locale');
        if (is_string($lang) && in_array($lang, ['it', 'en'], strict: true)) {
>>>>>>> b93ef594b4 (.)
            app()->setLocale($lang);
        }

        $lang = app()->getLocale();
        $path = base_path('Modules/*/lang/' . $lang . '/*.php');
        $files = glob($path);
        $files = Arr::map($files, function ($file) {
            $module_low = Str::of($file)
                ->between('Modules/', '/lang/')
                ->lower()
                ->toString();
            return [
<<<<<<< HEAD
                'key'=>$module_low.'::'.basename($file,'.php'),
                'path'=>$file,
>>>>>>> a12f125f4a (.)
=======
                'key' => $module_low . '::' . basename($file, '.php'),
                'path' => $file,
>>>>>>> b93ef594b4 (.)
=======
        $lang=session()->get('locale');
        if(is_string($lang) && in_array($lang,['it','en'])){
            app()->setLocale($lang);
        }

        $lang=app()->getLocale();
        $path = base_path('Modules/*/lang/'.$lang.'/*.php');
        $files=glob($path);
        $files=Arr::map($files,function($file){
            $module_low=Str::of($file)->between('Modules/','/lang/')->lower()->toString();
            return [
                'key'=>$module_low.'::'.basename($file,'.php'),
                'path'=>$file,
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            ];
        });
        return $files;
    }
}
