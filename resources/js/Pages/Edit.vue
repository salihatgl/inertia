<template>
<Loginavbar></Loginavbar>
  <div>
    <main class="form-signin">
      <h2 class="text-center mb-3">Edit Profile</h2>
    <form @submit.prevent="updateProfile">
      <div class="form-floating mb-3">
      <input v-model="form.name" type="text" name="name"  class="form-control" id="floatingNameInput" required>
      <label for="floatingNameInput">Name</label>
    </div>
    <div class="form-floating">
      <input v-model="form.email" type="email" class="form-control" id="floatingInput" required>
      <label for="floatingInput">Email</label>
</div>
      <button class="w-100 btn btn-lg btn-primary mb-4" type="submit">Update Profile</button>
    </form>
  </main>
  </div>
</template>

<script>
import { ref } from 'vue';
import Loginavbar from './Loginavbar.vue';
import { router } from '@inertiajs/vue3';


export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
            },
        };
    },
    mounted() {
        this.form.name = this.$page.props.user.name;
        this.form.email = this.$page.props.user.email;
    },
    methods: {
        updateProfile() {
            router.put('/profile/update', this.form, {
            // handle success, e.g., redirect or show a success message
            });
        },
    },
    components: { Loginavbar }
};
</script>