import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import firebase from "firebase";

var firebaseConfig = {
  apiKey: "AIzaSyDGSJbAc-_XNbenqP6pcgr5dcKplBmuvO8",
  authDomain: "auth-app-6d5da.firebaseapp.com",
  projectId: "auth-app-6d5da",
  storageBucket: "auth-app-6d5da.appspot.com",
  messagingSenderId: "725692831212",
  appId: "1:725692831212:web:074e6f11c9b563b369dcc9",
  measurementId: "G-7Q7YP4G15Q",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
createApp(App).use(store).use(router).mount("#app");
