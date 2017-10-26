<template>
    <div>
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><b>Church Members Info</b> 
            <!-- <i class="fa fa-refresh fa-spin fa-1x fa-fw" v-if"loading"></i>       -->
    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                Add New
                </button>

            </div>

            <!-- <div class="panel-body">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="search" class="form-control input-sm" placeholder="Search">
                        <button type="submit" class="btn btn-default btn-sm">Search</button>         
                    </div>
                </form>
            </div> -->

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item" v-for="item,key in lists"> {{ item.name }}
                    <span class="btn panel-icon text-primary pull-right col-sm-offset-1" data-toggle="modal" data-target="#myModal1" @click="passkeyview(key)">
                        <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                    </span>
                    <span class="btn panel-icon text-default pull-right col-sm-offset-1" data-toggle="modal" data-target="#myModal2" @click="passkeyupdate(key)">
                        <i class="fa fa-edit fa-lg" aria-hidden="true"></i>
                    </span>
                    <span class="btn panel-icon text-danger pull-right col-sm-offset-1" @click="delrecord(key,item.id)">
                        <i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                    </span>
                    <!-- <div class="btn-group pull-right" role="group" aria-label="">
                    <button type="button" class="btn btn-primary btn-xs " data-toggle="modal" data-target="#myModal1" @click="passkey(key)">Preview</button>
                    <button type="button" class="btn btn-default btn-xs ">Edit</button>
                    <button type="button" class="btn btn-danger btn-xs ">Delete</button>
                    </div> -->
                </li>
            </ul>
        </div>
    </div>
    <Add></Add>    
    <Viewinfo></Viewinfo>
    <Update></Update>
    </div>
</template>

<script>
    let Add = require('./Add.vue')
    let Viewinfo = require('./Viewinfo.vue')
    let Update = require('./Update.vue')

    export default {
        components: {
            Add, Viewinfo, Update
        },
        data() {
            return {
                lists: {},
                errors: {},
                loading: false
            }
        },
        mounted() {
                axios.get('/api/get-phone-books')
                    .then((reponse)=> this.lists = reponse.data.data)
                    .catch((error) => this.errors = error.response.data.errors)
        },
        methods: {
            passkeyview(key) {
                this.$children[1].list = this.lists[key]
            },
            passkeyupdate(key) {
                this.$children[2].list = this.lists[key]
            },
            delrecord(key,id) {
                // vm.$forceUpdate()
                if (confirm("Are you sure?")) {
                    this.loading = !this.loading

                    axios.delete(`/api/phone-book/${id}`)
                        // .then((reponse) => {this.splice(key,1);this.loading = !this.loading})
                        .then(function (response) {
                            console.log(response)
                        })
                        // .catch((error) => this.errors = error.response.data.errors)
                        .catch(function (error) {
                            console.log(error)
                        })
                }
            }
        }
    }
</script>
