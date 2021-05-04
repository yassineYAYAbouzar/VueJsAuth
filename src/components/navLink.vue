<template>
  <ul class="nav flex-column w-25 d-inline-block mt-3">
    <li class="nav-item">
      <a
        ><router-link class="nav-link text-secondary" to="/dashbord"
          ><i class="fa mr-1 fa-home"></i>Home</router-link
        ></a
      >
    </li>
    <li class="nav-item">
      <p @click="logOut()" class="nav-link cursor-pointer text-info">
        <i class="fa mr-1 fa-sign-out"></i>logOut
      </p>
    </li>
  </ul>
</template>

<script>
import firebase from "firebase";

export default {
  name: "navLink",
  data() {
    return {
      user: null,
    };
  },
  created() {
    firebase.auth().onAuthStateChanged((user) => {
      if (!user) {
        this.$router.push("/login");
      }
    });
  },
  methods: {
    logOut() {
      firebase
        .auth()
        .signOut()
        .then(() => {
          firebase.auth().onAuthStateChanged(() => {
            this.$router.push("/login");
            this.user = "";
          });
        });
    },
  },
};
</script>
