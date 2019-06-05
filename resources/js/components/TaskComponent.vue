
<template>
<div class="card">
    <div class="card-header bg-primary">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Todo Task</h5>
        <p class="card-text">
            <ul class="list-group">
                <li class="list-group-item" v-for="t in tasks">
                    {{t.id}} {{t.tasks}}
                    <span class="float-right">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <button class="btn btn-primary btn-sm" type="button">Add Task</button>
                        <button class="btn btn-danger btn-sm" type="button">Delete</button>
                        <button class="btn btn-dark btn-sm" type="button">Preview</button>

                    </div>
                    </span>
                </li>

            </ul>
        </p>
    </div>
    <div class="card-footer text-right">
        <small>Copyrights &copy; 2019</small>
    </div>
</div>
</template>



<script>
export default {
data() {
    return {
        tasks:{}
    }
},methods: {

},
created() {
   // console.log('task component loaded');
   axios.get('http://127.0.0.1:8000/tasks')
       .then( (response)=>this.tasks=response.data)
       .catch((error)=>console.log(error));
       console.log("task component loaded");
},
}
</script>
<style type="text\css" scoped>

</style>
