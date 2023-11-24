<template>
    <!-- <Loginavbar></Loginavbar> -->
    <div style="background-color: #333; padding: 10px;">
  <Link href="/dashboard" style="color: white; text-decoration: none; margin: 0 10px;">Ana Sayfa</Link>
  <Link href="/users/users" style="color: white; text-decoration: none; margin: 0 10px;">Users</Link>
  <Link href="/logout" method="post" style="color: white; text-decoration: none; margin: 0 10px; float: right;">Logout</Link>
  <Link href="#" style="color: white; text-decoration: none; margin: 0 20px; float: right;">{{ user.name }}</Link>
</div>
</template>
<script setup>
import { computed, ref } from 'vue';
import { usePage, Link } from '@inertiajs/vue3';
import Loginavbar from '@/Pages/Loginavbar.vue';

 const page = usePage();
 const user = computed(() => page.props.auth.user)


</script>





