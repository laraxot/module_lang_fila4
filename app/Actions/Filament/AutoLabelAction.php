<?php

declare(strict_types=1);

namespace Modules\Lang\Actions\Filament;

<<<<<<< HEAD
use Exception;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Section;
=======
<<<<<<< HEAD
use Exception;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Section;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Support\Arr;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Actions\GetTransKeyAction;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use ReflectionClass;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Support\Arr;
use Illuminate\Support\HtmlString;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Actions\GetTransKeyAction;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use ReflectionClass;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
use Filament\Tables\Columns\Column;
use Filament\Forms\Components\Field;
use Filament\Tables\Filters\BaseFilter;
use Modules\Lang\Actions\SaveTransAction;
use Filament\Forms\Components\Wizard\Step;
use Modules\Xot\Actions\GetTransKeyAction;
use Spatie\QueueableAction\QueueableAction;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Forms\Components\Section as FormsSection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

class AutoLabelAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
     * @param Field|BaseFilter|Column|Step|Action|Action|Section $component
     *
     * @return Field|BaseFilter|Column|Step|Action|Action|Section
     */
    public function execute($component, string $type = 'label')
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) use ($component) {
            if ($item['function'] === 'execute') {
                return false;
            }

            if (
                isset($item['object']) &&
                    Str::startsWith($item['object']::class, 'Modules\\') &&
                    $item['object'] !== $component
            ) {
                return true;
            }

            if (isset($item['class']) && Str::startsWith($item['class'], 'Modules\\')) {
                $reflection_class = new ReflectionClass($item['class']);
                if (!$reflection_class->isAbstract()) {
                    return true;
                }
            }
            return false;
        });

        if (is_array($class)) {
            $object_class = null;
            if (isset($class['object'])) {
                $object_class = $class['object']::class;
            }
            if (isset($class['class']) && $object_class === null) {
                $object_class = $class['class'];
            }
            if (is_null($object_class)) {
<<<<<<< HEAD
                throw new Exception('No object class found');
=======
=======
     * @param Field|BaseFilter|Column|\Filament\Schemas\Components\Wizard\Step|Action|Action|\Filament\Schemas\Components\Section $component
=======
     * @param Field|BaseFilter|Column|Step|Action|Action|Section $component
>>>>>>> b93ef594b4 (.)
     *
     * @return Field|BaseFilter|Column|Step|Action|Action|Section
     */
    public function execute($component, string $type = 'label')
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) use ($component) {
            if ($item['function'] === 'execute') {
                return false;
            }

            if (
                isset($item['object']) &&
                    Str::startsWith($item['object']::class, 'Modules\\') &&
                    $item['object'] !== $component
            ) {
                return true;
            }

            if (isset($item['class']) && Str::startsWith($item['class'], 'Modules\\')) {
                $reflection_class = new ReflectionClass($item['class']);
                if (!$reflection_class->isAbstract()) {
                    return true;
                }
            }
            return false;
        });

        if (is_array($class)) {
            $object_class = null;
            if (isset($class['object'])) {
                $object_class = $class['object']::class;
            }
            if (isset($class['class']) && $object_class === null) {
                $object_class = $class['class'];
            }
<<<<<<< HEAD
            if(is_null($object_class)){
>>>>>>> a12f125f4a (.)
=======
            if (is_null($object_class)) {
>>>>>>> b93ef594b4 (.)
                throw new Exception('No object class found');
=======
     * @param Field|BaseFilter|Column|Step|Action|TableAction|FormsSection $component
     *
     * @return Field|BaseFilter|Column|Step|Action|TableAction|FormsSection
     */
    public function execute($component,string $type = 'label')
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) use($component){
            if($item['function'] == 'execute'){
                return false;
            }
            
           if(isset($item['object']) && Str::startsWith($item['object']::class, 'Modules\\') && $item['object'] != $component  ){
              return true;
            }

            if(isset($item['class']) && Str::startsWith($item['class'], 'Modules\\') ){
                $reflection_class = new ReflectionClass($item['class'] );
                if (!$reflection_class->isAbstract()) {
                    return true;
                }
                
            }
            return false;
        });
       
        if (is_array($class)) {
            $object_class = null;
            if(isset($class['object'])){
                $object_class = $class['object']::class;
            }
            if(isset($class['class']) && $object_class == null){
                $object_class = $class['class'];
            }
            if(is_null($object_class)){
                throw new \Exception('No object class found');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            }
            $trans_key = app(GetTransKeyAction::class)->execute($object_class);
        } else {
            $trans_key = 'lang::txt';
        }

        $label_tkey = null;
        $val = 'no-set-val';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key . '.steps.' . $val . '';
        }
        if ($label_tkey === null && $component instanceof Section) {
            $val = $component->getHeading();
            if ($val === null) {
                $val = 'empty';
            }
            if (!is_string($val)) {
                $val = app(SafeStringCastAction::class)->execute($val);
            }
            $label_tkey = $trans_key . '.sections.' . $val . '';
        }
        if ($label_tkey === null && method_exists($component, 'getName')) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key . '.fields.' . $val . '';
        }

        if ($component instanceof Action) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key . '.actions.' . $val . '';
        }

        /*
         * $component_parent=get_parent_class($component);
         * if(in_array($component_parent,['Filament\Forms\Components\Component'])){
         * $component_key=Str::of(class_basename($component))->plural()->snake()->toString();
         * }else{
         * $component_key=Str::of(class_basename($component_parent))->plural()->snake()->toString();
         * }
         *
         *
         * $val=null;
         * if(method_exists($component,'getLabel')){
         * $val=$component->getLabel();
         * }
         * if(method_exists($component,'getHeading')){
         * $val=$component->getHeading();
         * }
         * if(method_exists($component,'getName')){
         * $val=$component->getName();
         * }
         *
         * if(!in_array($component_key,['steps','fields'])){
         * dddx([
         * 'message'=>'preso',
         * 'component'=>$component,
         * 'parent'=>get_parent_class($component),
         * 'component_key'=>$component_key,
         * ]);
         * }
         *
         * $label_tkey = $trans_key.'.'.$component_key.'.'.$val.'';
         *
         */

        $label_key = $label_tkey . '.' . Str::snake($type);

        if (Str::startsWith($label_key, 'media::attachments_schema')) {
            dddx([
                'message' => 'preso',
                'label_key' => $label_key,
                'label_tkey' => $label_tkey,
                //'val'=>$val,
                'type' => $type,
                'component' => $component,
                'class' => $class,
                'backtrace' => $backtrace,
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key . '.steps.' . $val . '';
        }
        if ($label_tkey === null && $component instanceof Section) {
            $val = $component->getHeading();
            if ($val === null) {
                $val = 'empty';
            }
            if (!is_string($val)) {
                $val = app(SafeStringCastAction::class)->execute($val);
            }
            $label_tkey = $trans_key . '.sections.' . $val . '';
        }
        if ($label_tkey === null && method_exists($component, 'getName')) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key . '.fields.' . $val . '';
        }

        if ($component instanceof Action) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key . '.actions.' . $val . '';
        }

        /*
         * $component_parent=get_parent_class($component);
         * if(in_array($component_parent,['Filament\Forms\Components\Component'])){
         * $component_key=Str::of(class_basename($component))->plural()->snake()->toString();
         * }else{
         * $component_key=Str::of(class_basename($component_parent))->plural()->snake()->toString();
         * }
         *
         *
         * $val=null;
         * if(method_exists($component,'getLabel')){
         * $val=$component->getLabel();
         * }
         * if(method_exists($component,'getHeading')){
         * $val=$component->getHeading();
         * }
         * if(method_exists($component,'getName')){
         * $val=$component->getName();
         * }
         *
         * if(!in_array($component_key,['steps','fields'])){
         * dddx([
         * 'message'=>'preso',
         * 'component'=>$component,
         * 'parent'=>get_parent_class($component),
         * 'component_key'=>$component_key,
         * ]);
         * }
         *
         * $label_tkey = $trans_key.'.'.$component_key.'.'.$val.'';
         *
         */

        $label_key = $label_tkey . '.' . Str::snake($type);

        if (Str::startsWith($label_key, 'media::attachments_schema')) {
            dddx([
                'message' => 'preso',
                'label_key' => $label_key,
                'label_tkey' => $label_tkey,
                //'val'=>$val,
<<<<<<< HEAD
=======
        
        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key.'.steps.'.$val.'';
        } 
        if($label_tkey == null && $component instanceof FormsSection){
           
            $val = $component->getHeading();
            if($val==null){
                $val='empty';
            }
            if(!is_string($val)){
                $val=app(SafeStringCastAction::class)->execute($val);
            }
            $label_tkey = $trans_key.'.sections.'.$val.'';
            
        }
        if($label_tkey == null && method_exists($component,'getName')){
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.fields.'.$val.'';
        }

        if ($component instanceof Action ) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }
        
        /*
        $component_parent=get_parent_class($component);
        if(in_array($component_parent,['Filament\Forms\Components\Component'])){
            $component_key=Str::of(class_basename($component))->plural()->snake()->toString();
        }else{
            $component_key=Str::of(class_basename($component_parent))->plural()->snake()->toString();
        }
        
        
        $val=null;
        if(method_exists($component,'getLabel')){
            $val=$component->getLabel();
        }
        if(method_exists($component,'getHeading')){
            $val=$component->getHeading();
        }
        if(method_exists($component,'getName')){
            $val=$component->getName();
        }

        if(!in_array($component_key,['steps','fields'])){
            dddx([
                'message'=>'preso',
                'component'=>$component,
                'parent'=>get_parent_class($component),
                'component_key'=>$component_key,
            ]);
        }

        $label_tkey = $trans_key.'.'.$component_key.'.'.$val.'';
    
        */

        

        $label_key = $label_tkey.'.'.Str::snake($type);

        if(Str::startsWith($label_key,'media::attachments_schema')){
            dddx([
                'message'=>'preso',
                'label_key'=>$label_key,
                'label_tkey'=>$label_tkey,
                //'val'=>$val,
>>>>>>> origin/develop
                'type'=>$type,
                'component'=>$component,
                'class'=>$class,
                'backtrace'=>$backtrace,
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                'type' => $type,
                'component' => $component,
                'class' => $class,
                'backtrace' => $backtrace,
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            ]);
        }

        $label = trans($label_key);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        if (is_string($label) && $label_key === $label) { //se non esiste la traduzione, la salvo
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key !== $label) { //se esiste la traduzione, la aggiorno
            if (method_exists($component, $type)) {
                if (strip_tags($label) !== $label && in_array($type, ['helperText'], strict: true)) {
                    $component->{$type}(new HtmlString($label));
                } else {
<<<<<<< HEAD
=======
=======
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            
=======
        if (is_string($label) && $label_key === $label) { //se non esiste la traduzione, la salvo
>>>>>>> b93ef594b4 (.)
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key !== $label) { //se esiste la traduzione, la aggiorno
            if (method_exists($component, $type)) {
                if (strip_tags($label) !== $label && in_array($type, ['helperText'], strict: true)) {
                    $component->{$type}(new HtmlString($label));
<<<<<<< HEAD
                }else{
>>>>>>> a12f125f4a (.)
=======
                } else {
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
                    $component->{$type}($label);
                }
            }

            //if (method_exists($component, 'tooltip')) {
            //    $component->tooltip($label);
            //}
        }
        if (!is_string($label)) {
<<<<<<< HEAD
            $component->label('FIX:' . $label_key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $component->label('FIX:' . $label_key);
=======
            $component->label('FIX:'.$label_key);
>>>>>>> a12f125f4a (.)
=======
            $component->label('FIX:' . $label_key);
>>>>>>> b93ef594b4 (.)
=======
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key != $label) { //se esiste la traduzione, la aggiorno
            if (method_exists($component, $type)) {
                $component->{$type}($label);
            }
            
            if (method_exists($component, 'tooltip')) {
                $component->tooltip($label);
            }
        }
        if (!is_string($label)) {
            $component->label('FIX:'.$label_key);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        return $component;
    }
}
