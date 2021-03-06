<?php

namespace App\Policies;

use App\Models\ {User, Joined};

class JoinedPolicy extends Policy
{
    /**
     * Determine whether the user can manage the comment.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Joined $joined
     * @return mixed
     */
    public function manage(User $user, Joined $card)
    {
        return $user->id === $card->user_id;
    }
}
