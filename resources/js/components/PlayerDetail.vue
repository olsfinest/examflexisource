<template>
    <div class="container">
        <div class="row justify-content-center">
       
            <table class="table">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                     <tr v-for="playerdetail in playerdetails">   

                        <td>{{ playerdetail.id }}</td>

                        <td>{{ playerdetail.first_name }} {{ playerdetail.second_name }} </td>

                        <td><button @click="showplayerdetails(playerdetail.id , playerdetail.first_name , playerdetail.second_name , playerdetail.form , playerdetail.influence , playerdetail.creativity , playerdetail.threat , playerdetail.ict_index , playerdetail.total_points , playerdetail.chance_of_playing_next_round , playerdetail.chance_of_playing_this_round , playerdetail.code  , playerdetail.cost_change_event , playerdetail.cost_change_event_fall , playerdetail.cost_change_start , playerdetail.cost_change_start_fall , playerdetail.dreamteam_count  , playerdetail.element_type , playerdetail.ep_next , playerdetail.ep_this , playerdetail.event_points , playerdetail.in_dreamteam , playerdetail.news , playerdetail.news_added , playerdetail.now_cost , playerdetail.photo , playerdetail.points_per_game , playerdetail.selected_by_percent , playerdetail.special , playerdetail.squad_number , playerdetail.status , playerdetail.team , playerdetail.team_code  , playerdetail.transfers_in , playerdetail.transfers_in_event , playerdetail.transfers_out , playerdetail.transfers_out_event , playerdetail.value_form , playerdetail.value_season , playerdetail.web_name , playerdetail.minutes , playerdetail.goals_scored , playerdetail.assists , playerdetail.clean_sheets   , playerdetail.goals_conceded , playerdetail.own_goals , playerdetail.penalties_saved , playerdetail.penalties_missed , playerdetail.yellow_cards , playerdetail.red_cards , playerdetail.saves , playerdetail.bonus , playerdetail.bps , playerdetail.name , playerdetail.singular_name) " style="color:white;" type="button" class="btn btn-info">Player Details</button></td>

                    </tr>
                </tbody>

             </table>



    <!-- Update Modal -->
        <div class="modal fade" id="show-modal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showModalLabel">Player Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">    

                        <div class="form-group">
                            <table class="table">
                            <tr>
                                <td>
                                    <label for="id"><strong>ID : </strong></label>
                                    <label for="id">{{ this.e_id }}</label>
                                </td>
                                <td>
                                    <label for="name"><strong>Full Name : </strong></label>
                                    <label for="name">{{ this.e_firstname }} {{ this.e_lastname }}</label>   
                                </td>   

                             
                                <td>
                                    <label for="name"><strong>Form : </strong></label>
                                    <label for="name">{{ this.e_form }}</label>
                                </td>  

                                </tr> 

                              <tr>
                                <td>
                                    <label for="total_points"><strong>Total Points: </strong></label>
                                    <label for="total_points">{{ this.e_total_points }} pts</label>
                                </td> 

                             
                                <td>
                                    <label for="influence"><strong>Influence: </strong></label>
                                    <label for="influence">{{ this.e_influence }}</label>
                                </td> 
                                <td>
                                    <label for="creativity"><strong>Creativity: </strong></label>
                                    <label for="creativity">{{ this.e_creativity }}</label>
                                </td>  

                                   </tr> 

                              <tr>
                                 <td>
                                    <label for="threat"><strong>Threat: </strong></label>
                                     <label for="threat">{{ this.e_threat }}</label>
                                </td>    
                                  <td>
                                    <label for="ict_index"><strong>Ict Index: </strong></label>
                                    <label for="ict_index">{{ this.e_ict_index }}</label>
                                </td>  
                                 
                                <td>
                                    <label for="chance_of_playing_next_round"><strong>Chance of playing next round: </strong></label>
                                    <label for="e_chance_of_playing_next_round">{{ this.e_chance_of_playing_next_round }}%</label>
                                </td>

                                  </tr> 

                              <tr>

                                <td>
                                    <label for="chance_of_playing_this_round"><strong>Chance of playing this round: </strong></label>
                                    <label for="chance_of_playing_this_round">{{ this.e_chance_of_playing_this_round }}%</label>
                                </td>
                                    
                                
                                <td>
                                    <label for="code"><strong>Code: </strong></label>
                                    <label for="e_code">{{ this.e_code }}</label>
                                </td>

                                 <td>
                                    <label for="cost_change_event"><strong>Cost Change Event: </strong></label>
                                    <label for="cost_change_event">{{ this.e_cost_change_event }}</label>
                                </td>
                               
                                  </tr> 

                              <tr>

                                <td>
                                    <label for="cost_change_event_fall"><strong>Cost Change Event Fall: </strong></label>
                                    <label for="cost_change_event_fall">{{ this.e_cost_change_event_fall }}</label>
                                </td>

                                 <td>
                                    <label for="cost_change_start"><strong>Cost Change Start: </strong></label>
                                    <label for="cost_change_start">{{ this.e_cost_change_start }}</label>
                                </td>

                               
                                 

                                <td>
                                    <label for="cost_change_start_fall"><strong>Cost Change Start Fall: </strong></label>
                                    <label for="cost_change_start_fall">{{ this.e_cost_change_start_fall }}</label>
                                </td>

                                  </tr> 

                              <tr>

                                <td>
                                    <label for="dreamteam_count"><strong>Dreamteam Count: </strong></label>
                                    <label for="dreamteam_count">{{ this.e_dreamteam_count }}</label>
                                </td>

                               
                                <td>
                                    <label for="element_type"><strong>Element Type: </strong></label>
                                    <label for="element_type">{{ this.e_singular_name }}</label>
                                </td>

                                <td>
                                    <label for="ep_next"><strong>Ep Next: </strong></label>
                                    <label for="ep_next">{{ this.e_ep_next }}</label>
                                </td>


                                </tr>  

                                <tr>
                                 <td>
                                    <label for="ep_this"><strong>Ep This: </strong></label>
                                    <label for="ep_this">{{ this.e_ep_this }}</label>
                                </td>

                                <td>
                                    <label for="event_points"><strong>Event Points: </strong></label>
                                    <label for="event_points">{{ this.e_event_points }}</label>
                                </td>

                                 <td>
                                    <label for="in_dreamteam"><strong>In DreamTeam: </strong></label>
                                    <label for="in_dreamteam">{{ this.e_in_dreamteam }}</label>
                                </td>

                                </tr>  

                                 <tr>

                                 <td>
                                    <label for="news"><strong>News: </strong></label>
                                    <label for="news">{{ this.e_news }}</label>
                                </td>

                                <td>
                                    <label for="news_added"><strong>News Added: </strong></label>
                                    <label for="news_added">{{ this.e_news_added }}</label>
                                </td>

                                 <td>
                                    <label for="now_cost"><strong>Now Cost: </strong></label>
                                    <label for="now_cost">{{ this.e_now_cost }}</label>
                                </td>

                                </tr>  

                                 <tr>


                                 <td>
                                    <label for="photo"><strong>Photo: </strong></label>
                                    <label for="photo">{{ this.e_photo }}</label>
                                </td>

                                <td>
                                    <label for="points_per_game"><strong>Points Per Game: </strong></label>
                                    <label for="points_per_game">{{ this.e_points_per_game }}</label>
                                </td>

                                <td>
                                    <label for="selected_by_percent"><strong>Selected By Percent: </strong></label>
                                    <label for="selected_by_percent">{{ this.e_selected_by_percent }}</label>
                                </td>


                                 </tr>    

                                 <tr>

                                    <td>
                                        <label for="special"><strong>Special: </strong></label>
                                        <label for="special">{{ this.e_special }}</label>
                                    </td>

                                     <td>
                                        <label for="squad_number"><strong>Squad Number: </strong></label>
                                        <label for="squad_number">{{ this.e_squad_number }}</label>
                                    </td>

                                     <td>
                                        <label for="status"><strong>Status: </strong></label>
                                        <label for="status">{{ this.e_status }}</label>
                                    </td>
                                 </tr>


                                <tr>

                                    <td>
                                        <label for="team"><strong>Team: </strong></label>
                                        <label for="team">{{ this.e_team }}</label>
                                    </td>

                                    <td>
                                        <label for="team_code"><strong>Team Name: </strong></label>
                                        <label for="team_code">{{ this.e_name }}</label>
                                    </td>

                                    <td>
                                        <label for="transfers_in"><strong>Transfers In: </strong></label>
                                        <label for="transfers_in">{{ this.e_transfers_in }}</label>
                                    </td>

                                </tr>

                                <tr>
                                    <td>      
                                        <label for="transfers_in_event"><strong>Transfers In Event: </strong></label>
                                        <label for="transfers_in_event">{{ this.e_transfers_in_event }}</label>
                                    </td>

                                    <td>      
                                        <label for="transfers_out"><strong>Transfers In Out: </strong></label>
                                        <label for="transfers_out">{{ this.e_transfers_out }}</label>
                                    </td>

                                     <td>      
                                        <label for="transfers_out_event"><strong>Transfers Out Event: </strong></label>
                                        <label for="transfers_out_event">{{ this.e_transfers_out_event }}</label>
                                    </td>


                                </tr>  

                                <tr> 
                                     <td>      
                                        <label for="value_form"><strong>Value Form: </strong></label>
                                        <label for="value_form">{{ this.e_value_form }}</label>
                                    </td>  

                                     <td>      
                                        <label for="value_season"><strong>Value Season: </strong></label>
                                        <label for="value_season">{{ this.e_value_season }}</label>
                                    </td>   

                                    <td>      
                                        <label for="web_name"><strong>Web Name: </strong></label>
                                        <label for="web_name">{{ this.e_web_name }}</label>
                                    </td>   


                                    
                                </tr>  

                                 <tr> 

                                     <td>      
                                        <label for="minutes"><strong>Minutes: </strong></label>
                                        <label for="minutes">{{ this.e_minutes }}</label>
                                    </td>   


                                     <td>      
                                        <label for="goals_scored"><strong>Goals Scored: </strong></label>
                                        <label for="goals_scored">{{ this.e_goals_scored }}</label>
                                    </td>   

                                     <td>      
                                        <label for="assists"><strong>Assists: </strong></label>
                                        <label for="assists">{{ this.e_assists }}</label>
                                    </td>  

                                 </tr>   

                                  <tr> 

                                     <td>      
                                        <label for="clean_sheets"><strong>Clean Sheets: </strong></label>
                                        <label for="clean_sheets">{{ this.e_clean_sheets }}</label>
                                    </td>

                                    <td>      
                                        <label for="goals_conceded"><strong>Goals Conceded: </strong></label>
                                        <label for="goals_conceded">{{ this.e_goals_conceded }}</label>
                                    </td>

                                     <td>      
                                        <label for="own_goals"><strong>Own Goals: </strong></label>
                                        <label for="own_goals">{{ this.e_own_goals }}</label>
                                    </td>


                                   </tr>    


                                    <tr>

                                     <td>      
                                        <label for="penalties_saved"><strong>Penalties Saved: </strong></label>
                                        <label for="penalties_saved">{{ this.e_penalties_saved }}</label>
                                      </td>
                                      
                                     <td>      
                                        <label for="penalties_missed"><strong>Penalties Missed: </strong></label>
                                        <label for="penalties_missed">{{ this.e_penalties_missed }}</label>
                                      </td>

                                       <td>      
                                        <label for="yellow_cards"><strong>Yellow Cards: </strong></label>
                                        <label for="yellow_cards">{{ this.e_yellow_cards }}</label>
                                      </td>


                                    </tr>

                                      <tr>

                                        <td>      
                                            <label for="red_cards"><strong>Red Cards: </strong></label>
                                            <label for="red_cards">{{ this.e_red_cards }}</label>
                                        </td>

                                         <td>      
                                            <label for="saves"><strong>Saves: </strong></label>
                                            <label for="saves">{{ this.e_saves }}</label>
                                        </td>

                                         <td>      
                                            <label for="bonus"><strong>Bonus: </strong></label>
                                            <label for="bonus">{{ this.e_bonus }}</label>
                                        </td>
                                      
                                      </tr>

                                      <tr>

                                          <td>      
                                            <label for="bps"><strong>Bps: </strong></label>
                                            <label for="bps">{{ this.e_bps }}</label>
                                        </td>


                                      </tr>
    

                                </table>
                            
                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
  

        </div>
    </div>
</template>

<script>
    export default {

        data() {

            return {

                uri: 'http://127.0.0.1:8000/playerdetails',

                playerdetails: [],

                e_id: '',
                e_firstname: '',
                e_lastname: '',
                e_form: '',
                e_influence: '',
                e_creativity: '',
                e_threat: '',
                e_ict_index: '',
                e_total_points: '',
                e_chance_of_playing_next_round: '',
                e_chance_of_playing_this_round: '',
                e_code: '',
                e_cost_change_event: '',
                e_cost_change_event_fall: '',
                e_cost_change_start: '' ,
                e_cost_change_start_fall: '' ,
                e_dreamteam_count: '' ,
                e_ep_next: '' ,
                e_ep_this: '' ,
                e_event_points: '' ,
                e_in_dreamteam: '' ,
                e_news: '' ,
                e_news_added: '' ,
                e_now_cost: '' ,
                e_photo: '' ,
                e_points_per_game: '' ,
                e_selected_by_percent: '' ,
                e_special: '' ,
                e_squad_number: '' ,
                e_status: '' ,
                e_team: '' ,
                e_team_code: '' ,
                e_transfers_in: '' ,
                e_transfers_in_event: '' ,  
                e_transfers_out: '' ,  
                e_transfers_out_event: '' ,  
                e_value_form: '' ,  
                e_value_season : '' ,
                e_web_name : '' ,
                e_minutes : '' ,
                e_goals_scored : '' ,
                e_assists : '' ,
                e_clean_sheets : '' ,    
                e_goals_conceded : '' ,
                e_own_goals : '' ,
                e_penalties_saved : '' ,
                e_penalties_missed : '' ,
                e_yellow_cards : '' ,
                e_red_cards : '' ,
                e_saves : '' ,
                e_bonus : '' ,
                e_bps : '' ,
                e_name : '' ,
                e_singular_name : '' ,
                


            }


        } , 

        methods: {


            loadPlayerDetails(){

          
                axios.get(this.uri).then(response=>{

                    this.playerdetails = response.data.playerdetails;
                  
                });

            },

            showplayerdetails(id , fname , lname , form , influence , creativity , threat , ict_index , total_points , chance_of_playing_next_round , chance_of_playing_this_round , code , cost_change_event , cost_change_event_fall, cost_change_start , cost_change_start_fall , dreamteam_count , element_type , ep_next , ep_this , event_points , in_dreamteam , news , news_added , now_cost , photo , points_per_game , selected_by_percent , special , squad_number , status , team , team_code , transfers_in , transfers_in_event , transfers_out , transfers_out_event , value_form , value_season , web_name , minutes , goals_scored , assists , clean_sheets , goals_conceded , own_goals , penalties_saved , penalties_missed , yellow_cards , red_cards , saves , bonus , bps , name , singular_name) {

              
                $("#show-modal").modal("show"); 

                this.e_id = id;

                this.e_firstname = fname;

                this.e_lastname = lname;

                this.e_form = form;

                this.e_influence = influence;

                this.e_creativity = creativity;

                this.e_threat = threat;

                this.e_ict_index = ict_index;

                this.e_total_points = total_points;

                this.e_chance_of_playing_next_round = chance_of_playing_next_round;

                this.e_chance_of_playing_this_round = chance_of_playing_this_round;

                this.e_code = code;

                this.e_cost_change_event = cost_change_event;

                this.e_cost_change_event_fall = cost_change_event_fall;

                this.e_cost_change_start = cost_change_start;

                this.e_cost_change_start_fall = cost_change_start_fall;
                
                this.e_dreamteam_count = dreamteam_count;

                this.e_element_type = element_type;

                this.e_ep_next = ep_next;

                this.e_ep_this = ep_this;

                this.e_event_points = event_points;
                
                this.e_in_dreamteam = in_dreamteam;

                this.e_news = news;

                this.e_news_added = news_added;
                
                this.e_now_cost = now_cost;

                this.e_photo = photo;

                this.e_points_per_game = points_per_game;

                this.e_selected_by_percent = selected_by_percent;

                this.e_special = special;

                this.e_squad_number = squad_number;
                 
                this.e_status = status; 

                this.e_team = team; 
                
                this.e_team_code = team_code; 
   
                this.e_transfers_in = transfers_in; 

                this.e_transfers_in_event = transfers_in_event; 

                this.e_transfers_out = transfers_out; 

                this.e_transfers_out_event = transfers_out_event; 

                this.e_value_form = value_form;

                this.e_value_season = value_season;

                this.e_web_name = web_name;

                this.e_minutes = minutes;

                this.e_goals_scored = goals_scored;
                
                this.e_assists = assists;

                this.e_clean_sheets = clean_sheets;

                this.e_goals_conceded = goals_conceded;

                this.e_own_goals = own_goals;

                this.e_penalties_saved = penalties_saved;

                this.e_penalties_missed = penalties_missed;

                this.e_yellow_cards = yellow_cards;

                this.e_red_cards = red_cards;

                this.e_saves = saves;

                this.e_bonus = bonus;

                this.e_bps = bps;

                this.e_name = name;

                this.e_singular_name = singular_name;

                
                


            }, 

        



        } ,

        mounted() {

            this.loadPlayerDetails();
        
        }

       
    }
</script>
