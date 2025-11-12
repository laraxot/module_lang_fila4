<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\Translation;
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

class TranslationPolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.view');
=======
    public function view(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.view');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.update');
=======
    public function update(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.update');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
=======
    public function delete(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
=======
    public function restore(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
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
    public function forceDelete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> a7ee0d6 (.)
    public function forceDelete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
