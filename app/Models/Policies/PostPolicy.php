<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Modules\Lang\Models\Post;
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

class PostPolicy extends LangBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
>>>>>>> b93ef594b4 (.)
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.viewAny');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.view');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function view(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.view');
=======
    public function view(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function view(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.view');
>>>>>>> b93ef594b4 (.)
=======
    public function view(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.view');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('post.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
>>>>>>> b93ef594b4 (.)
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('post.create');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.update');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.update');
=======
    public function update(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function update(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.update');
>>>>>>> b93ef594b4 (.)
=======
    public function update(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.update');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.delete');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function delete(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.delete');
=======
    public function delete(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function delete(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.delete');
>>>>>>> b93ef594b4 (.)
=======
    public function delete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.delete');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.restore');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function restore(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.restore');
=======
    public function restore(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function restore(UserContract $user, Post $_post): bool
    {
        return $user->hasPermissionTo('post.restore');
>>>>>>> b93ef594b4 (.)
=======
    public function restore(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.restore');
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
    public function forceDelete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete');
=======
    public function forceDelete(ProfileContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete'); /** @phpstan-ignore method.nonObject */
>>>>>>> a12f125f4a (.)
=======
    public function forceDelete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete');
>>>>>>> b93ef594b4 (.)
    }
}
=======
>>>>>>> a7ee0d6 (.)
    public function forceDelete(UserContract $user, Post $post): bool
    {
        return $user->hasPermissionTo('post.forceDelete');
    }
}
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
