<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
namespace Modules\Lang\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Lang\Models\BaseModel;
<<<<<<< HEAD
=======
=======
namespace Modules\Lang\Tests\Unit\Models;

use Modules\Lang\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> origin/develop
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
    $this->baseModel = new class extends BaseModel {
<<<<<<< HEAD
=======
=======
namespace Modules\Lang\Tests\Unit\Models;

>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Lang\Models\BaseModel;
>>>>>>> a7ee0d6 (.)
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel {
=======
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel
    {
>>>>>>> a12f125f4a (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        protected $table = 'test_lang_table';
    };
});

test('base model extends eloquent model', function () {
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function () {
    expect($this->baseModel->getTable())->toBe('test_lang_table');
});

test('base model can be instantiated', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function () {
    expect($this->baseModel)->usesTimestamps()->toBeTrue();
});
