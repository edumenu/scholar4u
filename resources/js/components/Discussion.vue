<template>

         <div class="container-fluid">

             <div class="col-sm-2">
               <h3>Search</h3>

                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-search"></i></span>
                          <input type="text" value="" class="form-control" placeholder="Search...">
                      </div>

             </div>

             <div class="col-md-10">

                  <h3>Category</h3>

                  <div class="row">

	              	<div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 5px;">
				      <a type="button" class="btn btn-neutral btn-fill" @click="categoryClick('')">All</a>
				      <a type="button" class="btn btn-info btn-fill" @click="categoryClick('scholarships')">Scholarship</a>
				      <a type="button" class="btn btn-danger btn-fill" @click="categoryClick('loans')">Loan</a>
				      <a type="button" class="btn btn-warning btn-fill" @click="categoryClick('others')">Other</a>
				    </div>

                    <a href="discussionBoard/create" class="btn btn-primary btn-fill" style="float: right;">Add Post <i class="fa fa-plus"></i></a>
                  </div>

                     <section v-if="errored">
                         <h1 class="text-center">Unable to retrieve this information at the moment, please try again later.</h1>
                     </section>

                     <section v-else>
                         <div v-if="loading"><img :src="loadingImage()" style="margin-left: 40%;"></div>

                         <div v-else v-for="post in posts" v-bind:key="post.id">

                             <div class="dicussionCard" :class="[
                                 post.post_category === 'scholarship' ? scholarshipCheck : '',
                                 post.post_category === 'loan' ? loanCheck : '',
                                 post.post_category === 'other' ? otherCheck : '',
                                 ]">

                                 <div class="dicussionCardHeader">
                                     <img :src="imgUrl(post.post_user_picture)" style="width:40px; border-radius: 50%;">
                                     {{ post.post_user_name }}
                                 </div>

                                 <div class="container" style="padding-bottom: 10px;">
                                     <div class="dicussionCardTitle" style="margin-bottom: 3%;"> <a href=""> {{ post.post_title }} </a> </div>

                                     <div class="col-md-10" style="color: grey;">
                                         <a href="" class="btn btn-success btn-fill">Comment</a> &nbsp; Comments: <span></span> &nbsp; Posted: <span></span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </section>
             </div>
          </div>


</template>

<script>
  export default {
      data: function () {
          return {
              posts: [],
              post_error: '',
              loading: true,
              errored: false,
              scholarshipActive: false,
            post: {
                id: '',
                created_at: '',
                post_title: '',
                user_id: '',
                post_user_name: '',
                post_user_picture: '',
                post_category: '',
                post_comment_count: '',
                post_view_count: '',
            },
              post_id: '',
              pagination: {}
          }
        },

      computed: {
          //Function dynamically adds scholarshipCardBorder to the class
          scholarshipCheck(){
              return "scholarshipCardBorder";
          },
          //Function adds scholarshipCardBorder to the class
          loanCheck(){
              return "loanCardBorder";
          },
          //Function adds scholarshipCardBorder to the class
          otherCheck(){
              return "otherCardBorder";
          }
      },

      created() {
          this.fetchPosts();
        },

      methods: {
          //Function to make get requests for all posts
        fetchPosts() {
            axios.get('api/posts')
                .then(response=>{
                this.posts = JSON.parse(JSON.stringify(response.data.data));
                console.log(JSON.parse(JSON.stringify(response.data.data)));
            }).catch(errors => {
                    if (errors.response.status === 405) {
                        this.errored = true;
                    }
                })
            .finally(() => this.loading = false)
        },

          // Function for returning pictures
          imgUrl(image){
            return '/storage/' + image;
          },

          // This function loads static images
          loadingImage(){
           return '/images/admin_images/eclipse.gif';
          },

          //Function for dynamically changing the category types
          categoryClick(value){
              axios.get('api/posts/' + value)
                  .then(response=>{
                      this.posts = JSON.parse(JSON.stringify(response.data.data));
                  }).catch(errors => {
                  if (errors.response.status === 405) {
                      this.errored = true;
                  }
              })
                  .finally(() => this.loading = false)
          },
      },

      mounted: function(category) {
        },

  }

</script>
