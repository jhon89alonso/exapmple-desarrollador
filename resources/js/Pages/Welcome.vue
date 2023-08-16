<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLogin from "./partials/NavLogin.vue";
import HeaderExternal from "../Layouts/partials/HeaderExternal.vue";
import FooterExternal from "../Layouts/partials/FooterExternal.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div
        class="m-0 font-sans antialiased font-normal bg-gray-500 text-start text-base leading-default text-slate-500"
    >
        <Head title="System developer" />
        <HeaderExternal />
        <NavLogin canLogin="canLogin" canRegister="canRegister" />
        <!-- component -->
        <!-- component -->
        <div class="p-6 py-12">
            <div class="container mx-auto">
                <div
                    class="flex flex-col lg:flex-row items-center justify-between"
                >
                    <h2 class="text-center text-6xl tracki font-bold">
                        Up to <br class="sm:hidden" />50% Off
                    </h2>
                    <div class="space-x-2 text-center py-2 lg:py-0">
                        <span>Plus free shipping! Use code:</span>
                        <span class="font-bold text-lg">MAMBA</span>
                    </div>
                    <a
                        href="#"
                        rel="noreferrer noopener"
                        class="px-5 mt-4 lg:mt-0 py-3 rounded-md border block"
                        >Shop Now</a
                    >
                </div>
            </div>
        </div>
        <!-- component -->
        <section>
            <div class="bg-black text-white py-20">
                <div
                    class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24"
                >
                    <div
                        class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8"
                    >
                        <h1
                            class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose"
                        >
                            TechFest
                        </h1>
                        <h2
                            class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2"
                        >
                            Space : The Timeless Infinity
                        </h2>
                        <p class="text-sm md:text-base text-gray-50 mb-4">
                            Explore your favourite events and register now to
                            showcase your talent and win exciting prizes.
                        </p>
                        <a
                            href="#"
                            class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent"
                        >
                            Explore Now</a
                        >
                    </div>
                    <div
                        class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3 justify-center"
                    >
                        <div class="h-48 flex flex-wrap content-center">
                            <div>
                                <img
                                    class="inline-block mt-28 hidden xl:block"
                                    src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"
                                />
                            </div>
                            <div>
                                <img
                                    class="inline-block mt-24 md:mt-0 p-8 md:p-0"
                                    src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"
                                />
                            </div>
                            <div>
                                <img
                                    class="inline-block mt-28 hidden lg:block"
                                    src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bg-gray-700 text-white py-20">
                <div
                    class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24"
                >
                    <div
                        class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8"
                    >
                        <h1
                            class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose"
                        >
                            TechFest
                        </h1>
                        <h2
                            class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2"
                        >
                            Space : The Timeless Infinity
                        </h2>
                        <p class="text-sm md:text-base text-gray-50 mb-4">
                            Explore your favourite events and register now to
                            showcase your talent and win exciting prizes.
                        </p>
                        <a
                            href="#"
                            class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent"
                        >
                            Explore Now</a
                        >
                    </div>
                    <div
                        class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3 justify-center"
                    >
                        <div class="h-48 flex flex-wrap content-center">
                            <div>
                                <img
                                    class="inline-block mt-28 hidden xl:block"
                                    src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"
                                />
                            </div>
                            <div>
                                <img
                                    class="inline-block mt-24 md:mt-0 p-8 md:p-0"
                                    src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"
                                />
                            </div>
                            <div>
                                <img
                                    class="inline-block mt-28 hidden lg:block"
                                    src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bg-black text-white py-20">
                <div
                    class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24"
                >
                    <div
                        class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8"
                    >
                        <h1
                            class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose"
                        >
                            TechFest
                        </h1>
                        <h2
                            class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2"
                        >
                            Space : The Timeless Infinity
                        </h2>
                        <p class="text-sm md:text-base text-gray-50 mb-4">
                            Explore your favourite events and register now to
                            showcase your talent and win exciting prizes.
                        </p>
                        <a
                            href="#"
                            class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent"
                        >
                            Explore Now</a
                        >
                    </div>
                    <div
                        class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3 justify-center"
                    >
                        <div class="h-48 flex flex-wrap content-center">
                            <div>
                                <img
                                    class="inline-block mt-28 hidden xl:block"
                                    src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"
                                />
                            </div>
                            <div>
                                <img
                                    class="inline-block mt-24 md:mt-0 p-8 md:p-0"
                                    src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"
                                />
                            </div>
                            <div>
                                <img
                                    class="inline-block mt-28 hidden lg:block"
                                    src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-6 sm:py-12 bg-gray-800 text-gray-100">
            <div class="container p-6 mx-auto space-y-8">
                <div class="space-y-2 text-center">
                    <h2 class="text-3xl font-bold">Partem reprimique an pro</h2>
                    <p class="font-serif text-sm text-gray-400">
                        Qualisque erroribus usu at, duo te agam soluta mucius.
                    </p>
                </div>
                <div
                    class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4"
                >
                    <article class="flex flex-col bg-gray-900">
                        <a
                            rel="noopener noreferrer"
                            href="#"
                            aria-label="Te nulla oportere reprimique his dolorum"
                        >
                            <img
                                alt=""
                                class="object-cover w-full h-52 bg-gray-500"
                                src="https://source.unsplash.com/200x200/?fashion?1"
                            />
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                aria-label="Te nulla oportere reprimique his dolorum"
                            ></a>
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                class="text-xs tracki uppercase hover:underline text-violet-400"
                                >Convenire</a
                            >
                            <h3 class="flex-1 py-2 text-lg font-semibold leadi">
                                Te nulla oportere reprimique his dolorum
                            </h3>
                            <div
                                class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400"
                            >
                                <span>June 1, 2020</span>
                                <span>2.1K views</span>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-col bg-gray-900">
                        <a
                            rel="noopener noreferrer"
                            href="#"
                            aria-label="Te nulla oportere reprimique his dolorum"
                        >
                            <img
                                alt=""
                                class="object-cover w-full h-52 bg-gray-500"
                                src="https://source.unsplash.com/200x200/?fashion?2"
                            />
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                aria-label="Te nulla oportere reprimique his dolorum"
                            ></a>
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                class="text-xs tracki uppercase hover:underline text-violet-400"
                                >Convenire</a
                            >
                            <h3 class="flex-1 py-2 text-lg font-semibold leadi">
                                Te nulla oportere reprimique his dolorum
                            </h3>
                            <div
                                class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400"
                            >
                                <span>June 2, 2020</span>
                                <span>2.2K views</span>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-col bg-gray-900">
                        <a
                            rel="noopener noreferrer"
                            href="#"
                            aria-label="Te nulla oportere reprimique his dolorum"
                        >
                            <img
                                alt=""
                                class="object-cover w-full h-52 bg-gray-500"
                                src="https://source.unsplash.com/200x200/?fashion?3"
                            />
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                aria-label="Te nulla oportere reprimique his dolorum"
                            ></a>
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                class="text-xs tracki uppercase hover:underline text-violet-400"
                                >Convenire</a
                            >
                            <h3 class="flex-1 py-2 text-lg font-semibold leadi">
                                Te nulla oportere reprimique his dolorum
                            </h3>
                            <div
                                class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400"
                            >
                                <span>June 3, 2020</span>
                                <span>2.3K views</span>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-col bg-gray-900">
                        <a
                            rel="noopener noreferrer"
                            href="#"
                            aria-label="Te nulla oportere reprimique his dolorum"
                        >
                            <img
                                alt=""
                                class="object-cover w-full h-52 bg-gray-500"
                                src="https://source.unsplash.com/200x200/?fashion?4"
                            />
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                aria-label="Te nulla oportere reprimique his dolorum"
                            ></a>
                            <a
                                rel="noopener noreferrer"
                                href="#"
                                class="text-xs tracki uppercase hover:underline text-violet-400"
                                >Convenire</a
                            >
                            <h3 class="flex-1 py-2 text-lg font-semibold leadi">
                                Te nulla oportere reprimique his dolorum
                            </h3>
                            <div
                                class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400"
                            >
                                <span>June 4, 2020</span>
                                <span>2.4K views</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <FooterExternal />
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
