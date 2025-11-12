<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\TranslationFile;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

class TranslationFilePolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
=======
    public function view(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
=======
    public function update(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
=======
    public function delete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
=======
    public function restore(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
=======
    public function forceDelete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> a7ee0d6 (.)
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
