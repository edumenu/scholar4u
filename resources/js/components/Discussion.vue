<template>

         <div class="container-fluid">

             <div class="col-sm-2" style="border-style: solid;border-color: #efeff2;border-radius: 25px;">
               <h3>Search</h3>
                 <form @submit.prevent="onSubmit">
                     <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-search"></i></span>
                         <input type="text" v-model="searchValue" class="form-control" placeholder="Search..." >
                     </div>
                     <input class="btn btn-success btn-fill" type="submit" value="Submit" style="margin-top: 4px;margin-bottom: 6px;">
                 </form>
             </div>

             <div class="col-md-10" style="border-style: solid;border-color: #efeff2;border-radius: 25px;">

                  <h3>Select a Category</h3>

                  <div class="row">

	              	<div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 5px;">
				      <a type="button" class="btn btn-neutral btn-fill" @click="categoryClick('')">All</a>
				      <a type="button" class="btn btn-info btn-fill" @click="categoryClick('scholarships')">Scholarship</a>
				      <a type="button" class="btn btn-danger btn-fill" @click="categoryClick('loans')">Loan</a>
				      <a type="button" class="btn btn-warning btn-fill" @click="categoryClick('others')">Other</a>
				    </div>

                    <a href="discussionBoard/create" class="btn btn-primary btn-fill" style="float: right;">Add Post <i class="fa fa-plus"></i></a>
                  </div>

                     <!--  Pagination  -->
                     <nav aria-label="Page navigation example">
                         <ul class="pagination" style="margin-left: 40%">
                             <!-- Disabling page when there is no pagination -->
                             <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                                 <a class="page-link" href="#" @click="fetchPosts(pagination.prev_page_url)" style="border-radius: 0;">Previous</a>
                             </li>

                             <li class="page-item disabled text-dark"><a class="page-link limeGreenk" href="#" style="border-radius: 0;">Page:
                                 {{ pagination.current_page }} of {{ pagination.last_page }}</a>
                             </li>

                             <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                                 <a class="page-link" href="#" @click="fetchPosts(pagination.next_page_url)" style="border-radius: 0;">Next</a>
                             </li>
                         </ul>
                     </nav>

                     <section v-if="errored">
                         <h1 class="text-center">There are no posts.</h1>
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

                                     <!-- Users can delete thier own posts -->
                                     <span v-if="post.user_id  == userLoginId">
                                         <a id="postDelete" href="#" style="float: right; margin-right: 20px;" @click="deletePost(post.id)">
                                             <svg class="bi bi-trash-fill text-danger" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                                             </svg>
                                         </a>
                                     </span>
                                 </div>

                                 <div class="container" style="padding-bottom: 10px;">
                                     <div class="dicussionCardTitle" style="margin-bottom: 3%;"> <a :href="/discussionBoard/ + post.id"> {{ post.post_title | truncate }} </a> </div>

                                     <div class="col-md-10" style="color: grey;">
                                         <a :href="/discussionBoard/ + post.id" class="btn btn-success btn-fill">Comment</a> &nbsp; Comments: <span> {{ post.post_comment_count }}</span> &nbsp; Posted: <span>{{ post.created_at | dateFormat }}</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </section>

                    <!--  Pagination  -->
                     <nav aria-label="Page navigation example">
                         <ul class="pagination" style="margin-left: 40%">
                             <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                                 <a class="page-link" href="#" @click="fetchPosts(pagination.prev_page_url)">Previous</a>
                             </li>
                             <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                                 <a class="page-link" href="#" @click="fetchPosts(pagination.next_page_url)">Next</a>
                             </li>
                         </ul>
                     </nav>
             </div>
          </div>


</template>

<script>
  export default {
      props: ['userLoginId'],   // Obtain user ID
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
              pagination: {},
              searchValue: null
          }
        },

      computed: {
          //Function dynamically adds scholarshipCardBorder to the class
          scholarshipCheck(){
              return "scholarshipCardBorder";
          },
          //Function adds loanCardBorder to the class
          loanCheck(){
              return "loanCardBorder";
          },
          //Function adds otherCardBorder to the class
          otherCheck(){
              return "otherCardBorder";
          }
      },

      created() {
          this.fetchPosts();
          //
          this.discussionPostInfo();
        },

      filters: {
          // This function truncate string of more than 40 characters
          truncate: function (value) {
              var dots = "...";
              return value.length > 40 ? value.slice(0, 40) + dots : value;
          },

          //This function creates a date format
          dateFormat: function (value) {
              var dateData = new Date(value);
              return dateData.getMonth() + "/" + dateData.getDay() + "/" + dateData.getFullYear()
          }
      },

      methods: {
          //Function to make get requests for all posts
        fetchPosts(page_url) {
            let vm = this;
            this.errored = false; // Set back to false
            page_url = page_url || '/api/posts';

            axios.get(page_url)
                .then(response=>{
                this.posts = JSON.parse(JSON.stringify(response.data.data));
                vm.makePagination(response.data.meta, response.data.links);
            }).catch(error => {
                    if (error) {
                        this.errored = true;
                    }
                })
            .finally(() => this.loading = false)
        },

          // Function to delete posts
          deletePost(id){
              let self = this;
              // Display date after clicking on it
              swal({
                      title: "Are you sure you want to delete this post?",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      confirmButtonClass: "btn-danger btn-fill",
                  }).then(function() {
                     //console.log(id)
                      // Delete post
                      axios.delete("/api/post/" + id)
                          .then(response=>{
                              self.fetchPosts();
                          }).catch(error => {
                          if (error) {
                              alert("Cannot delete at this time. Please try again");
                          }
                      })
                     }, function(dismiss) {

                        }
                     );

          },

          // Function for showing one post
          showPost(id){
              axios.get("/api/post/" + id)
                  .then(response=>{
                  }).catch(error => {
                  if (error) {
                  }
              })
          },

          // Function for search post
          onSubmit(){
              this.errored = false; // Set back to false
            if(this.searchValue != null){
                axios.get("/api/posts/search/" + this.searchValue)
                    .then(response=>{
                        this.posts = JSON.parse(JSON.stringify(response.data.data));
                        if(this.posts.length === 0){
                            this.errored = true;
                        }
                    }).catch(error => {
                    if (error) {
                        this.errored = true;
                    }
                }) .finally(() => this.loading = false);
                // Setting searchValue to null
                //this.searchValue = null
            }
          },

          // Function for pagination
          makePagination(meta, links) {
            // Pagination object
              this.pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev
            };
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
              this.errored = false; // Set back to false

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

          discussionPostInfo() {
              swal({
                  html: '<h2>List of all Discussion Board posts. <br> Posts are categorized by Scholarship, Loan, Other</h2>',
                  showCancelButton: false,
                  confirmButtonText: 'Okay',
                  confirmButtonClass: "btn btn-success btn-fill",
              }).then(function() {

              });
          },
      },

      mounted: function(category) {
        },

  }

</script>
