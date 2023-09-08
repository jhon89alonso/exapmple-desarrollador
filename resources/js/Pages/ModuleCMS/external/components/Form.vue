<template>
    <form>
        <div class="grid gap-6 mb-2 md:grid-cols-3">
            <div>
                <label
                    for="content_section"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Seccion a mostrar</label
                >
                <select
                    v-model="form.content_section"
                    name="content_section"
                    id="content_section"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option
                        v-for="(section, i) in sections"
                        :value="section.id"
                    >
                        {{ section.name }}
                    </option>
                </select>
            </div>
            <div>
                <label
                    for="content_type"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Tipo de contenido</label
                >
                <select
                    v-model="form.content_type"
                    name="content_type"
                    id="content_type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option v-for="(type, i) in contentsType" :value="type.id">
                        {{ type.label }}
                    </option>
                </select>
            </div>
            <div hidden>
                <label
                    for="content_father"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_father</label
                >
                <input
                    type="text"
                    v-model="form.content_father"
                    id="content_father"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_father"
                    required
                />
            </div>
            <div hidden>
                <label
                    for="content_grandson"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_grandson</label
                >
                <input
                    type="tel"
                    v-model="form.content_grandson"
                    id="content_grandson"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_grandson"
                    required
                />
            </div>
            <div>
                <label
                    for="content_columns"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Tamaño de contenedor
                </label>
                <select
                    v-model="form.content_columns"
                    name="content_columns"
                    id="content_columns"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option
                        v-for="(columns, i) in contentsColums"
                        :value="columns.id"
                    >
                        {{ columns.label }}
                    </option>
                </select>
            </div>
            <div>
                <label
                    for="content_columns_sons"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Número de columnas de contenedor</label
                >
                <select
                    v-model="form.content_columns_sons"
                    name="content_columns_sons"
                    id="content_columns_sons"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option
                        v-for="(columnsSon, i) in contentsColumsSons"
                        :value="columnsSon.id"
                    >
                        {{ columnsSon.label }}
                    </option>
                </select>
            </div>
            <div class="">
                <label
                    for="content_align"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Alineación de contenido
                </label>
                <select
                    v-model="form.content_align"
                    name="content_align"
                    id="content_align"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option
                        v-for="(align, i) in contentAlign"
                        :value="align.id"
                    >
                        {{ align.label }}
                    </option>
                </select>
            </div>
            <div class="">
                <label
                    for="content_background_color"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Color de fondo</label
                >
                <input
                    type="color"
                    v-model="form.content_background_color"
                    id="content_background_color"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
            </div>
            <div class="">
                <label
                    for="content_background_image"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_background_image</label
                >
                <input
                    type="password"
                    id="content_background_image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="•••••••••"
                    required
                />
            </div>
        </div>
        <div class="grid gap-6 mb-2 md:grid-cols-3"></div>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div class="my-1 col-span-2">
                <label
                    for="content_title"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Titulo</label
                >
                <input
                    type="text"
                    id="content_title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Ejem: La vida es bella"
                    required
                />
            </div>
            <div class="my-5">
                <label
                    class="relative inline-flex items-center cursor-pointer"
                    for="content_show_title"
                >
                    <input
                        v-model="form.content_show_title"
                        id="content_show_title"
                        type="checkbox"
                        value=""
                        class="sr-only peer"
                        checked
                    />
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
                    ></div>
                    <span class="ml-3 text-sm font-medium text-gray-900"
                        >Mostar titulo</span
                    >
                </label>
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div class="my-1">
                <label
                    for="content_title_align"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Alineación de Titulo
                </label>
                <select
                    v-model="form.content_title_align"
                    name="content_align"
                    id="content_align"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option
                        v-for="(align, i) in contentAlign"
                        :value="align.id"
                    >
                        {{ align.label }}
                    </option>
                </select>
            </div>
            <div class="my-1">
                <label
                    for="content_title_size"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Tamaño de Fuente titulo
                </label>
                <select
                    v-model="form.content_title_size"
                    name="content_title_size"
                    id="content_title_size"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                >
                    <!-- <option value=""></option> -->
                    <option
                        v-for="(size, i) in contentTitleSize"
                        :value="size.id"
                    >
                        {{ size.label }}
                    </option>
                </select>
            </div>
        </div>
        <div class="grid gap-6 mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900"
                >Introducción
            </label>
            <ckeditor :editor="editor" v-model="form.content_intro"></ckeditor>
        </div>
        <div class="grid gap-6 mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900"
                >Descripción
            </label>
            <ckeditor
                :editor="editor"
                rows="10"
                v-model="form.content_description"
            ></ckeditor>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div class="my-1">
                <label
                    for="content_url"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >URL</label
                >
                <input
                    type="text"
                    id="content_url"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Ejem: https://example.com"
                />
            </div>
            <div class="my-1">
                <label class="block mb-2 text-sm font-medium text-gray-900"
                    >Abrir enlace en:</label
                >
                <div class="flex" id="content_url_target">
                    <div class="flex items-center mr-4">
                        <input
                            type="radio"
                            v-model="form.content_url_target"
                            :value="1"
                            checked
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                        />
                        <label class="ml-2 text-sm font-medium text-gray-900"
                            >Nueva hoja
                        </label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input
                            type="radio"
                            v-model="form.content_url_target"
                            :value="2"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                        />
                        <label class="ml-2 text-sm font-medium text-gray-900"
                            >Hoja actual</label
                        >
                    </div>
                </div>
            </div>

            <div class="my-1">
                <label
                    class="relative inline-flex items-center cursor-pointer"
                    for="content_show_image"
                >
                    <input
                        v-model="form.content_content_show_imageshow_title"
                        id="content_show_image"
                        type="checkbox"
                        value=""
                        class="sr-only peer"
                        checked
                    />
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
                    ></div>
                    <span class="ml-3 text-sm font-medium text-gray-900"
                        >Mostar imagen</span
                    >
                </label>
            </div>

            <div class="my-1">
                <label
                    for="content_image"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_image</label
                >
                <input
                    type="email"
                    id="content_image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                />
            </div>
            <div class="my-1">
                <label
                    for="content_video"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_video</label
                >
                <input
                    type="email"
                    id="content_video"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                />
            </div>
            <div class="my-1" hidden>
                <label
                    for="content_order"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_order</label
                >
                <input
                    type="email"
                    id="content_order"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                />
            </div>
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input
                    id="remember"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                    required
                />
            </div>
            <label
                for="remember"
                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >I agree with the
                <a
                    href="#"
                    class="text-blue-600 hover:underline dark:text-blue-500"
                    >terms and conditions</a
                >.</label
            >
        </div>
        <button
            type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Submit
        </button>
    </form>
</template>
<script setup>
import { onMounted } from "vue";
import { ref } from "vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import {
    contentsType,
    contentsColums,
    contentsColumsSons,
    contentAlign,
    contentTitleSize,
} from "@/helpers/ContentsExternal";

const sections = ref(null);
const getSection = onMounted(async () => {
    try {
        const response = await fetch(`/admin/section_external_content`);
        const values = await response.json();
        sections.value = values.data;
    } catch (error) {
        console.log(error);
    }
});
const editor = ref(ClassicEditor);

const language = ref("es");

const form = ref({
    content_section: "",
    content_type: "",
    content_father: "",
    content_grandson: "",
    content_columns: "",
    content_columns_sons: "",
    content_background_color: "",
    content_background_image: "",
    content_align: "",
    content_show_title: "",
    content_title_align: "",
    content_title_size: "",
    content_title: "",
    content_intro: "",
    content_description: "",
    content_url: "",
    content_url_target: "",
    content_show_image: "",
    content_image: "",
    content_video: "",
    content_order: "",
});
</script>
<style lang="css" scoped>
.ck-editor .ck-editor__main .ck-content {
    height: 500px !important;
}
</style>
