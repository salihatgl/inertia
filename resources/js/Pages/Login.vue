<template>
<Head title="Log In" />
  <main class="form-signin">
 <form @submit.prevent="submit">
    <h1 class="text-center h3 mb-5 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input  v-model="form.email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
      <div v-if="form.errors.email" v-text="form.errors.email"></div>
     
    </div>
    <div class="form-floating">
      <input  v-model="form.password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      <div v-if="form.errors.password" v-text="form.errors.password"></div>
    </div>

    <button class="w-100 btn btn-lg btn-primary mb-4" type="submit" :disabled="form.processing">Sign in</button>
    
  </form>
  <button class="w-100 btn btn-lg btn-primary" type="submit"><Link style="text-decoration: none; color: white;" href="/users/create">Create User</Link></button>
</main>


</template> 
<script setup>
import { useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/vue3';



const page = usePage();
const status = ref(page.props.status);


 let form = useForm({
    email: '',
    password: ''
  });
let submit = () => {
  form.post('/login');
};

 </script>
<style>
body {

  background-color: #f5f5f5;
}
.form-signin {
  width: 100%;
  max-width: 400px;
  padding: 50px;
  margin: auto;
  margin-top: 10%;
  border: 1px solid gray;
  border-radius: 10px;



}
.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: 20px;
}

.form-signin input[type="password"] {
  margin-bottom: 20px;

}
form-control{
  margin-bottom: 20px;
}
</style> 
