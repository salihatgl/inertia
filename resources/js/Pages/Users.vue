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
      <th>E-mail</th>
    </tr>
    <tr v-for="user in users" :key="user.id" >
      <!-- <td>{{ user.id }}</td>
      <td>{{ user.name }}</td>
      <td>{{ user.email }}</td> -->
      <td>
            <Link class="link" :href="`/users/${user.id}/edit`" tabindex="-1">
              {{ user.id }}
            </Link>
          </td>
      <td>
            <Link class="link" :href="`/users/${user.id}/edit`" tabindex="-1">
              {{ user.name }}
            </Link>
          </td>
          <td>
            <Link class="link" :href="`/users/${user.id}/edit`" tabindex="-1">
              {{ user.email }}
            </Link>
          </td>
          <td>
            <Link class="link" :href="`/users/${user.id}/edit`" tabindex="-1">
              Edit
            </Link>
            <button  @click="deleteUser(user.id)" tabindex="-1">
              Delete
            </button>
          </td>
    </tr>
  </tbody>
  </table>
    </div>
</template>

<script setup>
import{Inertia} from '@inertiajs/inertia';
import { Link, router } from '@inertiajs/vue3';
import Loginavbar from './Loginavbar.vue';

const props = defineProps(['can', 'users']);

const deleteUser = (userId) => {
  if (confirm('Are you sure you want to delete this user?')) {
    router.delete(`/users/destroy/${userId}`);
  }
};
</script>
<style>
.link{
  text-decoration: none;
  color: black;
}

</style>
