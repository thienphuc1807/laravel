<?php

namespace App\Policies;

use App\Models\Players;
use App\Models\User;
use Illuminate\Auth\Access\Response;


// Step 6: Policies (do the samething like gates)
class PlayerPolicy
{
    public function edit(User $user, Players $player): bool
    {
        return $player->user->is($user);
    }
}
