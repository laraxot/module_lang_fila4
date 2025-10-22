<?php

declare(strict_types=1);

namespace Modules\Lang\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Lang\Providers\LangServiceProvider;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Lang\Providers\LangServiceProvider;
=======
use Modules\Lang\Providers\LangServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Foundation\Application;
use Modules\Lang\Providers\LangServiceProvider;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Xot\Tests\CreatesApplication;

/**
 * Base test case for Lang module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Lang module specific configurations
        $this->loadLaravelMigrations();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Seed any required data for Lang tests
        $this->artisan('module:seed', ['module' => 'Lang']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param Application $app
=======
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
<<<<<<< HEAD
            LangServiceProvider::class,
=======
<<<<<<< HEAD
            LangServiceProvider::class,
=======
            \Modules\Lang\Providers\LangServiceProvider::class,
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        ];
    }
}
