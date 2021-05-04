<template>
  <div class="dashbord">
    <navLink />
    <router-view />
    <div class="text-center">
    <h1 class="d-inline-block ">Welcom Admin!</h1>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import navLink from "@/components/navLink.vue";

export default {
  name: "dashbord",
  components: {
    navLink,
  },
};
</script>
