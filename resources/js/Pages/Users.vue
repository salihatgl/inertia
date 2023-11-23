<template>
  <div style="background-color: #333; padding: 10px;">
    <Link href="/dashboard" style="color: white; text-decoration: none; margin: 0 10px;">Ana Sayfa</Link>
    <Link href="/logout" method="post" style="color: white; text-decoration: none; margin: 0 10px; float: right;">Logout</Link>
  </div>
    <Link v-if="can.create_user"  href="/users/create" style="color: white; text-decoration: none; margin: 10px 17%; background-color: #4CAF50; padding: 10px; float:right; border-radius: 4px;">Create User</Link> 
   
 <table>
    <tr>
      <th>Id</th>
      <th>Ad</th>
      <th>E-mail</th>
    </tr>
    <tr v-for="user in users" :key="user.id">
      <td>{{ user.id }}</td>
      <td>{{ user.name }}</td>
      <td>{{ user.email }}</td>
    </tr>
  </table>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps(['can', 'users']);
</script>

<style>
table {
  border-collapse: collapse;
  width: 70%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 3%;
}

td {
  text-align: center;
  padding: 8px;
  
}
th {
  text-align: center;
  padding: 15px;
}


tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #04AA6D;
  color: white;
}
</style>