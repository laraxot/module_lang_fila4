<?php

declare(strict_types=1);

namespace Modules\Lang\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Modules\Lang\Models\BaseModelLang;

class LangField implements CastsAttributes
{
    /**
     * Cast the given value.
     */
    public function get(BaseModelLang $model, string $key, mixed $_value, array $_attributes)
    {
        return $model->post->{$key};
    }

    /**
     * Prepare the given value for storage.
     */
    public function set(BaseModelLang $model, string $key, mixed $value, array $_attributes): array
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
