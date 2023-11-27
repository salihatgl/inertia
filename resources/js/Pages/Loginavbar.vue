<template>
   <div class="b-example-divider"></div>
<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><Link class="nav-link px-2 link-secondary" href="/dashboard" >Home</Link></li>
        <li><Link href="/users/users" class="nav-link px-2 link-dark">Users</Link></li>
      </ul>


      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
         {{ user.name }}
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><Link href="/logout" method="post" class="dropdown-item">Logout</Link></li>
        </ul>
      </div>
    </div>
  </div>
</header>
</template>
<script setup>
import { computed, ref } from 'vue';
import { usePage, Link } from '@inertiajs/vue3';
import Loginavbar from '@/Pages/Loginavbar.vue';

 const page = usePage();
 const user = computed(() => page.props.auth.user)


</script>

