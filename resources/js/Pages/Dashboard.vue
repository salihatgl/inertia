<template>
     <Loginavbar></Loginavbar>
</template>
<script setup>
import { computed, ref } from 'vue';
import { usePage, Link } from '@inertiajs/vue3';
import Loginavbar from '@/Pages/Loginavbar.vue';

 const page = usePage();
 const user = computed(() => page.props.auth.user)


</script>





