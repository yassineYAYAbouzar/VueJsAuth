<template>
  <div class="login">
    <div class="error-list">
      <div
        class="alert alert-danger col-lg-6 mx-auto"
        role="alert"
        v-for="(error, index) in errors"
        :key="index"
      >
        {{ error }}
      </div>
    </div>
    <form @submit.prevent="login" class="col-lg-4 mx-auto">
      <div class="card-body card-header mt-5">
        <h1 class="text-center">login</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" v-model="email" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" v-model="password" />
        </div>
        <button class="btn btn-info btn-lg d-block w-100">login</button>
        <small
          ><router-link to="/forget" class="text-muted float-right"
            >forget Password?</router-link
          ></small
        >
        <a
          ><router-link to="/" class="btn btn-info d-block w-25 mt-3"
            >register</router-link
          ></a
        >
      </div>
    </form>
  </div>
</template>

<script>
// @ is an alias to /src
import firebase from "firebase";
export default {
  name: "login",
  data() {
    return {
      email: "",
      password: "",
      errors: [],
    };
  },
  methods: {
    login: function () {
      firebase
        .auth()
        .signInWithEmailAndPassword(this.email, this.password)
        .then(() => {
          this.$router.push("/dashbord");
        })
        .catch((error) => {
          this.errors.push(error.message);
        });
    },
  },
};
</script>


