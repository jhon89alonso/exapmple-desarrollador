<template>
    <form>
        <div class="grid gap-6 mb-2 md:grid-cols-3">
            <div>
                <label
                    for="content_section"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_section</label
                >
                <input
                    type="text"
                    id="content_section"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_section"
                    required
                />
            </div>
            <div>
                <label
                    for="content_type"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_type</label
                >
                <input
                    type="text"
                    id="content_type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_type"
                    required
                />
            </div>
            <div>
                <label
                    for="content_father"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_father</label
                >
                <input
                    type="text"
                    id="content_father"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_father"
                    required
                />
            </div>
            <div>
                <label
                    for="content_grandson"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_grandson</label
                >
                <input
                    type="tel"
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
                    >content_columns
                </label>
                <input
                    type="url"
                    id="content_columns"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_columns"
                    required
                />
            </div>
            <div>
                <label
                    for="content_columns_sons"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_columns_sons</label
                >
                <input
                    type="number"
                    id="content_columns_sons"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_columns_sons"
                    required
                />
            </div>
        </div>
        <div class="grid gap-6 mb-2 md:grid-cols-3">
            <div class="my-1">
                <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_background_color</label
                >
                <input
                    type="email"
                    id="content_background_color"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
            </div>
            <div class="my-1">
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
            <div class="my-1">
                <label
                    for="content_align"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_align
                </label>
                <input
                    type="password"
                    id="content_align"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="•••••••••"
                    required
                />
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div class="my-1">
                <label
                    for="content_show_title"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_show_title</label
                >
                <input
                    type="password"
                    id="content_show_title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="•••••••••"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_title_align"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_title_align
                </label>
                <input
                    type="password"
                    id="content_title_align"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="•••••••••"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_title_size"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_title_size</label
                >
                <input
                    type="email"
                    id="content_title_size"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div class="my-1">
                <label
                    for="content_title"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_title</label
                >
                <input
                    type="password"
                    id="content_title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="•••••••••"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_intro"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_intro
                </label>
                <input
                    type="password"
                    id="content_intro"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_intro"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_description"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_description</label
                >
                <input
                    type="email"
                    id="content_description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_url"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_url</label
                >
                <input
                    type="email"
                    id="content_url"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_url_target"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_url_target</label
                >
                <input
                    type="email"
                    id="content_url_target"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
            </div>
            <div class="my-1">
                <label
                    for="content_show_image"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >content_show_image</label
                >
                <input
                    type="email"
                    id="content_show_image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="content_background_color"
                    required
                />
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
                    required
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
                    required
                />
            </div>
            <div class="my-1">
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
                    required
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
import { ref } from "vue";

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
