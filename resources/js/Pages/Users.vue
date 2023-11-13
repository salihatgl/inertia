<template>
    <div style="background-color: #333; padding: 10px;">
  <a href="#" style="color: white; text-decoration: none; margin: 0 10px;">Ana Sayfa</a>
  <Link href="/users" style="color: white; text-decoration: none; margin: 0 10px;">Users</Link>
  <Link href="/logout" method="post" style="color: white; text-decoration: none; margin: 0 10px; float: right;">Logout</Link>
  <a href="#" style="color: white; text-decoration: none; margin: 0 20px; float: right;"></a>
</div>


<table>
    <tr>
      <th>Id</th>
      <th>Ad</th>
      <th>E-mail</th>
    </tr>
    <tr v-for="user in users">
      <td>{{ user.id }}</td>
      <td>{{ user.name }}</td>
      <td>{{ user.email }}</td>
      
    

    </tr>
  </table>

</template>
<script>
import { Link } from '@inertiajs/vue3';


export default {
  props: ['users'],
};

</script>
<style>
table {
    border-collapse: collapse;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 3%;
  }
  
  th, td {
    text-align: left;
    padding: 15px;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  
  th {
    background-color: #04AA6D;
    color: white;
  }
  </style>