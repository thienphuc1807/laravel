<?php

namespace App\Policies;

use App\Models\Players;
use App\Models\User;
use Illuminate\Auth\Access\Response;

// Step 6: Policies (do the samething like gates)
class PlayersPolicy
{
    public function edit(User $user, Players $player)
    {
        return $player->user->is($user);
    }
}
