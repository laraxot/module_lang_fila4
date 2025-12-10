<?php

declare(strict_types=1);

namespace Modules\Lang\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Translation;

/**
<<<<<<< HEAD
 * @extends Factory<Translation>
=======
<<<<<<< HEAD
 * @extends Factory<Translation>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Lang\Models\Translation>
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
 */
class TranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Translation>
     */
    protected $model = Translation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(5),
            'lang' => fake()->word,
            'value' => fake()->text,
            'created_at' => fake()->dateTime,
            'updated_at' => fake()->dateTime,
            'namespace' => fake()->word,
            'group' => fake()->word,
            'item' => fake()->word,
        ];
    }
}
