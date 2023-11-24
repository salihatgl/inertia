<template> 
<Head title="Create User" />
<main class="form-signin">
   <form @submit.prevent="submit" >
    <h2 style="text-align: center;">Register</h2>
    <div class="form-floating">
      <input  v-model="form.name" type="name" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input  v-model="form.email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input  v-model="form.password" type="password" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Password</label>
    </div>
     <button class="w-100 btn btn-lg btn-primary mb-4" type="submit" :disabled="form.processing">Submit</button> <!-- :disabled="form.processing"  form işleniyor ise düğme pasif hale getirilir. -->
   </form>
</main>
</template>
<script setup>
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
// import { useRemember } from '@inertiajs/vue3'

// const form = useRemember({
//   name: null,
//   email: null,
//   password: null,
// });


let form = reactive({
  name: '',
  email: '',
  password: '',

});

let submit = () => {
  Inertia.post('/users', form);
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
.form-signin input[type="name"] {
  margin-bottom: 20px;

}
form-control{
  margin-bottom: 20px;
}
</style> 

