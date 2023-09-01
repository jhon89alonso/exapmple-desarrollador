<script setup>
import { computed, onMounted, onUnmounted, watch } from "vue";
import Form from "./Form.vue";

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

// defineExpose()
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
                <Form />
            </div>
            <div class="modal-footer bg-gray-400 pt-4 flex px-4">
                <button
                    @click="closeModal"
                    class="relative inline-flex items-center text-red-800 justify-center mb-2 mr-2 overflow-hidden text-md font-medium px-5 py-2.5 transition-all ease-in duration-75 bg-white border-2 border-red-600 hover:text-red-600 rounded-md hover:border-3 hover:bg-opacity-50"
                >
                    Cerrar
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
