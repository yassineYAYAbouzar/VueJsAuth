<template>
  <div class="register container">
    <div class="error-list">
      <div
        class="alert alert-danger col-lg-6 mx-auto"
        role="alert"
        v-for="(error, index) in formErrors"
        :key="index"
      >
        {{ error }}
      </div>
    </div>
    <form
      @submit.prevent="register"
      @submit="validateForm"
      class="col-lg-6 mx-auto"
    >
      <div class="card-body card-header mt-5">
        <h1 class="text-center">Register</h1>
        <hr />
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" v-model="name" />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" v-model="email" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" v-model="password" />
        </div>
        <div class="form-group text-right">
          <button type="submit" class="btn btn-info btn-lg d-block w-100">
            Register
          </button>
          <router-link class="my-3 text-info font-weight-bold" to="/login">
            <small class="text-muted">Already Registered</small>

            login In?
          </router-link>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
// @ is an alias to /src
import firebase from "firebase";
export default {
  name: "register",
  data() {
    return {
      formErrors: [],
      name: "",
      email: "",
      password: "",
      maxChars: 5,
    };
  },

  methods: {
    validateForm: function (e) {
      this.formErrors = [];
      if (this.name.length < this.maxChars) {
        this.formErrors.push("Username cant be empty");
      }
      if (!this.formErrors.length) {
        return true;
      }
      e.preventDefault();
    },
    register: function () {
      firebase
        .auth()
        .createUserWithEmailAndPassword(this.email, this.password)
        .then(() => {
          this.$router.push("/login");
        })
        .catch((err) => {
          this.formErrors.push(err.message);
        });
    },
  },
};
</script>
<style scoped>
hr:after {
  content: "";
  background: #00bcd4;
  width: 63px;
  height: 7px;
  position: absolute;
  left: 50%;
  top: 16%;
  border-radius: 10px;
  transform: translate(-50%, 0px);
}
</style>
