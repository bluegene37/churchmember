<template>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Info</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputText3" class="col-sm-2 control-label" >Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" :class="{'alert-danger':errors.name}" id="inputText3" placeholder="Name" v-model="list.name">
                    <span class="text-danger" v-if=" errors.name ">{{ errors.name [0] }}</span>
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" :class="{'alert-danger':errors.email}" id="inputEmail3" placeholder="Email" v-model="list.email">
                    <span class="text-danger" v-if=" errors.email ">{{ errors.email [0] }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone3" class="col-sm-2 control-label" >Phone</label>
                    <div class="col-sm-10">
                    <input type="tel" class="form-control" :class="{'alert-danger':errors.phone}" id="inputPhone3" placeholder="Phone #" v-model="list.phone">
                    <span class="text-danger" v-if=" errors.phone ">{{ errors.phone [0] }}</span>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="save">Save changes</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                list:{
                    name:'',
                    email:'',
                    phone:''
                },
              errors:{} 
            }
        },

        methods:{
            closeMod(){
                return $('#myModal').modal('hide')
            },
            save(){
                axios.post('/phonebook', this.$data.list)
                .then((reponse)=> console.log(response))
                .catch((error) => this.errors = error.response.data.errors)
                // this.closeMod()
            }
        }    
    }
</script>

