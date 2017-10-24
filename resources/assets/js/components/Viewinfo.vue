<template>
      <!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Member Complete Info</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputText3" class="col-sm-2 control-label" >Name:</label>
                    <div class="col-sm-10">
                    <h5>{{ list.name }}</h5>
                    </div>
                    
                    <label for="inputText3" class="col-sm-2 control-label" >Phone:</label>
                    <div class="col-sm-10">
                    <h5>{{ list.phone }}</h5>
                    </div>

                    <label for="inputText3" class="col-sm-2 control-label" >Email:</label>
                    <div class="col-sm-10">
                    <h5>{{ list.email }}</h5>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            list: ''
        }
    }
}
</script>
