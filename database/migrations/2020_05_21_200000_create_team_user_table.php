<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('teams.tables.team_user', 'team_user'), function (Blueprint $table) {
            $table->id();
            $table->foreignUuid(config('teams.foreign_keys.team_id', 'team_id'));
            $table->foreignUuid('user_id');
            $table->foreignId('role_id')->constrained('roles')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();

            $table->unique(['team_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('teams.tables.team_user', 'team_user'));
    }
}
