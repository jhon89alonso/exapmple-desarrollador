<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    last_name: user.last_name,
    email: user.email,
    type_document: user.type_document,
    document: user.document,
    phone: user.phone,
    id_area: user.id_area,
    area: user.area,
});
</script>

<template>
    <section >
        <header class="flex justify-between">
            <h2 class="text-lg font-medium text-gray-900">
                Información de perfil
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Actualiza la información de contacto en tu cuenta
            </p>
            <NavLink
                :href="route('dashboard')"
                class=" text-green-600 border border-green-600 px-8 py-2 rounded-md hover:bg-green-700 hover:text-white"
            >
                Inicio
            </NavLink>
        </header>

        <form
            @submit.prevent="form.patch(route('profile.update'))"
            class="mt-6 space-y-6"
        >
            <div>
                <InputLabel for="name" value="Nombre" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div>
                <InputLabel for="last_name" value="Apellido" />

                <TextInput
                    id="last_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.last_name"
                    required
                    autofocus
                    autocomplete="last_name"
                />

                <InputError class="mt-2" :message="form.errors.last_name" />
            </div>

            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    disabled
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mt-4">
                <InputLabel for="type_document" value="Tipo de Documento" />

                <div class="flex">
                    <div class="flex items-center mr-4">
                        <input
                            checked
                            id="radio-type_document"
                            type="radio"
                            :value="1"
                            v-model="form.type_document"
                            name="inline-radio-group"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <InputLabel
                            for="radio-type_document"
                            value="Cedula Ciudadania"
                        />
                    </div>
                    <div class="flex items-center mr-4">
                        <input
                            id="inline-2-radio"
                            type="radio"
                            :value="2"
                            v-model="form.type_document"
                            name="inline-radio-group"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <InputLabel
                            for="radio-type_document"
                            value="Cedula extranjera"
                        />
                    </div>
                    <div class="flex items-center mr-4">
                        <input
                            id="inline-checked-radio"
                            type="radio"
                            :value="3"
                            v-model="form.type_document"
                            name="inline-radio-group"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <InputLabel
                            for="radio-type_document"
                            value="Pasaporte"
                        />
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <InputLabel for="document" value="Número de documento" />

                <TextInput
                    id="document"
                    type="number"
                    class="mt-1 block w-full"
                    min="5"
                    v-model="form.document"
                    required
                />

                <InputError class="mt-2" :message="form.errors.document" />
            </div>
            <div class="mt-4">
                <InputLabel for="phone" value="Número de Contacto" />

                <TextInput
                    id="phone"
                    type="number"
                    class="mt-1 block w-full"
                    min="5"
                    v-model="form.phone"
                    required
                />

                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <p class="text-sm mt-2 text-gray-800">
                    Your email address is unverified.
                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Click here to re-send the verification email.
                    </Link>
                </p>

                <div
                    v-show="status === 'verification-link-sent'"
                    class="mt-2 font-medium text-sm text-green-600"
                >
                    A new verification link has been sent to your email address.
                </div>
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing"
                    >Guardar</PrimaryButton
                >

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600"
                    >
                        Guardar.
                    </p>
                </Transition>
            </div>
        </form>
    </section>
</template>
