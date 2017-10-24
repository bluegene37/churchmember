<template>
    <div>
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Church Member Info       
    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                Add New
                </button>
            </div>

            <div class="panel-body">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="search" class="form-control input-sm" placeholder="Search">
                        <button type="submit" class="btn btn-default btn-sm">Search</button>         
                    </div>
                </form>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item" v-for="item,key in lists"> {{ item.name }}
                    <div class="btn-group pull-right" role="group" aria-label="">
                    <button type="button" class="btn btn-primary btn-xs " data-toggle="modal" data-target="#myModal1" @click="passkey(key)">Preview</button>
                    <button type="button" class="btn btn-default btn-xs ">Edit</button>
                    <button type="button" class="btn btn-danger btn-xs ">Delete</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <Add></Add>    
    <Viewinfo></Viewinfo>
    </div>
</template>

<script>
    let Add = require('./Add.vue');
    let Viewinfo = require('./Viewinfo.vue');
    export default {
        components:{
            Add,Viewinfo
        },
        data(){
            return{
            lists:{},
            errors:{}
            }
        },

        mounted(){
                axios.post('/getData')
                .then((reponse)=> this.lists = reponse.data)
                .catch((error) => this.errors = error.response.data.errors)
        },

        methods:{
            passkey(key){
                this.$children[1].list = this.lists[key]
            }
        }
    }

</script>