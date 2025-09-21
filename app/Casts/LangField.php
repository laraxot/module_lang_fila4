<?php

declare(strict_types=1);

namespace Modules\Lang\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Modules\Lang\Models\BaseModelLang;

class LangField implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param BaseModelLang $model
     * @param string        $key
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
     * @param mixed         $_value
     * @param array         $_attributes
     */
    public function get($model, $key, $_value, $_attributes)
<<<<<<< HEAD
=======
=======
     * @param array         $attributes
     */
    public function get($model, $key, $value, $attributes)
>>>>>>> a12f125f4a (.)
=======
     * @param mixed         $_value
     * @param array         $_attributes
     */
    public function get($model, $key, $_value, $_attributes)
>>>>>>> b93ef594b4 (.)
=======
     * @param array         $attributes
     */
    public function get($model, $key, $value, $attributes)
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    {
        return $model->post->{$key};
    }

    /**
     * Prepare the given value for storage.
     *
     * @param BaseModelLang $model
     * @param string        $key
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
     * @param mixed         $value
     * @param array         $_attributes
     */
    public function set($model, $key, $value, $_attributes): array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * @param array         $attributes
     * @param string        $key
     * @param string        $value
     */
    public function set($model, $key, $value, $attributes): array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * @param mixed         $value
     * @param array         $_attributes
     */
    public function set($model, $key, $value, $_attributes): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    {
        $post = $model->post;
        $post->{$key} = $value;
        tap($post)->save();

        // parent::__construct([]);
        // return [$key => encrypt($value)];
        // return ['created_by' => 'xot'];
        return []; // tolgo l'aggiornamento di questo campo
    }
}
