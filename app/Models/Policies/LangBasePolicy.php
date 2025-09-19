<?php

declare(strict_types=1);

namespace Modules\Lang\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 8b0b6ac (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 1c4a063 (.)
use Modules\Xot\Datas\XotData;

abstract class LangBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    public function before(UserContract $user, string $_ability): null|bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
<<<<<<< HEAD
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
            return true;
        }

        return null;
    }
}
