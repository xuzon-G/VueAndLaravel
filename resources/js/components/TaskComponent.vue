
<template>
<div class="card">
    <div class="card-header bg-primary">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Todo Task</h5>
        <p class="card-text">
            <ul class="list-group">
                <li class="list-group-item" v-for="t in tasks.data">
                    {{t.id}} {{t.tasks}}
                    <span class="float-right">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-sm" type="button">Add Task</a>
                        <button class="btn btn-danger btn-sm" type="button">Delete</button>
                        <button class="btn btn-dark btn-sm" type="button">Preview</button>

                    </div>
                    </span>
                </li>

            </ul>
            <pagination :data="tasks" v-on:pagination-change-page="getResults" ></pagination>
        </p>
    </div>
    <div class="card-footer text-right">
        <small>Copyrights &copy; 2019</small>
    </div>

            <addTask></addTask>

</div>

</template>



<script>
Vue.component('pagination',require('laravel-vue-pagination'));
Vue.component('addTask',require('./addModalComponent.vue').default);
export default {
data() {
    return {
        tasks:{}
    }
},methods: {
    getResults(page = 1) {
        axios.get('http://127.0.0.1:8000/tasks?page='+page)
       .then( (response)=>this.tasks=response.data)
       .catch((error)=>console.log(error));
		}
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
