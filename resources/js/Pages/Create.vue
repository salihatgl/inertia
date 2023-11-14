<template> 
<Head title="Create User" />
   
   <form @submit.prevent="submit" style="width: 25%;  margin-left: 30%; margin-top: 8%;">
    <h2 style="text-align: center;">Register</h2>
    <div>
    <label for="name">Name</label><br>
    <input v-model="form.name" type="text" name="name" id="name" required><br>
    <div></div>
    </div>
    <div>
    <label for="email">Email</label><br>
    <input v-model="form.email" type="email" name="email" id="email" required><br>
    </div>
    <div>
    <label for="password">Password</label><br>
    <input v-model="form.password" type="password" name="password" id="password" required><br>
    </div>
     <button type="submit" :disabled="form.processing">Submit</button> <!-- :disabled="form.processing"  form işleniyor ise düğme pasif hale getirilir. -->
   </form>
</template>
<script setup>
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

let form = reactive({
  name: '',
  email: '',
  password: '',
});
let submit = () => {
  Inertia.post('/users', form);
};

       
</script>

