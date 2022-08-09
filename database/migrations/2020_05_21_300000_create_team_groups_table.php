<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('teams.tables.team_groups', 'team_groups'), function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid(config('teams.foreign_keys.team_id', 'team_id'))->constrained()->cascadeOnDelete();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('teams.tables.team_groups', 'team_groups'));
    }
}
