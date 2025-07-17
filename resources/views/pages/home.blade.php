@extends('layouts.app')

@section('content')
    <main class="max-w-container mx-auto">
        <section class="p-3 mb-7 md:p-7 2xl:mb-30 2xl:mt-30 2xl:mx-8 select-none">
            <h1 class="text-fluid-xl 2xl:text-[150px] leading-none font-normal m-0 mb-7 2xl:mb-15">Будущее начинается<br>
                здесь</h1>
            <p class="text-xl md:text-[28px] leading-none text-primary/50 max-w-[500px] font-normal m-0">
                Мы предлагаем решения, меняющие бизнес и жизнь, открывая новые горизонты и возможности для роста
            </p>
        </section>

        <section>
            <div class="relative -z-1">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-screen h-px bg-primary/30"></div>
            </div>

            <div class="mb-5 px-3 xl:px- md:mb-10 md:px-7">
                <ul class="flex justify-around items-center font-normal list-none p-0 py-5 m-0">
                    <li class="flex items-center gap-1">
                        <div class="text-2xl md:text-4xl xl:text-5xl">>10</div>
                        <div class="text-[8px] md:text-[10px] xl:text-xs text-primary/50 uppercase">лет<br>на рынке
                        </div>
                    </li>
                    <div class="w-px h-6 md:h-7 xl:h-8 bg-primary/30"></div>
                    <li class="flex items-center gap-1">
                        <div class="text-2xl md:text-4xl xl:text-5xl">>37</div>
                        <div class="text-[8px] md:text-[10px] xl:text-xs text-primary/50 uppercase">
                            счастливых<br>клиентов</div>
                    </li>
                    <div class="w-px h-6 md:h-7 xl:h-8 bg-primary/30"></div>
                    <li class="flex items-center gap-1">
                        <div class="text-2xl md:text-4xl xl:text-5xl">>17</div>
                        <div class="text-[8px] md:text-[10px] xl:text-xs text-primary/50 uppercase">
                            успешных<br>проектов</div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="bg-[#16181D] px-3 py-6 rounded-xl mx-3 md:px-8 md:py-20 md:mx-7 xl:py-30">
            <div class="grid grid-cols-24">
                <div class="col-span-5">
                    <span class="hidden pt-5 uppercase xl:block">Подход</span>
                </div>
                <div class="col-span-full xl:col-span-19 ">
                    <h2 class="text-fluid-lg font-normal m-0 mb-7 md:mb-10">Как мы можем вам помочь</h2>
                </div>
            </div>

            <ul class="flex flex-col xl:flex-row xl:gap-8 gap-4 md:gap-7 list-none m-0 p-0">
                <li class="flex gap-4 xl:flex-col xl:gap-12">
                    <div>
                        <svg class="w-12 h-12 xl:w-34 xl:h-33" viewBox="0 0 136 133" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_2564_16030" fill="white">
                                <path
                                    d="M22.3594 70.997C22.3587 81.5236 26.0079 91.7248 32.6854 99.8624C39.3628 108 48.6553 113.571 58.9795 115.625C69.3037 117.679 80.0208 116.09 89.3048 111.129C98.5889 106.168 105.865 98.1404 109.894 88.4154C113.924 78.6904 114.456 67.8693 111.401 57.7957C108.346 47.7221 101.893 39.0194 93.1411 33.1704C84.3891 27.3214 73.8797 24.6879 63.4037 25.7188C52.9277 26.7496 43.1332 31.3809 35.689 38.8237">
                                </path>
                            </mask>
                            <path
                                d="M20.3594 70.9969C20.3587 81.9862 24.1683 92.6357 31.1393 101.131L34.2315 98.5937C27.8476 90.8138 24.3587 81.061 24.3594 70.9971L20.3594 70.9969ZM31.1393 101.131C38.1102 109.626 47.8112 115.442 58.5892 117.587L59.3698 113.663C49.4994 111.699 40.6154 106.374 34.2315 98.5937L31.1393 101.131ZM58.5892 117.587C69.3672 119.731 80.5554 118.072 90.2475 112.893L88.3622 109.365C79.4863 114.108 69.2402 115.628 59.3698 113.663L58.5892 117.587ZM90.2475 112.893C99.9396 107.713 107.536 99.3334 111.742 89.1809L108.047 87.6499C104.195 96.9474 97.2381 104.622 88.3622 109.365L90.2475 112.893ZM111.742 89.1809C115.948 79.0285 116.504 67.7317 113.315 57.2153L109.487 58.3761C112.408 68.0069 111.899 78.3524 108.047 87.6499L111.742 89.1809ZM113.315 57.2153C110.126 46.6989 103.389 37.6137 94.2524 31.5075L92.0298 34.8332C100.397 40.4252 106.567 48.7453 109.487 58.3761L113.315 57.2153ZM94.2524 31.5075C85.1156 25.4014 74.1443 22.6522 63.2078 23.7284L63.5995 27.7091C73.6151 26.7236 83.6625 29.2413 92.0298 34.8332L94.2524 31.5075ZM63.2078 23.7284C52.2713 24.8045 42.0463 29.6394 34.275 37.4093L37.1031 40.238C44.22 33.1224 53.584 28.6947 63.5995 27.7091L63.2078 23.7284Z"
                                fill="#EAE9F3" mask="url(#path-1-inside-1_2564_16030)"></path>
                            <path class="path-animate-reverse"
                                d="M67.986 1C42.995 13.3138 20.3229 29.4756 1 49.4854C5.12221 78.7306 12.8514 105.154 26.5062 127.729C41.0082 130.045 55.7281 131.131 70.4345 130.987C83.4227 130.861 96.4004 129.774 109.208 127.729C121.832 103.102 130.592 76.6783 134.714 49.4854C116.164 30.2452 93.4921 14.3399 67.986 1Z"
                                stroke="url(#paint0_linear_2564_16030)" stroke-width="2" stroke-linecap="square"
                                stroke-linejoin="round" stroke-dasharray="4 6"></path>
                            <circle cx="67.8594" cy="71" r="19" stroke="#EAE9F3" stroke-width="2"></circle>
                            <defs>
                                <linearGradient id="paint0_linear_2564_16030" x1="16.5" y1="43.5" x2="118.368"
                                    y2="122.258" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7271EF"></stop>
                                    <stop offset="0.374084" stop-color="#232323" stop-opacity="0"></stop>
                                    <stop offset="0.647976" stop-color="#FF5281"></stop>
                                    <stop offset="0.823198" stop-color="#FF5281"></stop>
                                    <stop offset="0.910069" stop-color="#FF7C52"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl leading-none m-0 uppercase font-normal mb-3 xl:text-fluid-xs">Диагностика ИТ
                            инфраструктуры
                        </h3>
                        <p class="text-xl leading-none text-primary/40 m-0 xl:text-fluid-xs">
                            Оценим по стандартам ITIL, COBIT, ITSM состояния всех компонентов системы, включая серверы,
                            сеть, оборудование и программное обеспечение. Выявим уязвимости, проблемы и оптимизационные
                            возможности для повышения производительности, безопасности и надежности ИТ-среды.
                        </p>
                    </div>
                </li>
                <li class="flex gap-4 xl:flex-col xl:gap-12">
                    <div>
                        <svg class="w-12 h-12 xl:w-34 xl:h-33" viewBox="0 0 163 130" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 112H161M84.5918 38L161 38" stroke="#EAE9F3" stroke-width="2"
                                stroke-linecap="square"></path>
                            <path class="path-animate"
                                d="M161 76H21.08C10.5424 76 2 67.3443 2 56.667C2 45.9898 10.5424 37.3341 21.08 37.3341H60.83M42.248 18L61.8738 37.886L43.3392 56.6663"
                                stroke="url(#paint0_linear_1237_14042)" stroke-width="1.6" stroke-linecap="square"
                                stroke-dasharray="4 6"></path>
                            <defs>
                                <linearGradient id="paint0_linear_1237_14042" x1="-15.079" y1="76.0001" x2="161"
                                    y2="76.0001" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#16181D" stop-opacity="0"></stop>
                                    <stop offset="0.300346" stop-color="#7271EF"></stop>
                                    <stop offset="0.828125" stop-color="#FF5281"></stop>
                                    <stop offset="0.973958" stop-color="#FF7C52"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl leading-none m-0 uppercase font-normal mb-3 xl:text-fluid-xs">Автоматизация
                            бизнес процессов
                        </h3>
                        <p class="text-xl leading-none text-primary/40 m-0 xl:text-fluid-xs">
                            Внедряем современные технологии для упрощения и оптимизации рабочих операций, что позволит
                            вам снизить затраты и повысить эффективность. С помощью автоматизации ускорятся бизнес
                            процессы, уменьшатся ошибки и освободится время для стратегических задач.
                        </p>
                    </div>
                </li>
                <li class="flex gap-4 xl:flex-col xl:gap-12">
                    <div>
                        <svg class="w-12 h-12 xl:w-34 xl:h-33" viewBox="0 0 132 132" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle class="path-animate" cx="66" cy="66" r="65"
                                stroke="url(#paint0_linear_2564_14959)" stroke-width="2" stroke-linecap="square"
                                stroke-linejoin="round" stroke-dasharray="4 6"></circle>
                            <path
                                d="M112 66.503C112.001 55.9764 108.351 45.7752 101.674 37.6376C94.9965 29.5 85.7041 23.9294 75.3799 21.875C65.0557 19.8206 54.3385 21.4095 45.0545 26.371C35.7705 31.3325 28.494 39.3596 24.4649 49.0846C20.4357 58.8096 19.9033 69.6307 22.9581 79.7043C26.013 89.7779 32.4662 98.4806 41.2183 104.33C49.9703 110.179 60.4797 112.812 70.9557 111.781C81.4317 110.75 91.2262 106.119 98.6703 98.6763"
                                stroke="#EAE9F3" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                            </path>
                            <path
                                d="M55.1703 46.4722C58.0024 44.5777 61.012 42.8026 64.1759 41.123C73.5409 45.25 81.9905 51.0162 89.3954 58.0669C87.9632 68.5347 85.2857 78.3506 80.9344 87.1681C70.982 89.1827 60.7155 89.5031 50.5877 88.2659C48.2531 84.0784 46.2353 79.7082 44.5549 75.2115"
                                stroke="#EAE9F3" stroke-width="2"></path>
                            <defs>
                                <linearGradient id="paint0_linear_2564_14959" x1="-4.78829" y1="41.0179"
                                    x2="79.9977" y2="153.998" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7271EF"></stop>
                                    <stop offset="0.374084" stop-color="#232323" stop-opacity="0"></stop>
                                    <stop offset="0.647976" stop-color="#FF5281"></stop>
                                    <stop offset="0.823198" stop-color="#FF5281"></stop>
                                    <stop offset="0.910069" stop-color="#FF7C52"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl leading-none m-0 uppercase font-normal mb-3 xl:text-fluid-xs">Оптимизация ИТ
                            инфраструктуры
                        </h3>
                        <p class="text-xl leading-none text-primary/40 m-0 xl:text-fluid-xs">
                            Улучшим эффективность и производительность технических ресурсов компании, таких как серверы,
                            сети и программного обеспечения. Цель — снизить затраты, повысить скорость работы и
                            обеспечить надежность системы. Это позволит вам создать более гибкую и масштабируемую
                            ИТ-среду для поддержки роста вашего бизнеса.
                        </p>
                    </div>
                </li>
                <li class="flex gap-4 xl:flex-col xl:gap-12">
                    <div>
                        <svg class="w-12 h-12 xl:w-34 xl:h-33" viewBox="0 0 122 133" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.7812 79.9439C21.6216 75.2558 20.7089 70.3893 20 65.3635C30.1156 54.896 41.9846 46.4415 55.0674 40C68.42 46.9783 80.289 55.2986 90 65.3635C87.842 79.5885 83.2563 93.4109 76.6474 106.294C69.8854 107.373 64.234 107.942 57.3765 108"
                                stroke="#EAE9F3" stroke-width="2"></path>
                            <path
                                d="M41.1921 48.8083C39.865 43.3658 38.817 37.7203 38 31.893C49.8497 19.5562 63.7534 9.59187 79.079 2C94.7206 10.2245 108.624 20.0307 120 31.893C117.472 48.6583 112.1 64.9492 104.358 80.133C98.2649 81.1112 92.1086 81.7336 85.9353 82"
                                stroke="#EAE9F3" stroke-width="2"></path>
                            <path class="path-animate-reverse"
                                d="M31.5568 74C20.5299 79.4938 10.526 86.7045 2 95.632C3.81888 108.68 7.22929 120.469 13.2543 130.541C25.3044 132.486 37.6956 132.486 49.7457 130.541C55.316 119.553 59.1811 107.764 61 95.632C52.815 87.0479 42.8112 79.9517 31.5568 74Z"
                                stroke="url(#paint0_linear_1237_14066)" stroke-width="2" stroke-dasharray="4 4">
                            </path>
                            <defs>
                                <linearGradient id="paint0_linear_1237_14066" x1="19.2303" y1="95.2329"
                                    x2="44.974" y2="118.807" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7271EF"></stop>
                                    <stop offset="0.493056" stop-color="#16181D" stop-opacity="0"></stop>
                                    <stop offset="0.765625" stop-color="#FF5281"></stop>
                                    <stop offset="0.947917" stop-color="#FF5281"></stop>
                                    <stop offset="0.979167" stop-color="#FF7C52"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl leading-none m-0 uppercase font-normal mb-3 xl:text-fluid-xs">Разработка
                        </h3>
                        <p class="text-xl leading-none text-primary/40 m-0 xl:text-fluid-xs">
                            Создадим уникальное ИТ-решений, от проектирования до внедрения. Цель — предоставить
                            эффективные и надежные решения, которые соответствуют потребностям вашего бизнеса.
                        </p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="py-15 xl:py-30 xl:px-7 xl:mx-7">
            <div class="grid grid-cols-24">
                <div class="col-span-5">
                    <span class="hidden pt-5 text-primary/50 uppercase xl:block">Наши услуги</span>
                </div>

                <div class="col-span-full xl:col-span-19">
                    <h2 class="text-fluid-lg font-normal m-0 mb-7 px-6 md:px-15 md:mb-10 xl:p-0">Наши услуги</h2>
                    <ul
                        class="flex gap-4 xl:inline list-none m-0 pl-6 pr-3 md:pl-15 md:pr-7 overflow-x-auto scrollbar-none">
                        <li
                            class="flex flex-col py-5 xl:grid xl:grid-cols-19 xl:gap-5 xl:py-2 min-w-52 border-t border-primary/15 group">
                            <div class="col-span-2 font-mono text-xs mb-3 xl:my-6">01</div>
                            <a class="col-span-6 text-2xl leading-none xl:text-4xl no-underline text-inherit mb-4 xl:my-5"
                                href="#">Услуги
                                ЦОД</a>
                            <div class="col-span-4 flex relative items-center justify-center w-50 h-31 hidden xl:block">
                                <img class="absolute inset-0 w-full h-full rounded-lg opacity-0 scale-95 transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-100"
                                    src="/images/data-center-services.webp" alt="Услуги ЦОД">
                            </div>
                            <div class="col-span-7 text-sm xl:text-lg leading-none text-primary/50 xl:my-5">
                                Безопасное хранилище, обработка данных, масштабируемость, резервирование,
                                энергоснабжение,
                                мониторинг, доступ 24/7. </div>
                        </li>
                        <li
                            class="flex flex-col py-5 xl:grid xl:grid-cols-19 xl:gap-5 xl:py-2 min-w-52 border-t border-primary/15 group">
                            <div class="col-span-2 font-mono text-xs mb-3 xl:my-6">02</div>
                            <a class="col-span-6 text-2xl leading-none xl:text-4xl no-underline text-inherit mb-4 xl:my-5"
                                href="#">
                                ИТ-консалтинг
                            </a>
                            <div class="col-span-4 flex relative items-center justify-center w-50 h-31 hidden xl:block">
                                <img class="absolute inset-0 w-full h-full rounded-lg opacity-0 scale-95 object-cover transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-100"
                                    src="/images/it-consulting.webp" alt="ИТ-консалтинг">
                            </div>
                            <div class="col-span-7 text-sm xl:text-lg leading-none text-primary/50 xl:my-5">
                                Оптимизация бизнес-процессов, внедрение технологий, аудит, стратегия, безопасность,
                                интеграция,
                                сопровождение, обучение, эффективность.
                            </div>
                        </li>
                        <li
                            class="flex flex-col py-5 xl:grid xl:grid-cols-19 xl:gap-5 xl:py-2 min-w-52 border-t border-primary/15 group">
                            <div class="col-span-2 font-mono text-xs mb-3 xl:my-6">03</div>
                            <a class="col-span-6 text-2xl leading-none xl:text-4xl no-underline text-inherit mb-4 xl:my-5"
                                href="#">
                                ИТ-аутсорсинг
                            </a>
                            <div class="col-span-4 flex relative items-center justify-center w-50 h-31 hidden xl:block">
                                <img class="absolute inset-0 w-full h-full rounded-lg opacity-0 scale-95 object-cover transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-100"
                                    src="/images/it-outsourcing.webp" alt="ИТ-аутсорсинг">
                            </div>
                            <div class="col-span-7 text-sm xl:text-lg leading-none text-primary/50 xl:my-5">
                                Передача ИТ-задач, поддержка инфраструктуры,
                                оптимизация, сопровождение, экспертиза, масштабируемость, безопасность, снижение затрат.
                            </div>
                        </li>
                        <li
                            class="flex flex-col py-5 xl:grid xl:grid-cols-19 xl:gap-5 xl:py-2 min-w-52 border-t border-primary/15 group">
                            <div class="col-span-2 font-mono text-xs mb-3 xl:my-6">04</div>
                            <a class="col-span-6 text-2xl leading-none xl:text-4xl no-underline text-inherit mb-4 xl:my-5"
                                href="#">
                                Автоматизация бизнес-процессов</a>
                            <div class="col-span-4 flex relative items-center justify-center w-50 h-31 hidden xl:block">
                                <img class="absolute inset-0 w-full h-full rounded-lg opacity-0 scale-95 object-cover transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-100"
                                    src="/images/business-process-automation.webp" alt="Автоматизация бизнес-процессов">
                            </div>
                            <div class="col-span-7 text-sm xl:text-lg leading-none text-primary/50 xl:my-5">
                                Оптимизация операций, программные решения,
                                интеграция, эффективность, контроль, анализ, снижение затрат, ускорение работы.</div>
                        </li>
                        <li
                            class="flex flex-col py-5 xl:grid xl:grid-cols-19 xl:gap-5 xl:py-2 min-w-52 border-t border-primary/15 group">
                            <div class="col-span-2 font-mono text-xs mb-3 xl:my-6">05</div>
                            <a class="col-span-6 text-2xl leading-none xl:text-4xl no-underline text-inherit mb-4 xl:my-5"
                                href="#">
                                Разработка</a>
                            <div class="col-span-4 flex relative items-center justify-center w-50 h-31 hidden xl:block">
                                <img class="absolute inset-0 w-full h-full rounded-lg opacity-0 scale-95 object-cover transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-100"
                                    src="/images/development.webp" alt="Разработка">
                            </div>
                            <div class="col-span-7 text-sm xl:text-lg leading-none text-primary/50 xl:my-5">
                                Создание программного обеспечения, веб-сайтов,
                                приложений, интеграция, тестирование, кастомизация, сопровождение, безопасность,
                                инновации.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section
            class="relative overflow-hidden bg-white text-secondary px-3 py-6 rounded-xl mx-3 md:px-8 md:py-20 md:mx-7 xl:py-25">
            <div class="grid grid-cols-24">
                <div class="col-span-5">
                    <span class="hidden pt-5 uppercase xl:block">О компании</span>
                </div>
                <div class="col-span-full xl:col-span-19">
                    <h2 class="text-fluid-lg/18.5 font-normal m-0 mb-7 md:mb-10 xl:mb-20">О компании</h2>
                    <div class="flex gap-12 xl:gap-20">
                        <div class="hidden lg:block">
                            <img class="w-[450px] xl:w-144 xl:h-88 rounded-lg object-cover" src="/images/team-1.jpg"
                                alt="">
                        </div>
                        <div>
                            <p class="text-xl/5.5 m-0 mb-8 lg:mb-10 xl:max-w-110">Мы — команда высококвалифицированных
                                специалистов,
                                объединённых общей целью: создавать передовые решения, которые помогают бизнесу
                                расти и
                                процветать. Мы работаем на рынке ИТ услуг с 2014 года, наша компания зарекомендовала
                                себя как надежный и уважаемый партнер на рынке информационных технологий.</p>
                            <a class="inline-block no-underline text-white leading-none w-content text-xs xl:text-base xl:w-content sm:text-sm uppercase bg-button-bg px-4 py-3 xl:px-8 xl:py-5 rounded-sm border-2 border-solid border-transparent"
                                href="#">Узнать
                                больше
                            </a>
                        </div>
                    </div>
                </div>
                <img class="hidden lg:block absolute top-0 -right-21 xl:-right-16 2xl:right-0"
                    src="/images/circle-and-pentagon.svg" alt="Декоративное изображение">
            </div>

        </section>

        <section class="py-15 xl:py-30 xl:pl-15 xl:pr-7 xl:relative">
            <h2
                class="px-6 md:px-15 text-white text-fluid-lg 2xl:text-9xl leading-none font-normal m-0 mb-7 md:mb-10 2xl:mb-28 xl:p-0">
                Наши проекты</h2>
            <div class="flex gap-47">
                <div class="hidden xl:block">
                    <div class="flex gap-2">
                        <button
                            class="btn-prev--projects bg-secondary border border-primary/30 rounded-sm w-11 h-11 xl:w-13 xl:h-13 2xl:w-15 2xl:h-15 p-0 hover:border-button-bg transition-all duration-200 ease-in cursor-pointer">
                            <svg class="text-button-bg" width="11px" height="22px">
                                <use href="#arrow-left"></use>
                            </svg>
                        </button>
                        <button
                            class="btn-next--projects bg-secondary border border-primary/30 rounded-sm w-11 h-11 xl:w-13 xl:h-13 2xl:w-15 2xl:h-15 p-0 hover:border-button-bg transition-all duration-200 ease-in cursor-pointer">
                            <svg class="text-button-bg rotate-180" width="11px" height="22px">
                                <use href="#arrow-left"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper swiper--projects">
                    <div class="swiper-wrapper !h-max select-none cursor-auto ml-6 md:ml-15 xl:m-0">
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-1.jpg" alt="" />
                                </div>
                                <div class="p-3.5 md:p-7 xl:p-6">
                                    <div
                                        class="md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in">
                                        Тестирование системы учёта базы данных "JAC Motors"
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-2.jpg" alt="">
                                </div>
                                <div class="p-3.5 lg:p-7 xl:p-6">
                                    <div class="md:text-[28px]/7 xl:text-xl/5  2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in"
                                        href="#">
                                        Приёмочное тестирование и проверка интерфейса мебельного салона "JYSK"
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-3.jpg" alt="">
                                </div>
                                <div class="p-3.5 lg:p-7 xl:p-6">
                                    <div class="md:text-[28px]/7 xl:text-xl/5  2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in"
                                        href="#">
                                        Тестирование доступности сайта для "AUTO Tajikistan"
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-4.jpg" alt="">
                                </div>
                                <div class="p-3.5 lg:p-7 xl:p-6">
                                    <div class="md:text-[28px]/7 xl:text-xl/5  2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in"
                                        href="#">
                                        Создание документации для тестирования ПО компании "City Service"
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-5.jpg" alt="">
                                </div>
                                <div class="p-3.5 lg:p-7 xl:p-6">
                                    <div class="md:text-[28px]/7 xl:text-xl/5  2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in"
                                        href="#">
                                        Услуги по тестированию мобильного приложения фармацевтического дистрибьютора "Дусти
                                        Фарма"
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-6.jpg" alt="">
                                </div>
                                <div class="p-3.5 lg:p-7 xl:p-6">
                                    <div class="md:text-[28px]/7 xl:text-xl/5  2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in"
                                        href="#">
                                        Услуги по тестированию мобильного приложения мебельного салона "Хонаи Ман"
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="swiper-slide bg-[#16181D] rounded-xl !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 mr-3 md:mr-7 group">
                            <a class="no-underline text-inherit">
                                <div>
                                    <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 object-cover rounded-t-xl"
                                        src="/images/testing-7.jpg" alt="">
                                </div>
                                <div class="p-3.5 lg:p-7 xl:p-6">
                                    <div class="md:text-[28px]/7 xl:text-xl/5  2xl:text-[28px]/7 group-hover:text-button-bg transition-all duration-200 ease-in"
                                        href="#">
                                        Услуги по тестированию мобильного приложения компании "Taj-Motors"
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-6 pr-3 md:pr-7 xl:pr-15 xl:absolute xl:top-30 xl:right-0 2xl:top-40">
                <a class="flex items-center no-underline text-primary w-max text-xs md:text-sm 2xl:text-base border border-primary/30 rounded-md uppercase flex w-30 hover:border-button-bg transition-all duration-200 ease-in group"
                    href="#">

                    <span
                        class="py-2 pl-3 pr-2 md:py-3 xl:p-4 2xl:p-5 group-hover:text-button-bg transition-all duration-200 ease-in leading-none">Все
                        проекты</span>
                    <span
                        class="w-px h-full bg-primary/10 group-hover:bg-button-bg transition-transform duration-200 ease-in origin-center group-hover:scale-y-60"></span>
                    <span class="px-3 md:p-3 xl:p-4 2xl:p-5">
                        <svg class="w-2 h-2 md:w-3 md:h-3 2xl:w-4 2xl:h-4 group-hover:text-button-bg transition-all duration-200 ease-in">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </span>
                </a>
            </div>
        </section>

        <section class="bg-[#16181D] px-3 py-6 rounded-xl mx-3 md:px-8 md:py-20 md:mx-7 xl:py-30">
            <div class="grid grid-cols-24">
                <div class="col-span-5">
                </div>
                <div class="col-span-full xl:col-span-19 ">
                    <h2 class="text-fluid-lg font-normal m-0 mb-7 md:mb-15">Нас рекомендуют</h2>
                    <span
                        class="w-px h-full bg-primary/10 group-hover:bg-button-bg transition-transform duration-200 ease-in origin-center group-hover:scale-y-60"></span>
                </div>
            </div>
            <div class="gradient-overlay xl:flex xl:flex-row-reverse xl:gap-47">
                <div class="swiper swiper--testimonials h-130 md:h-140 xl:h-150 2xl:h-170">
                    <div class="swiper-wrapper m-0 p-0 cursor-default select-none">
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14" src="/images/jacmotors.jpg"
                                    alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Компания "JAC Motors" </h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    ООО «КИТ» является нашим партнером в области информационно-технической поддержки
                                    нашей организации. За время сотрудничества ООО «КИТ» подтвердило свой высокий
                                    профессиональный статус, компетентность и активность в решении поставленных задач.
                                    Все работы выполняются вовремя, в строго оговоренные сроки и с надлежащим качеством.
                                    Сотрудники компании грамотно справляются со своими обязанностями. Мы удовлетворены
                                    работами ООО «КИТ» и готовы рекомендовать эту компанию как надежного и
                                    ответственного партнера. </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Сохиб Назаров </span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Технический директор <br>ООО «JAC Motors» </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14" src="/images/jysk.jpg"
                                    alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Компания "JYSK"</h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    Компания ООО "Jysk" выражает благодарность компании ООО "КИТ" за продуктивную и
                                    качественную работу, а также за оперативно предоставленную техническую поддержку.
                                    Специалисты компании помогли решить проблему с переходом с одной базы данных на
                                    новую систему учёта. Желаем Вам профессиональных успехов, экономическогои
                                    финансового благополучия, а также укрепления взаимоотношений между нашими
                                    компаниями! </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Мухаммад Абдулхаков </span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Начальник департамента программ повышения эффективности бизнеса</div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14"
                                    src="/images/auto-tajikistan.png" alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Компания Hyundai Авто Таджикистан </h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    Компания ООО «Авто Таджикистан» официальный представитель Hyundai Motor Company в
                                    Республике Таджикистан, выражает благодарность ООО "КИТ" за внедрение и доработку
                                    автоматизированной системы учета в Автосалоне нашей компании. За время нашего
                                    сотрудничества ООО "КИТ" подтвердил свой профессиональный статус, компетентность и
                                    активность в решении поставленных задач. Услуги компании ООО "КИТ" помогли нашей
                                    компании перейти на более современную систему финансового и управленческого учета. В
                                    частности, упростил учет товарооборота компании, в оказании качественных услуг
                                    сервиса, в учете денежных средств и многое другое. В настоящее время наше
                                    сотрудничество продолжается, и мы рекомендуем ООО «КИТ» как надёжного партнера.
                                </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Сухроб Бакоев </span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Старший менеджер департамента маркетинговых коммуникаций </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14"
                                    src="/images/city-service.png" alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Компания "City Service" </h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    Центр обслуживания общественного транспорта, производимого заводом AKIA AVESTO, ООО
                                    «City Service» было принято решение о внедрении программы «1С». В качестве компании-
                                    интегратора были привлечены специалисты ООО «КИТ», обладающие опытом автоматизации
                                    учетных систем данного направления. Выражаем благодарность ООО «КИТ» за
                                    взаимовыгодное сотрудничество и квалифицированную помощь в реализации задачи по
                                    автоматизации деятельности предприятия. Приятно работать с опытными специалистами,
                                    умеющими оказать профессиональные услуги на высоком уровне. </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Махмадсаид Кодиров</span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Генеральный директор ООО "City Service" </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14" src="/images/dusti-farma.png"
                                    alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Фармацевтический дистрибьютер ООО "Дусти Фарм" </h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    Продукт компании «1С» внедренный специалистами ООО "КИТ" значительно упростил работу
                                    отделу продаж "Дусти Фарм". "Дусти Фарм" рад продуктивному сотрудничеству и выражает
                                    искреннюю благодарность за весомый вклад в развитие нашей сферы деятельности и
                                    желает прогресса специалистам ООО "КИТ". </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Субхони Комил </span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Генеральный директор ООО "Дусти Фарм" </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14" src="/images/honai-man.png"
                                    alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Компания "ХОНАИ МАН" </h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    Компания ООО "ХОНАИ МАН" выражает благодарность компании ООО "КИТ" за продуктивную и
                                    качественную работу, а также за оперативно предоставленную техническую поддержку.
                                    Специалисты компании помогли решить проблему с переходом с одной базы данных на
                                    новую систему учёта. Желаем Вам профессиональных успехов, экономического и
                                    финансового благополучия, а также укрепления взаимоотношений между нашими
                                    компаниями! </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Кибриёи Комилджон </span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Генеральный директор ООО "ХОНАИ МАН" </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-[#16181D] md:!w-112 xl:!w-96 2xl:!w-112 rounded-xl">
                            <div class="flex flex-col h-full">
                                <img class="h-5 md:h-10 xl:h-9 2xl:h-10 w-max mb-8 xl:mb-14" src="/images/taj-motors.png"
                                    alt="Logo">
                                <h3 class="m-0 mb-4 2xl:mb-7 text-xl md:text-2xl font-normal leading-5">
                                    Компания Тойота Центр "Тадж Моторс" </h3>
                                <div class="text-sm/4 md:text-base xl:text-lg/5 2xl:text-xl/6 text-primary/50 mb-5">
                                    ООО «КИТ» является нашим партнерам в области информационно-технической поддержки
                                    нашей организации. За время сотрудничества ООО «КИТ» подтвердило свой высокий
                                    профессиональный статус, компетентность и активность в решении поставленных задач.
                                    Все работы выполняются вовремя, в строго оговоренные сроки и с надлежащим качеством.
                                    Сотрудники компании грамотно справляются со своими обязанностями. Мы удовлетворены
                                    работами ООО «КИТ» и готовы рекомендовать эту компанию как надежного и
                                    ответственного партнера. </div>
                                <div class="border-t border-primary/15 mt-auto pt-5">
                                    <span class="text-sm md:text-xl">
                                        Ахмад Мирзоев </span>
                                </div>
                                <div class="h-9 md:h-12 text-xs/3 md:text-base/4 text-primary/50">
                                    Генеральный директор ООО "Тадж Моторс" </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 justify-end mt-15">
                    <button
                        class="btn-prev--testimonials bg-inherit border border-primary/30 rounded-sm w-11 h-11 lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 p-0 hover:border-button-bg transition-all duration-200 ease-in cursor-pointer">
                        <svg class="text-button-bg w-2 h-4 lg:w-3 lg:h-5">
                            <use href="#arrow-left"></use>
                        </svg>
                    </button>
                    <button
                        class="btn-next--testimonials bg-inherit border border-primary/30 rounded-sm w-11 h-11 lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 p-0 hover:border-button-bg transition-all duration-200 ease-in cursor-pointer">
                        <svg class="text-button-bg rotate-180 w-2 h-4 lg:w-3 lg:h-5">
                            <use href="#arrow-left"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <x-brand-slider :logos="$logos" />

        <section class="px-6 md:px-15 py-15">
            <div class="flex flex-col justify-between gap-12">
                <div class="w-full xl:flex xl:items-center xl:gap-10">
                    <h2 class="text-4xl md:text-fluid-lg 2xl:text-9xl font-normal m-0 mb-7">Оставить заявку</h2>
                    <p class="m-0 text-fluid-md xl:max-w-100">
                        Хотите делать качественное ПО? Запросите бесплатную консультацию заполнив эту форму
                    </p>
                </div>

                <x-contact-form />
            </div>
        </section>

        <section class="md:px-7 md:pt-15 xl:pt-20 2xl:pt-25 md:pb-10 xl:pb-15 2xl:pb-20">
            <div class="flex flex-col md:grid md:grid-cols-2 gap-10 md:gap-4 overflow-hidden select-none">
                <div
                    class="swiper swiper--main-vacancies relative !mx-3 !overflow-visible md:!m-0 md:!overflow-hidden rounded-xl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-full">
                            <div class="w-full">
                                <img class="w-full h-auto md:h-132 lg:h-150 rounded-xl object-cover"
                                    src="/images/team-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-full">
                            <div class="w-full">
                                <img class="w-full h-auto md:h-132 lg:h-150 rounded-xl object-cover"
                                    src="/images/team-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-full">
                            <div class="w-full">
                                <img class="w-full h-auto md:h-132 lg:h-150 rounded-xl object-cover"
                                    src="/images/team-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-full">
                            <div class="w-full">
                                <img class="w-full h-auto md:h-132 lg:h-150 rounded-xl object-cover"
                                    src="/images/team-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block absolute z-10 bottom-10 right-10 xl:bottom-13 xl:right-13">
                        <div class="flex gap-2">
                            <button
                                class="btn-prev--main-vacancies bg-[#16181D] border border-primary/30 rounded-sm w-11 h-11 lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 p-0 hover:border-button-bg hover:bg-primary/30 transition-all duration-200 ease-in cursor-pointer">
                                <svg class="text-button-bg" width="11px" height="22px">
                                    <use href="#arrow-left"></use>
                                </svg>
                            </button>
                            <button
                                class="btn-next--main-vacancies bg-[#16181D] border border-primary/30 rounded-sm w-11 h-11 lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 p-0 hover:border-button-bg hover:bg-primary/30 transition-all duration-200 ease-in cursor-pointer">
                                <svg class="text-button-bg rotate-180" width="11px" height="22px">
                                    <use href="#arrow-left"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#16181D] px-3 py-6 mx-3 md:m-0 md:px-6 md:py-11 xl:p-13 rounded-xl relative md:flex md:flex-col overflow-hidden">
                    <h2
                        class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl m-0 mb-7 md:m-0 font-normal z-10 leading-none">
                        Команда</h2>
                    <p class="text-primary/50 text-xl/6 m-0 mb-7 md:mb-10 md:mt-auto z-10">Мы поддерживаем друг друга и
                        всегда готовы
                        прийти на
                        помощь. Эта привычка позволяет легко строить палаточные лагеря, а также заниматься поиском дефектов
                        ПО.<br>
                        Мы искренне интересуемся успехами и достижениями каждого. В нашей команде много талантов и еще
                        больше увлечений.</p>
                    <div class="flex justify-end md:justify-start">
                        <a class="inline-block no-underline text-white leading-none w-content text-xs xl:text-base xl:w-content sm:text-sm uppercase bg-button-bg px-3 py-2 xl:px-8 xl:py-5 rounded-sm border-2 border-solid border-transparent"
                            href="#">Наши вакансии</a>
                    </div>
                    <img class="hidden md:block absolute w-114 h-82 xl:w-153 xl:h-106 2xl:w-178 2xl:h-124 top-0 right-0"
                        src="/images/circle&pentagon.svg" alt="Декоративное изображение">
                </div>

            </div>
        </section>
    </main>
@endsection
