<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import JetActionMessage from '@/Components/ActionMessage.vue';
import JetButton from '@/Components/Button.vue';
import JetFormSection from '@/Components/FormSection.vue';
import JetInput from '@/Components/Input.vue';
import JetInputError from '@/Components/InputError.vue';
import JetLabel from '@/Components/Label.vue';
import PostFeed from '@/Pages/PostFeed.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    filter: Object,
});

const form = useForm({
    name: 'updateFilter',
});

const updateFilter = () => {

};
</script>

<template>
    <AppLayout title="Поиск постов ВКонтакте">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Поиск постов ВКонтакте
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div>
                                <JetApplicationLogo class="block h-12 w-auto" />
                            </div>

                            <div class="mt-8 text-2xl">
                                Вы находитесь на странице <h3>Поиск постов ВКонтакте</h3>
                            </div>
                        </div>

                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1">
                            <div class="p-6">
                                <JetFormSection class="mt-0" @submitted="false">
                                    <template #title>
                                        <div class="flex items-center">
                                            <svg
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                                class="w-8 h-8 text-gray-400"
                                            ><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                                <h4>Фильтр</h4>
                                            </div>
                                        </div>
                                    </template>

                                    <template #description>
                                        <p>Введите запрос поиска с текстом, тегами и упоминаниями.</p>
                                        <p>Для добавления или исключения тега к фильтру используйте префиксы +# и -#,</p>
                                        <p>упоминаний - префиксы +@ и -@.</p>
                                    </template>

                                    <template #form>
                                        <div class="col-span-6 sm:col-span-4">
                                            <JetLabel for="name" value="Строка поиска" />

                                            <JetInput
                                                id="name"
                                                type="text"
                                                class="mt-1 block w-full"
                                            />

                                            <JetInputError :message="form.errors.name" class="mt-2" />
                                        </div>
                                    </template>

                                    <template #actions>
                                        <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            Искать
                                        </JetButton>
                                    </template>
                                </JetFormSection>
                            </div>

                            <div class="p-6 border-t border-gray-200 md:border-l">
                                <div class="flex items-center">
                                    <svg
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        class="w-8 h-8 text-gray-400"
                                    ><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                        <h4>Посты Вконтакте</h4>
                                    </div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        <PostFeed></PostFeed>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
