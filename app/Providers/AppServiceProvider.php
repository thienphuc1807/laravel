<?php

namespace App\Providers;

use App\Models\Players;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();
        // Paginator::useBootstrapFive();
        // Step 3: Define Gates Inside AppServiceProvider
        // Gate::define('edit-player', function (User $user, Players $player) {
        //     return $player->user->is($user);
        // });
    }
}
