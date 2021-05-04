<template>
  <div class="forget">
    <form @submit.prevent="forget" class="col-lg-6 mx-auto mt-5">
      <h1 class="text-center">Forget Password?</h1>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" v-model="email" />
      </div>
      <button class="btn btn-info d-block w-100">Reset</button>
    </form>
  </div>
</template>

<script>
// @ is an alias to /src
import firebase from "firebase";
export default {
  name: "forget",
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    forget: function () {
      firebase
        .auth()
        .sendPasswordResetEmail(this.email)
        .then(() => {
          alert("check Your Email");
          this.$router.push("/login");
        })
        .catch((error) => {
          alert(error.message);
        });
    },
  },
};
</script>
