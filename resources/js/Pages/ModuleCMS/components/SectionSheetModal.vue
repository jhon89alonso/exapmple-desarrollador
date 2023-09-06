<script setup>
import axios from "axios";
import { computed, onMounted, onUnmounted, ref, watch } from "vue";
import TableSectionSheet from "./tables/TableSectionSheet.vue";
import { useForm, Field, defineRule } from "vee-validate";
import * as Yup from "yup";

const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: "2xl",
    },
    closeable: {
        type: Boolean,
        default: true,
    },
    actionModal: {
        type: String,
        default: null,
    },
    titleModal: {
        type: String,
        default: null,
    },
});

const emit = defineEmits(["close"]);
const action = ref("");
const tableSection = ref(null);

watch(
    () => props.show,
    () => {
        if (props.show) {
            document.body.style.overflow = "hidden";
        } else {
            document.body.style.overflow = null;
        }
    }
);

const close = () => {
    if (props.closeable) {
        emit("close");
    }
};
const closeModal = () => {
    // Emitir un evento para cerrar el modal
    emit("close");
};

const closeOnEscape = (e) => {
    if (e.key === "Escape" && props.show) {
        close();
    }
};

onMounted(() => document.addEventListener("keydown", closeOnEscape));

onUnmounted(() => {
    document.removeEventListener("keydown", closeOnEscape);
    document.body.style.overflow = null;
});

const maxWidthClass = computed(() => {
    return {
        sm: "sm:max-w-sm",
        md: "sm:max-w-md",
        lg: "sm:max-w-lg",
        xl: "sm:max-w-xl",
        "2xl": "sm:max-w-2xl",
    }[props.maxWidth];
});

const form = ref({
    id: "",
    name: "",
    description: "",
});

const { errors, handleSubmit, defineInputBinds } = useForm({
    validationSchema: Yup.object({
        name: Yup.string()
            .nullable()
            .min(3, "El nombre debe tener al menos 3 caracteres")
            .max(50, "El nombre no debe contener más de 50 caracteres")
            .required("El nombre es requerido"),
    }),
});

const cleanForm = () => {
    form.value.id = null;
    form.value.name = null;
    form.value.description = null;
    action.value = null;
};

const sendForm = (event) => {
    let urlStore = `/admin/section_external_content`;
    let urlUpdate = `/admin/section_external_content/${form.value.id}`;
    // console.log(action);
    if (action.value == "edit") {
        axios
            .put(urlUpdate, form.value)
            .then((response) => {
                console.log(response.data.msg);
                response.msg;
            })
            .catch((errors) => console.log(errors));
    }
    if (action.value == null || action.value == "") {
        // console.log(urlStore, form.value);
        axios
            .post(urlStore, form.value)
            .then((response) => {
                console.log("guardando");
                console.log(response.data.msg);
            })
            .catch((errors) => console.log(errors));
    }
    cleanForm();
    tableSection.value.sectionTable();
};

const sectionEdit = (item, actionPost) => {
    action.value = actionPost;
    form.value = {
        id: item.id,
        name: item.name,
        description: item.description,
    };
};
</script>

<template>
    <div
        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-70"
    >
        <div class="modal-overlay"></div>

        <div
            class="modal-container bg-gray-50 md:w-11/12 sm:w-full mx-auto rounded shadow-lg overflow-auto"
        >
            <div class="modal-header bg-purple-100 py-2 pl-8 pr-2 w-full">
                <h2 class="text-2xl font-semibold">{{ titleModal }}</h2>
                <button @click="closeModal" class="modal-close">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <div class="modal-body mb-2">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="my-1">
                        <label
                            for="name_section"
                            class="block mb-2 text-sm font-medium text-gray-900"
                            >name</label
                        >
                        <input
                            type="text"
                            id="name_section"
                            v-model="form.name"
                            name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name"
                            required
                        />
                    </div>
                    <div class="my-1">
                        <label
                            for="description"
                            class="block mb-2 text-sm font-medium text-gray-900"
                            >description
                        </label>
                        <input
                            type="text"
                            id="description"
                            v-model="form.description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="description"
                        />
                    </div>
                </div>

                <div class="pt-4">
                    <TableSectionSheet
                        @editSection="sectionEdit"
                        ref="tableSection"
                    />
                </div>
            </div>
            <div class="modal-footer bg-yellow-400 pt-4 flex px-4">
                <button
                    @click="closeModal"
                    class="relative inline-flex items-center text-red-800 justify-center mb-2 mr-2 overflow-hidden text-md font-medium px-5 py-2.5 transition-all ease-in duration-75 bg-white border-2 border-red-600 hover:text-red-600 rounded-md hover:border-3 hover:bg-opacity-50"
                >
                    Cerrar
                </button>
                <button
                    @click="sendForm"
                    class="relative inline-flex items-center text-blue-800 justify-center mb-2 mr-2 overflow-hidden text-md font-medium px-5 py-2 transition-all ease-in duration-75 bg-white border-2 border-blue-600 hover:text-blue-600 rounded-md hover:border-3 hover:bg-opacity-50"
                >
                    <i class="fas fa-save fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Estilos Tailwind para el modal */
.modal-overlay {
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-container {
    max-height: 90vh;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
}
.modal-body {
    padding: 10px 20px;
}

.modal-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    bottom: 0;
}

.modal-close {
    cursor: pointer;
}
</style>
