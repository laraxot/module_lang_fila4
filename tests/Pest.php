<?php

declare(strict_types=1);

use Modules\Lang\Models\Translation;
use Modules\Lang\Models\Language;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
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
use Modules\Lang\Models\Post;
use Modules\Lang\Models\TranslationFile;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
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

uses(
    TestCase::class,
    DatabaseTransactions::class, // ✅ CORRETTO - Rollback automatico
    WithFaker::class,
)->in('Feature', 'Unit');

uses()->group('lang')->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| Here you may define your custom expectations to be used in your tests.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

expect()->extend('toBeTranslation', function () {
    return $this->toBeInstanceOf(Translation::class);
});

expect()->extend('toBeLanguage', function () {
    return $this->toBeInstanceOf(Language::class);
});

expect()->extend('toBePost', function () {
    return $this->toBeInstanceOf(Post::class);
});

expect()->extend('toHaveTranslationKey', function (string $key) {
    return expect($this->value->hasTranslationKey($key))->toBeTrue();
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Here you may define your custom helper functions to be used in your tests.
|
*/

function createLangTranslation(array $attributes = []): Translation
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
{
    return Translation::factory()->create($attributes);
}

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
function makeTranslation(array $attributes = []): Translation
{
    return Translation::factory()->make($attributes);
}

function createLanguage(array $attributes = []): Language
<<<<<<< HEAD
=======
function createLangTranslationFile(array $attributes = []): TranslationFile
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
{
    return Language::factory()->create($attributes);
}

<<<<<<< HEAD
<<<<<<< HEAD
function makeLanguage(array $attributes = []): Language
{
    return Language::factory()->make($attributes);
=======
function createLangPost(array $attributes = []): Post
{
    return Post::factory()->create($attributes);
>>>>>>> 8b0b6ac (.)
=======
function makeLanguage(array $attributes = []): Language
{
    return Language::factory()->make($attributes);
>>>>>>> 1c4a063 (.)
}
