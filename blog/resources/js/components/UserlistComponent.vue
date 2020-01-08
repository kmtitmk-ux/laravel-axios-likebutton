<template>
  <div class="row">
    <user-list v-for="post in user_data" v-bind:key="post.id" v-bind:post="post"></user-list>
  </div>
</template>

<script>
export default {
  data: function(data) {
    return {
      user_data: ""
    };
  },
  mounted: function() {
    axios
      .get("/api")
      .then(response => {
        this.user_data = response.data.data;
      })
      .catch(error => {
        console.log(error.response);
      });
  }
};
Vue.component("user-list", {
  props: ["post"],
  data: function(data) {
    return {
      posturl: "",
      like_count: data._props.post.like
    };
  },
  template: `
    <div class="col-sm-6 col-md-2">
        <form class="card img-thumbnail" 
            v-bind:data-id="post.id"
            @submit.prevent="onSubmit"
        >
            <div class="card-body px-2 py-3">
                <h5 class="card-title">{{ post.name }}</h5>
                <button class="mb-0 btn btn-primary btn-sm">いいね {{ like_count }}</button>
            </div>
        </form>
    </div>
    `,
  methods: {
    onSubmit: function(event) {
      this.posturl = "/user/" + event.target.dataset.id;

      //post
      var self = this;
      var params = new URLSearchParams();
      params.append("like", 1);
      params.append("_method", "patch");
      axios
        .post(this.posturl, params)
        .then(function(response) {
          self.like_count = response.data;
        })
        .catch(error => {
          console.log(error.response);
        });
    }
  }
});
</script>
