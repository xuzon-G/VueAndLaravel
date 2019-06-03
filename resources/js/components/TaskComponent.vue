
<template>
<div class="card">
    <div class="card-header bg-primary">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Todo Task</h5>
        <p class="card-text">Content</p>
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

    }
},methods: {

},
mounted() {
   // console.log('task component loaded');
   axios.get('127.0.0.1:8000/tasks')
       .then( (response)=>this.tasks=response.data)
       .catch((error)=>console.log(error));
},
}
</script>
<style type="text\css" scoped>

</style>
