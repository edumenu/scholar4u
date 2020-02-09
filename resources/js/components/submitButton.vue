<template>
    <div>
       <button class="btn btn-success btn-fill pull-right" @click="updateInfo">Update Profile</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
        	updateInfo(){
        	  axios.post('/profile/1')
        	   .then(response =>{
        	      alert('It went through!');
        	   })

        	   
        	}
        }
    }
</script>