<template>
  <Head title="Log In" />
  <main>
    <section>
      <form @submit.prevent="submit">
        <h2 style="text-align: center;">Log In</h2>
        <div>
          <label for="email"> Email </label>

          <input v-model="form.email" type="email" name="email" id="email" required />

          <div v-if="form.errors.email" v-text="form.errors.email"></div>
        </div>

        <div>
          <label for="password"> Password </label>

          <input v-model="form.password" type="password" name="password" id="password" />

          <div v-if="form.errors.password" v-text="form.errors.password"></div>
        </div>

        <div>
          <button type="submit" :disabled="form.processing">
            Log In
          </button>
        </div>
      </form>
    </section>
  </main>
  <ErrorPage :status="status" />
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';
import ErrorPage from './ErrorPage.vue';

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
input{
  width: 100%;
  padding: 12px 30px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button{
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

form{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
  display: inline-block;
  margin-left: 40%;
  margin-top: 10%;

}
</style>
