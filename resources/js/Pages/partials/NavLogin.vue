<template>
    <div v-if="canLogin" class="">
        <Link
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="bg-black hover:bg-gray-700 text-white font-bold px-1 xl:px-4 py-2 xl:py-3 rounded"
            >Dashboard</Link
        >

        <template v-else>
            <Link
                :href="route('login')"
                class="bg-black hover:bg-gray-700 text-white font-bold px-1 xl:px-4 py-2 xl:py-3 rounded"
                >Ingresar</Link
            >

            <Link
                v-if="canRegister"
                :href="route('register')"
                class="bg-black hover:bg-gray-700 text-white font-bold px-1 xl:px-4 py-2 xl:py-3 rounded"
                >Registrarse</Link
            >
        </template>
    </div>
    <div class=" text-white">test</div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>
