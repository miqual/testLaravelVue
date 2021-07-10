<template>
    <div>
        <h1>Hello</h1>
        <p class="hello">Hi {{ name || '匿名' }}</p>
        <p>{{ msg }}</p>
        <table border = "1">
            <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City Name</td>
            <td>Email</td>
            </tr>
          
            <tr v-for="(item, index) in placeList">
                <td >
               {{item.id}} 
                </td>
                 <td >
               {{item.name}} 
                </td>
                 <td >
               {{item.visited}} 
                </td>
                 <td >
               {{item.lat}} 
                </td>
                 <td >
               {{item.lng}} 
                </td>               
            </tr>
         
            </table>
    </div>
</template>

<script>
    export default {
        props: ['name','places'],
        data () {
            return {
                placeList:$.parseJSON(this.places),
    //             placeList:[
    //   { id: '123456789', name: '選項 1' },
    //   { id: '234567890', name: '選項 2' },
    //   { id: '345678901', name: '選項 3' },
    // ],
                msg: 'This is a Laravel with Vue Demo.'
            }
        }
    }
</script>

<style>
.hello {
    font-size: 2em;
    color: green;
}
</style>