<template>
    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
        <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre Sección</th>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="px-6 py-3">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(section, index) in sections"
                    :key="index"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ section.name }}
                    </th>
                    <td class="px-6 py-4">{{ section.description }}</td>
                    <td class="px-6 py-4">
                        <div
                            class="inline-flex rounded-md shadow-sm"
                            role="group"
                        >
                            <button
                                type="button"
                                @click="getSectionEdit(section)"
                                class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-l-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700"
                            >
                                Editar
                            </button>
                            <button
                                type="button"
                                class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-r-md hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700"
                            >
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script setup>
import { onMounted } from "vue";
import { ref } from "vue";

const sections = ref(null);

const emit = defineEmits(["edit-section", "clean-section-table"]);
const sectionTable = onMounted(async () => {
    try {
        const response = await fetch(`/admin/section_external_content`);
        const values = await response.json();
        sections.value = values.data;
    } catch (error) {
        console.log(error);
    }
});
const getSectionEdit = (value) => {
    let action = "edit";
    // console.log(value.id);
    emit("edit-section", value, action);
};

const cleanSectionTable = () => {
    console.log("metodo hijo");
    // sectionTable();
    emit("clean-section-table");
};

defineExpose({cleanSectionTable,sectionTable})
</script>
