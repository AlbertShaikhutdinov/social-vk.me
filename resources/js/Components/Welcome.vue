<script setup>
import JetApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <JetApplicationLogo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                Вы находитесь в административной панели <h3>Aris.Ai v1.0.1</h3>
            </div>


            <div class="mt-6 text-gray-500">
                ИС, реализована на принципах:
                <ul>
                    <li>1) конечного автомата.</li>
                    <li>2) событийно-ориентированное программирования внутренней логики (т.е. хранимых процедур).</li>
                    <li>3) триггерной реакции на воздействие с окружающей средой (таблица SpeechJournal).</li>
                </ul>
            </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
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
                        <a href="https://laravel.com/docs">Документация</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        <ul>
                            <li>Разбор лексики производился по функционально-сущностному принципу, словарь ИС заполнялся с нуля.</li>
                            <li><br></li>
                            <li>ВАЖНО: поле ConformityPercentage есть вещественного типа и принимает значения в интервале [-1 .. 0 .. 1].
                                Где 1 - означает полный синоним для связи, -1 - полный антоним, 0 - значение этой связи системе пока не известно,
                                null - чтобы система могла обнулить ошибочно сформированнную связь.</li>
                        </ul>
                    </div>

                    <a href="https://laravel.com/docs">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Почитать</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                            </div>
                        </div>
                    </a>
                </div>
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
                    ><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                        Безопасность пароля и шифрование токенов сессии
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        Слои аутентификации и регистрации обеспечиваются технологиями Laravel Jetstream. Ваш пароль и данные хранятся только в зашифрованном виде.
                        Передача данных по каналам связи производится по https протоколу с подтвержденным российским ssl сертификатом.
                    </div>

                    <a href="https://jetstream.laravel.com/2.x/installation.html">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Почитать</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
