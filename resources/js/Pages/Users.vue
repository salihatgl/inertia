<template>
  <Loginavbar></Loginavbar>
  <!-- <div style="background-color: #333; padding: 10px;">
    <Link href="/dashboard" style="color: white; text-decoration: none; margin: 0 10px;">Ana Sayfa</Link>
    <Link href="route('posy.edit', post.id)">Edit</Link>
  </div> -->
     <!-- <Link v-if="can.create_user"  href="/users/create">Create User</Link>  -->
     <button v-if="can.create_user" type="button" class="btn btn-success" style="float: right; margin-right: 120px;"><Link v-if="can.create_user" style="text-decoration: none; color: white;" href="/users/create">Create User</Link></button> <br>
     <div class="container mt-3">
 <table class="table table-striped">
  <tbody>
    <tr class="table-success">
      <th>Id</th>
      <th>Ad</th>
      <th>E-mail</th>
    </tr>
    <tr v-for="user in users" :key="user.id">
      <td>{{ user.id }}</td>
      <td>{{ user.name }}</td>
      <td>{{ user.email }}</td>
     <td><a :href="editUserLink">Edit</a></td> 
    </tr>
  </tbody>
  </table>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Loginavbar from './Loginavbar.vue';

const props = defineProps(['can', 'users']);


</script>
