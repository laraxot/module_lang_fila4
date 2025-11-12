<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\TranslationFile;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 8b0b6ac (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 1c4a063 (.)

class TranslationFilePolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.viewAny');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
=======
    public function view(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function view(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.view');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('translation_file.create');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
=======
    public function update(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function update(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.update');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
=======
    public function delete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function delete(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.delete');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
=======
    public function restore(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function restore(UserContract $user, TranslationFile $_translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.restore');
>>>>>>> 1c4a063 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
=======
    public function forceDelete(ProfileContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 8b0b6ac (.)
=======
    public function forceDelete(UserContract $user, TranslationFile $translation_file): bool
    {
        return $user->hasPermissionTo('translation_file.forceDelete');
>>>>>>> 1c4a063 (.)
    }
}
