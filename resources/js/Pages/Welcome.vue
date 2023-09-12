<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import '../../../public/css/landing-page.css';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    arisVersion: String,
});
</script>

<template>
    <Head title="Автоматическая развиваемая информационная система" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div v-if="canLogin" class="hidden px-6 py-4 sm:block">
                    <div class="mb-4 flex justify-center mt-4 sm:items-center sm:justify-between">
                        <div class="ml-4 mb-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            <h3>Aris.Ai v{{ arisVersion }}</h3>
                            <p>(Laravel v{{ laravelVersion }},</p>
                            <p>PHP v{{ phpVersion }})</p>
                        </div>

                        <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Административная панель</Link>

                        <template v-else>
                            <Link v-if="canRegister" :href="route('register')" class="text-sm text-gray-700 dark:text-gray-500 underline">Выбрать пароль <i class="ml-1 mr-1 fa-solid fa-lock-open"></i></Link>
                            <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline">Вход <i class="ml-1 mr-1 fa-solid fa-database"></i></Link>
                        </template>
                    </div>

                    <!--Company Banner-->
                    <a name="contact">
                        <!-- Custom CSS -->
                        <link href="css/landing-page.css" rel="stylesheet"></a>
                    <div class="banner">

                        <div class="container">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h2>Российские вычислительные машины, комплексы, системы и сети</h2>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-inline banner-social-buttons">
                                        <li>
                                            <a href="https://vk.com/zaharkrivtsov" class="btn btn-default btn-lg"><i class="fa-brands fa-vk"></i> <span class="network-name">Вконтакте</span></a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/ZaharKrivtsov" class="btn btn-default btn-lg"><i class="fa-brands fa-telegram"></i> <span class="network-name">Telegram</span></a>
                                        </li>
                                        <li>
                                            <a href="https://gitlab.com/arisai1" class="btn btn-default btn-lg"><i class="fa-brands fa-gitlab"></i> <span class="network-name">GitLab</span></a>
                                        </li>
                                        <hr class="intro-divider">
                                    </ul>
                                    <ul class="list-inline intro-social-buttons banner-social-buttons">
                                        <li>
                                            <a href="mailto:rvmkss@vk.com&body=Хочу подписаться на новости НИИ?subject=Вычислительные машины, комплексы, системы и сети" class="btn btn-danger btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">rvmkss@vk.com</span></a>
                                        </li>
                                        <li>
                                            <a href="tel:+79958878116" class="btn btn-danger btn-lg"><i class="fa fa-phone fa-fw"></i> <span class="network-name">+7 (995) 887-81-16</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- /.container -->

                    </div>
                    <!-- /.banner -->

                    <!-- Footer -->
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="flex col-lg-8">
                                    <span class="copyright text-muted small"><a href="http://shaikhutdinov.ru/" target="_blank">Шайхутдинов</a> 2022-2023.
                                        <br><a href="https://rvmkss.ru/">НИИ Российские вычислительные машины, комплексы, системы и сети</a></span>
                                </div>
                                <div class="flex col-lg-4">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="/">Главная</a>
                                        </li>
                                        <li class="footer-menu-divider">&sdot;</li>
                                        <li>
                                            <a href="http://shaikhutdinov.ru/">Шайхутдинов.ru</a>
                                        </li>
                                        <li class="footer-menu-divider">&sdot;</li>
                                        <li>
                                            <a href="http://rcppe.ru/projects">Научные проекты</a>
                                        </li>
                                        <li class="footer-menu-divider">&sdot;</li>
                                        <li>
                                            <a href="http://zadat-vopros-putinu.ru/">Государственная поддержка</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</template>
