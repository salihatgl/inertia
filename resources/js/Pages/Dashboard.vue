<template>
    <div style="background-color: #333; padding: 10px;">
  <a href="#" style="color: white; text-decoration: none; margin: 0 10px;">Ana Sayfa</a>
  <Link href="/users" style="color: white; text-decoration: none; margin: 0 10px;">Users</Link>
  <Link href="/logout" method="post" style="color: white; text-decoration: none; margin: 0 10px; float: right;">Logout</Link>
  <a href="#" style="color: white; text-decoration: none; margin: 0 20px; float: right;">{{ user.name }}</a>
</div>

<Link  href="/users/create"  style="color: black; text-decoration: none; margin: 0 10px;">Logout</Link> <!-- v-if="can.createUser" -->

</template>

<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { Link} from '@inertiajs/vue3';


const page = usePage()
const user = computed(() => page.props.auth.user)
// let props = defineProps({
//     can: {
//       type: Object,
//       default: () => ({ createUser:false }),
//     },
//   });
</script>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>





