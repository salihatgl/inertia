<template>
  <Loginavbar></Loginavbar>

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
