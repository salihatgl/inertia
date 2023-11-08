<template> 
<Head title="Create User" />
   
   <form @submit.prevent="submit">
    <div>
    <label for="name">Name</label><br>
    <input v-model="form.name" type="text" name="name" id="name" required><br>
    </div>
    <div>
    <label for="email">Email</label><br>
    <input v-model="form.email" type="email" name="email" id="email" required><br>
    </div>
    <div>
    <label for="password">Password</label><br>
    <input v-model="form.password" type="password" name="password" id="password" required><br>
    </div>
    <button type="submit">Submit</button>
   </form>
</template>
<script setup>
import { Head } from '@inertiajs/vue3'
import { reactive } from 'vue';

let form = reactive({
    name: '',
    email: '',
    password: ''
});

let submit = () => {
    form.post('/users');
};
</script>
