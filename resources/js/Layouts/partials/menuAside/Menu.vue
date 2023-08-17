<template>
    <aside class="left-0">
        <div
            v-show="menuAside"
            class="bg-gray-400 lg:py-2 lg:pl-2 w-60 fixed z-40 top-0 h-screen transition-position overflow-hidden"
        >
            <div class="flex flex-row h-14 items-center justify-between">
                <div
                    class="text-center flex-1 lg:text-left lg:pl-6 xl:text-center xl:pl-0"
                >
                    <b class="font-black">Menu</b>
                </div>
                <button
                    @click="closeAsideBar"
                    class="lg:inline-block p-3 bg-black text-white"
                >
                    close
                </button>
            </div>
        </div>
    </aside>
</template>

<script setup>
import { ref, defineEmits, defineExpose } from "vue";

const emit = defineEmits(["open-aside-bar", "close-aside-bar"]);
const menuAside = ref(false);

const openAsideBar = (event) => {
    menuAside.value = true;
    emit("open-aside-bar", event);
};
const closeAsideBar = (event) => {
    menuAside.value = false;
    emit("close-aside-bar", event);
};

// Exporta el método openAsideBar para que esté disponible en el componente padre
defineExpose({menuAside, openAsideBar});
</script>
