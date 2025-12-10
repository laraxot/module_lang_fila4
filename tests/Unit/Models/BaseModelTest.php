<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Lang\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Lang\Models\BaseModel;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->baseModel = new class() extends BaseModel
    {
=======
    $this->baseModel = new class extends BaseModel {
<<<<<<< HEAD
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\BaseModel;

beforeEach(function () {
    $this->baseModel = new class extends BaseModel
    {
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
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
