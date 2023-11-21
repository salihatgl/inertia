<template>
    <div>
      <h1>Edit User Profile</h1>
      <form @submit.prevent="updateUser">
        <label for="name">Name:</label>
        <input v-model="form.name" type="text" id="name" />
  
        <label for="email">Email:</label>
        <input v-model="form.email" type="email" id="email" />
  
        <button type="submit">Update Profile</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Inertia } from '@inertiajs/inertia';
  import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
  
  const page = usePage();
 const user = computed(() => page.props.auth.user)
  const form = ref({
    name: '<%= user.name %>',
    email: '<%= user.email %>',
  });
  
  const updateUser = async () => {
    await Inertia.put('/user/update', form);
  };
  </script>