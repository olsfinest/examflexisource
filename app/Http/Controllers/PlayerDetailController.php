<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerDetail;
use App\Teams;
use DB;

class PlayerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $playerdetail = DB::select('SELECT player_details.id , player_details.first_name , player_details.second_name , player_details.form , player_details.chance_of_playing_next_round , player_details.chance_of_playing_this_round , player_details.code , player_details.cost_change_event , player_details.cost_change_event_fall , player_details.cost_change_start , player_details.cost_change_start_fall , player_details.dreamteam_count , player_details.element_type , player_details.ep_next , player_details.ep_this , player_details.event_points , player_details.in_dreamteam , player_details.news , player_details.news_added , player_details.now_cost , player_details.photo ,  player_details.points_per_game , player_details.selected_by_percent , player_details.special ,  player_details.squad_number , player_details.status ,  player_details.team ,   player_details.team_code ,  player_details.total_points , player_details.transfers_in , player_details.transfers_in_event ,  player_details.transfers_out , player_details.transfers_out_event , player_details.value_form , player_details.value_season ,  player_details.web_name , player_details.minutes , player_details.goals_scored , player_details.assists , player_details.clean_sheets , player_details.goals_conceded ,  player_details.own_goals ,  player_details.penalties_saved , player_details.penalties_missed , player_details.yellow_cards , player_details.red_cards , player_details.saves  , player_details.bonus , player_details.bps , player_details.influence , player_details.creativity , player_details.threat , player_details.ict_index , teams.name , element_types.singular_name
        FROM player_details
        LEFT JOIN teams ON player_details.team_code = teams.code
        
        LEFT JOIN element_types ON element_types.id = player_details.element_type');
   
 
        
        return response()->json(

            [
                'playerdetails' => $playerdetail,

            ] 

        );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
