<script setup>
import AuthenticatedLayout from "@/Layouts/LayoutCMS.vue";
import Menu from "@/Layouts/partials/menuAside/Menu.vue";
import { Head } from "@inertiajs/vue3";
import Modal from "./components/Modal.vue";
import { inject, ref } from "vue";
const swal = inject("$swal");
const showModalExpose = ref(false);

const showModal = () =>{
    showModalExpose.value = true
}
const showAlert = (event) => {
    // Use sweetalert2
};
</script>
<template>
    <Head title="External content" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                contenido externo
            </h2>
        </template>
        <Modal v-show="showModalExpose" @close="showModalExpose = false" />
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <button
                        type="button"
                        @click="showModal"
                        data-modal-target="defaultModal"
                        data-modal-toggle="defaultModal"
                        class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                    >
                        <i class="fa-solid fa-circle-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
