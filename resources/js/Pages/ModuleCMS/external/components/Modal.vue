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
            class="modal-container bg-gray-50 md:w-11/12 sm:w-full mx-auto p-6 rounded shadow-lg overflow-auto"
        >
            <div class="modal-header">
                <h2 class="text-xl font-semibold">Modal Title</h2>
                <button @click="closeModal" class="modal-close">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <div class="modal-body">
                <Form />
                lorem
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
    max-height: 80vh;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.modal-close {
    cursor: pointer;
}
</style>
