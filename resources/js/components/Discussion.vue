<template>

         <div class="container-fluid">

             <div class="col-sm-2">
               <h1>Search</h1>

                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-search"></i></span>
                          <input type="text" value="" class="form-control" placeholder="Search...">
                      </div>

             </div>

             <div class="col-md-10">

                  <h1>Category</h1>

                  <div class="row">

	              	<div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 5px;">
				      <button type="button" class="btn btn-neutral btn-fill" @click="messageClick('all')">All</button>
				      <button type="button" class="btn btn-info btn-fill" @click="messageClick('scholarship')">Scholarship</button>
				      <button type="button" class="btn btn-danger btn-fill" @click="messageClick('loan')">Loan</button>
				      <button type="button" class="btn btn-warning btn-fill" @click="messageClick('other')">Other</button>
				    </div>

                    <a href="discussionBoard/create" class="btn btn-primary btn-fill" style="float: right;">Add Post <i class="fa fa-plus"></i></a>
                  </div>

                      <div class="dicussionCard">
                        <div class="dicussionCardHeader">
                          <img src="" alt="Avatar" style="width:40px; border-radius: 50%;">
                        </div>

                          <div class="container" style="padding-bottom: 10px;">

                           <div class="dicussionCardTitle" style="margin-bottom: 3%;"> <a href=""> </a> </div>

                           <div class="col-md-10" style="color: grey;">
                            <a href="" class="btn btn-success btn-fill">Comment</a> &nbsp; Comments: <span></span> &nbsp; Posted: <span></span>
                           </div>
                          </div>
                     </div>

                   <h1 class="text-center">There are no posts yet.</h1>

             </div>
     </div>

</template>

<script>
  export default {

    data: function () {
          return {
            posts: {},
          }
        },

        mounted: function() {
           axios.get('http://scholar4u.me/discussionBoard').then(response=>{
                 //this.posts = response.data.posts;

                 console.log("test 22!");
                 console.log(response);
            })
            .catch(errors => {
                if (errors.response.status == 401) {
                  window.location = '/discussionBoard';
                  }
            });
        },

  }

</script>
