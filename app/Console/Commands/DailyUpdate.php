<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\PlayerDetail;
use App\Teams;
use App\ElementType;

class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an daily cron job to jason file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        PlayerDetail::truncate();
        Teams::truncate();
        ElementType::truncate();

        $str = file_get_contents('https://fantasy.premierleague.com/api/bootstrap-static/');

        $json = json_decode($str, true);


        $json['events'][0]['id'];

        $count = count($json['elements']);
     
       
        for($i = 0; $i < $count; $i++) {

            $data = array(
                'first_name' => $json['elements'][$i]['first_name'],
                'second_name'      => $json['elements'][$i]['second_name'],
                'form'      => $json['elements'][$i]['form'],
                'chance_of_playing_next_round'      => $json['elements'][$i]['chance_of_playing_next_round'],
                'chance_of_playing_this_round'      => $json['elements'][$i]['chance_of_playing_this_round'],
                'code'      => $json['elements'][$i]['code'],
                'cost_change_event'      => $json['elements'][$i]['cost_change_event'],
                'cost_change_event_fall'      => $json['elements'][$i]['cost_change_event_fall'],
                'cost_change_start'      => $json['elements'][$i]['cost_change_start'],
                'cost_change_start_fall'      => $json['elements'][$i]['cost_change_start_fall'],
                'dreamteam_count'      => $json['elements'][$i]['dreamteam_count'],
                'element_type'      => $json['elements'][$i]['element_type'],
                'ep_next'      => $json['elements'][$i]['ep_next'],
                'ep_this'      => $json['elements'][$i]['ep_this'],
                'event_points'      => $json['elements'][$i]['event_points'],
                'in_dreamteam'      => $json['elements'][$i]['in_dreamteam'],
                'news'      => $json['elements'][$i]['news'],
                'news_added'      => $json['elements'][$i]['news_added'],
                'now_cost'      => $json['elements'][$i]['now_cost'],
                'photo'      => $json['elements'][$i]['photo'],
                'points_per_game'      => $json['elements'][$i]['points_per_game'],
                'selected_by_percent'      => $json['elements'][$i]['selected_by_percent'],
                'special'      => $json['elements'][$i]['special'],
                'squad_number'      => $json['elements'][$i]['squad_number'],
                'status'      => $json['elements'][$i]['status'],
                'team'      => $json['elements'][$i]['team'],
                'team_code'      => $json['elements'][$i]['team_code'],
                'total_points'      => $json['elements'][$i]['total_points'],
                'transfers_in'      => $json['elements'][$i]['transfers_in'],
                'transfers_in_event'      => $json['elements'][$i]['transfers_in_event'],
                'transfers_out'      => $json['elements'][$i]['transfers_out'],
                'transfers_out_event'      => $json['elements'][$i]['transfers_out_event'],
                'value_form'      => $json['elements'][$i]['value_form'],
                'value_season'      => $json['elements'][$i]['value_season'],
                'web_name'      => $json['elements'][$i]['web_name'],
                'minutes'      => $json['elements'][$i]['minutes'],
                'goals_scored'      => $json['elements'][$i]['goals_scored'],
                'assists'      => $json['elements'][$i]['assists'],
                'clean_sheets'      => $json['elements'][$i]['clean_sheets'],
                'goals_conceded'      => $json['elements'][$i]['goals_conceded'],
                'own_goals'      => $json['elements'][$i]['own_goals'],
                'penalties_saved'      => $json['elements'][$i]['penalties_saved'],
                'penalties_missed'      => $json['elements'][$i]['penalties_missed'],
                'yellow_cards'      => $json['elements'][$i]['yellow_cards'],
                'red_cards'      => $json['elements'][$i]['red_cards'],
                'saves'      => $json['elements'][$i]['saves'],
                'bonus'      => $json['elements'][$i]['bonus'],
                'bps'      => $json['elements'][$i]['bps'],
                'influence'      => $json['elements'][$i]['influence'],
                'creativity'      => $json['elements'][$i]['creativity'],
                'threat'      => $json['elements'][$i]['threat'],
                'ict_index'      => $json['elements'][$i]['ict_index'],
                    
                );

             PlayerDetail::insert($data);   
             

        }


        $count1 = count($json['teams']);

        for($i = 0; $i < $count1; $i++) {

            $data1 = array(

                'code' => $json['teams'][$i]['code'],
                'name' => $json['teams'][$i]['name'],
                'short_name' => $json['teams'][$i]['short_name'],


            );

            Teams::insert($data1);   

        }    

        
        $count2 = count($json['element_types']);

        for($i = 0; $i < $count2; $i++) {

            $data2 = array(

                'singular_name' => $json['element_types'][$i]['singular_name'],
                

            );

            ElementType::insert($data2);   

        }

        $this->info('Daily Update has been send successfully');
        
    }
}
