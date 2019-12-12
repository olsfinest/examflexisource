<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-if="!loading">
                <img :src="loadergif" class="mx-auto d-block" alt="" />
            </div>

            <div v-else style="width:100%;"> 

            <button @click="createModal" class="btn btn-primary btn-block">Add New Task</button>

            <table class="table">

                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Body</th>
                </tr>
                </thead>

                <tbody>
                    <tr v-for="(task, index) in tasks">
                        <td>{{index + 1}}</td>
                        <td>{{ task.name }}</td>
                        <td>{{ task.body }}</td>
                        <td><button @click="setVal(task.id, task.name, task.body)" class="btn btn-info">Edit</button></td>
                        <td><button @click="deleteTask(task.id)" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>

             </table>

           


        <!-- Create Modal -->
        <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">    

                        <div class="alert alert-danger" v-if="errors.length > 0">
                            <ul>
                                <li v-for="error in errors">{{error}}</li>
                            </ul>
                        </div>        

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input v-model="task.name" type="text" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input v-model="task.body" type="text" id="description" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button @click="createTask" type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>




           <!-- Update Modal -->
        <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">    

                        <div class="alert alert-danger" v-if="errors.length > 0">
                            <ul>
                                <li v-for="error in errors">{{error}}</li>
                            </ul>
                        </div>        

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input v-model="this.e_id" type="hidden" id="e_id" class="form-control" required>

                            <input v-model="this.e_name" type="text" id="e_name" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input v-model="this.e_description" type="text" id="e_description" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button @click="loadUpdate" type="button" class="btn btn-primary">Save changes</button>
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

                task: {

                    id: '',
                    name: '',
                    body: '',

                } ,

                uri: 'http://127.0.0.1:8000/tasks/',

                tasks: [],

                errors: [],

                new_update_task: [] ,

                e_id: '',

                e_name: '',

                e_description: '',

                loadergif : 'images/4V0b.gif',

                loading : false,

                toastr : toastr.options = {"positionClas" : "toast-top-full-width"}

   

            }


        } , 

        methods: {

           

            loadTasks(){

                 var _this = this;

                axios.get(this.uri).then(response=>{

                    this.tasks = response.data.tasks;
                    this.loading = true;

                    
               
                });

            },

            createModal(){

                $("#create-modal").modal("show");

                this.task = [];
                

            } ,     

            createTask() {
        

                axios.post(this.uri , {name: this.task.name , body: this.task.body}).then(response=>{

                    this.tasks.push(response.data.task);

                    $("#create-modal").modal("hide");

                    this.task = [];

                  
                    toastr.success("Task has been created!");
    
                })
                
                .catch(error=>{

                    this.errors = [];

                    if(error.response.data.errors.name){

                        this.errors.push(error.response.data.errors.name[0]);

                        toastr.warning("Please add name");


                    }

                    if(error.response.data.errors.body){

                        this.errors.push(error.response.data.errors.body[0]);

                        toastr.warning("Please add body");

                    }

                });


            } ,   

            setVal(val_id, val_name, val_description) {

                this.errors = [];

                $("#update-modal").modal("show"); 

                this.e_id = val_id;
                this.e_name = val_name;
                this.e_description = val_description;


            }  ,

        

            loadUpdate() {
 

            var _this = this;    

            var e_id = document.getElementById('e_id');
            var e_name = document.getElementById('e_name');
            var e_description = document.getElementById('e_description');
           

                axios.patch(this.uri + e_id.value , {
                    
                    name: e_name.value , 
                    body: e_description.value           
                
                }).then(response=>{


                     $("#update-modal").modal("hide");

                     _this.loadTasks();

                      toastr.success("Update Successfull");
         
    
                })

                .catch(error=>{

                    this.errors = [];

                    if(error.response.data.errors.name){

                        this.errors.push(error.response.data.errors.name[0]);

                        toastr.error('Wrong name pls check');

                    }

                    if(error.response.data.errors.body){

                        this.errors.push(error.response.data.errors.body[0]);

                        toastr.error('Wrong body pls check');

                    }

                });


            } ,

            deleteTask(index) {

                var _this = this;    

                alert(index);
              
               var r = confirm("Are you sure you wanna delete it");
               
               if (r == true) {

                     axios.delete(this.uri + index).then(function (response) {
           
                      _this.loadTasks();

                       toastr.success("Task has been deleted!");

                    });


               }

               else {

               

               }



            }

        } ,

        mounted() {
            this.loadTasks();
        }

       
    }
</script>
