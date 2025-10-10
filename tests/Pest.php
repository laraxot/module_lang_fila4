<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Lang\Models\Translation;
use Modules\Lang\Models\Language;
=======
<<<<<<< HEAD
use Modules\Lang\Models\Translation;
use Modules\Lang\Models\Language;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
use Modules\Lang\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

expect()->extend('toBeTranslation', fn() => $this->toBeInstanceOf(Translation::class));

expect()->extend('toBeLanguage', fn() => $this->toBeInstanceOf(Language::class));

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
 */

function createTranslation(array $attributes = []): Translation
<<<<<<< HEAD
=======
=======
use Modules\Lang\Models\Post;
use Modules\Lang\Models\TranslationFile;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
=======
>>>>>>> b93ef594b4 (.)
use Modules\Lang\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

expect()->extend('toBeTranslation', fn() => $this->toBeInstanceOf(Translation::class));

expect()->extend('toBeLanguage', fn() => $this->toBeInstanceOf(Language::class));

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
 */

<<<<<<< HEAD
function createLangTranslation(array $attributes = []): Translation
>>>>>>> a12f125f4a (.)
=======
function createTranslation(array $attributes = []): Translation
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
{
    return Translation::factory()->create($attributes);
}

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
function makeTranslation(array $attributes = []): Translation
{
    return Translation::factory()->make($attributes);
}

function createLanguage(array $attributes = []): Language
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
function createLangTranslationFile(array $attributes = []): TranslationFile
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
{
    return Language::factory()->create($attributes);
}

<<<<<<< HEAD
function makeLanguage(array $attributes = []): Language
{
    return Language::factory()->make($attributes);
=======
<<<<<<< HEAD
<<<<<<< HEAD
function makeLanguage(array $attributes = []): Language
{
    return Language::factory()->make($attributes);
=======
function createLangPost(array $attributes = []): Post
{
    return Post::factory()->create($attributes);
>>>>>>> a12f125f4a (.)
=======
function makeLanguage(array $attributes = []): Language
{
    return Language::factory()->make($attributes);
>>>>>>> b93ef594b4 (.)
=======
use Modules\Lang\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

pest()->extend(TestCase::class)
    ->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeTranslation', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\Translation::class);
});

expect()->extend('toBeLanguage', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\Language::class);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function createTranslation(array $attributes = []): \Modules\Lang\Models\Translation
{
    return \Modules\Lang\Models\Translation::factory()->create($attributes);
}

function makeTranslation(array $attributes = []): \Modules\Lang\Models\Translation
{
    return \Modules\Lang\Models\Translation::factory()->make($attributes);
}

function createLanguage(array $attributes = []): \Modules\Lang\Models\Language
{
    return \Modules\Lang\Models\Language::factory()->create($attributes);
}

function makeLanguage(array $attributes = []): \Modules\Lang\Models\Language
{
    return \Modules\Lang\Models\Language::factory()->make($attributes);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
}
