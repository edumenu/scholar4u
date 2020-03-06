<template>
 
	<div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 5px;">
      <button type="button" class="btn btn-neutral btn-fill" @click="messageClick('all')">All</button>
      <button type="button" class="btn btn-info btn-fill" @click="messageClick('scholarship')">Scholarship</button>
      <button type="button" class="btn btn-danger btn-fill" @click="messageClick('loan')">Loan</button>
      <button type="button" class="btn btn-warning btn-fill" @click="messageClick('other')">Other</button>
    </div>
   
</template>

<script>
  export default {
    methods: {
        messageClick(value) {
            axios.get('/discussionBoard/' + value).then(response=>{
                 //this.status = !this.status;

                 console.log(response);
            })
            .catch(errors => {
                if (errors.response.status == 401) {
                  window.location = '/discussionBoard';
                  }
            });
        }
    }

  }

</script>
