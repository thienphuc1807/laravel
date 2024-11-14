<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Schema::create('club_players', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(\App\Models\Club::class)->constrained()->cascadeOnDelete();
        //     $table->foreignIdFor(\App\Models\Players::class)->constrained()->cascadeOnDelete();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
        // Schema::dropIfExists('club_players');
    }
};
