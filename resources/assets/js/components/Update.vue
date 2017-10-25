<template>
    <!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Update {{ list.name }}'s' Details</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputText3" class="col-sm-2 control-label" >Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" placeholder="Name" v-model="list.name">
                    <!-- <span class="text-danger" v-if=" errors.name ">{{ errors.name [0] }}</span> -->
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" v-model="list.email">
                    <!-- <span class="text-danger" v-if=" errors.email ">{{ errors.email [0] }}</span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone3" class="col-sm-2 control-label" >Phone</label>
                    <div class="col-sm-10">
                    <input type="tel" class="form-control" id="inputPhone3" placeholder="Phone #" v-model="list.phone">
                    <!-- <span class="text-danger" v-if=" errors.phone ">{{ errors.phone [0] }}</span> -->
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="update">Update</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                list:{},
              errors:{} 
            }
        },

        methods: {
            closeMod2() {
                return $('#myModal2').modal('hide')
            },
            update() {
                axios.patch(`/api/phone-book/${this.list.id}`, this.$data.list)
                .then(function () {
                    this.closeMod2()
                })
                // .catch((error) => this.errors = error.response.data.errors)
            }
        }    
    }
</script>


