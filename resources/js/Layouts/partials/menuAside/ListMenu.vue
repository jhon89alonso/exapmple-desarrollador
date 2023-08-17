<template>
    <ul>
        <li class="text-center" v-for="i in numlietstest">
            <i class="far fa-window-close"></i> {{ i }}
        </li>
    </ul>
</template>

<script setup>
import { ref } from "vue";

const numlietstest = ref(10);
</script>
