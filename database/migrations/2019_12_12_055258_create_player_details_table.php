<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_details', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->integer('form');
            $table->integer('chance_of_playing_next_round')->nullable();
            $table->integer('chance_of_playing_this_round')->nullable();
            $table->integer('code');
            $table->integer('cost_change_event');
            $table->integer('cost_change_event_fall');
            $table->integer('cost_change_start');
            $table->integer('cost_change_start_fall');
            $table->integer('dreamteam_count');
            $table->integer('element_type');
            $table->integer('ep_next');
            $table->integer('ep_this');
            $table->integer('event_points');
            $table->string('in_dreamteam');
            $table->string('news');
            $table->string('news_added')->nullable();
            $table->integer('now_cost');
            $table->string('photo');
            $table->integer('points_per_game');
            $table->integer('selected_by_percent');
            $table->string('special');
            $table->string('squad_number')->nullable();
            $table->string('status');
            $table->integer('team');
            $table->integer('team_code');
            $table->integer('total_points');
            $table->integer('transfers_in');
            $table->integer('transfers_in_event');
            $table->integer('transfers_out');
            $table->integer('transfers_out_event');
            $table->float('value_form' , 10, 1);
            $table->float('value_season' , 10, 1);
            $table->string('web_name');
            $table->integer('minutes');
            $table->integer('goals_scored');
            $table->integer('assists');
            $table->integer('clean_sheets');
            $table->integer('goals_conceded');
            $table->integer('own_goals');
            $table->integer('penalties_saved');
            $table->integer('penalties_missed');
            $table->integer('yellow_cards');
            $table->integer('red_cards');
            $table->integer('saves');
            $table->integer('bonus');
            $table->integer('bps');
            $table->float('influence', 10, 2);
            $table->float('creativity', 10, 2);
            $table->float('threat', 5, 2);
            $table->float('ict_index' , 5, 2);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_details');
    }
}
