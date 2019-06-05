<template>
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Title</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Add New Task</label>
                    <textarea id="name" class="form-control" name="name" rows="3" v-model="record"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" @click="addRecord" type="button">Save Changes</button>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    mounted() {
            console.log('AddModel mounted.');
        },
        data() {
            return {
                record:''
            }
        },
        methods: {
            addRecord:function()
            {

         axios.post('http://127.0.0.1:8000/tasks',{
             'tasks':this.record
         })
       .then( (response)=>this.$emit('recordAdded',response.data))
       .catch((error)=>console.log(error));
       console.log("data added component loaded");
            }
        },
}

</script>
<style scoped>

</style>
