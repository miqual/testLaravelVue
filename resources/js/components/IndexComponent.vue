<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">index Component</div>

                    <div class="card-body">
                        I'm an index component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
/* @import "../../../public/css/app.css"; */
@import "../../css/app.css";
/* .card-body{
  background-color: #3982e5;
} */
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
