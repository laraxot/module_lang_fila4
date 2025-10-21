<?php

declare(strict_types=1);

namespace Modules\Lang\Models;

/**
 * Base MorphPivot for Lang module.
 *
 * Extends XotBaseMorphPivot which provides all standard properties and casts.
 *
 * @see \Modules\Xot\Models\XotBaseMorphPivot
 */
abstract class BaseMorphPivot extends \Modules\Xot\Models\XotBaseMorphPivot
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'lang';
}
