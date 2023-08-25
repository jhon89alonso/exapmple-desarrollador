<template>
    <div class="justify-between hidden sm:flex">
        <select
            id="id"
            v-model="computedValue"
            class="mx-1 px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full"
        >
            <option disabled>test</option>

            <option
                v-for="(index, i) in [1, 2, 3, 4, 5]"
                :key="i"
                :value="index"
            >
                {{ index }}
            </option>
        </select>

        <!-- <textarea
            v-else-if="computedType === 'textarea'"
            :id="id"
            v-model="computedValue"
            :class="inputElClass"
            :name="name"
            :maxlength="maxlength"
            :placeholder="placeholder"
            :required="required"
        /> -->
        <!-- <input
            v-else
            :id="id"
            ref="inputEl"
            v-model="computedValue"
            :name="name"
            :maxlength="maxlength"
            :inputmode="inputmode"
            :autocomplete="autocomplete"
            :required="required"
            :placeholder="placeholder"
            :type="computedType"
            :class="inputElClass"
        /> -->
        <input
            v-model="computedValue"
            class="mx-1 px-3 py-2 max-w-full focus:ring focus:outline-none border-gray-700 rounded w-full"
            placeholder="Ingresa tu busqueda"
        />
    </div>
</template>

<script setup>
import { defineProps, computed } from "vue";

const props = defineProps({
    name: {
        type: String,
        default: null,
    },
    id: {
        type: String,
        default: null,
    },
    autocomplete: {
        type: String,
        default: null,
    },
    maxlength: {
        type: String,
        default: null,
    },
    placeholder: {
        type: String,
        default: null,
    },
    inputmode: {
        type: String,
        default: null,
    },
    icon: {
        type: String,
        default: null,
    },
    options: {
        type: Array,
        default: null,
    },
    type: {
        type: String,
        default: "text",
    },
    modelValue: {
        type: [String, Number, Boolean, Array, Object],
        default: "",
    },
    required: Boolean,
    borderless: Boolean,
    transparent: Boolean,
    ctrlKFocus: Boolean,
});
const computedValue = computed({
    get: () => props.modelValue,
    set: (value) => {
        emit("update:modelValue", value);
    },
});

const computedType = computed(() => (props.options ? "select" : props.type));

const controlIconH = computed(() =>
    props.type === "textarea" ? "h-full" : "h-12"
);
</script>
