<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\Translation;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 8b0b6ac (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 1c4a063 (.)

class TranslationPolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.viewAny');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.view');
=======
    public function view(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function view(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.view');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation.create');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.update');
=======
    public function update(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function update(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.update');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
=======
    public function delete(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function delete(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.delete');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
=======
    public function restore(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function restore(UserContract $user, Translation $_translation): bool
    {
        return $user->hasPermissionTo('translation.restore');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function forceDelete(UserContract $user, Translation $translation): bool
    {
        return $user->hasPermissionTo('translation.forceDelete');
>>>>>>> 1c4a063 (.)
    }
}
