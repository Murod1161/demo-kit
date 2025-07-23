@extends('layouts.app')

@section('content')
    <section class="2xl:mb-30 2xl:mt-30 mb-7 select-none p-3 md:p-7 2xl:mx-8">
        <h1 class="animate-fade-in-scale 2xl:mb-15 m-0 mb-7 text-fluid-xl font-normal leading-none 2xl:text-[150px]">Будущее начинается<br>
            здесь</h1>
        <p class="animate-fade-in-scale m-0 max-w-[500px] text-xl font-normal leading-none text-primary/50 md:text-[28px]">
            Мы предлагаем решения, меняющие бизнес и жизнь, открывая новые горизонты и возможности для роста
        </p>
    </section>

    <section>
        <div class="-z-1 relative">
            <div class="absolute left-1/2 top-0 h-px w-screen -translate-x-1/2 bg-primary/30"></div>
        </div>

        <div class="xl:px- mb-5 px-3 md:mb-10 md:px-7">
            <ul class="m-0 flex list-none items-center justify-around p-0 py-5 font-normal">
                <li class="flex items-center gap-1">
                    <div class="text-2xl md:text-4xl xl:text-5xl">>10</div>
                    <div class="text-[8px] uppercase text-primary/50 md:text-[10px] xl:text-xs">лет<br>на рынке
                    </div>
                </li>
                <div class="h-6 w-px bg-primary/30 md:h-7 xl:h-8"></div>
                <li class="flex items-center gap-1">
                    <div class="text-2xl md:text-4xl xl:text-5xl">>37</div>
                    <div class="text-[8px] uppercase text-primary/50 md:text-[10px] xl:text-xs">
                        счастливых<br>клиентов</div>
                </li>
                <div class="h-6 w-px bg-primary/30 md:h-7 xl:h-8"></div>
                <li class="flex items-center gap-1">
                    <div class="text-2xl md:text-4xl xl:text-5xl">>17</div>
                    <div class="text-[8px] uppercase text-primary/50 md:text-[10px] xl:text-xs">
                        успешных<br>проектов</div>
                </li>
            </ul>
        </div>
    </section>

    <section class="xl:py-30 mx-3 rounded-xl bg-[#16181D] px-3 py-6 md:mx-7 md:px-8 md:py-20">
        <div class="grid-cols-24 grid">
            <div class="col-span-5">
                <span class="hidden pt-5 uppercase xl:block">Подход</span>
            </div>
            <div class="xl:col-span-19 col-span-full">
                <h2 class="m-0 mb-7 text-fluid-lg font-normal leading-none md:mb-10">Как мы можем вам помочь</h2>
            </div>
        </div>

        <ul class="m-0 flex list-none flex-col gap-6 p-0 md:gap-7 xl:flex-row xl:gap-8">
            <li class="flex gap-4 xl:flex-col xl:gap-12">
                <div>
                    <svg class="xl:w-34 xl:h-33 h-12 w-12" viewBox="0 0 136 133" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            stroke="url(#paint0_linear_2564_16030)" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" stroke-dasharray="4 6"></path>
                        <circle cx="67.8594" cy="71" r="19" stroke="#EAE9F3" stroke-width="2"></circle>
                        <defs>
                            <linearGradient id="paint0_linear_2564_16030" x1="16.5" y1="43.5" x2="118.368" y2="122.258" gradientUnits="userSpaceOnUse">
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
                    <h3 class="m-0 mb-3 text-xl font-normal uppercase leading-none xl:text-fluid-xs">Диагностика ИТ
                        инфраструктуры
                    </h3>
                    <p class="m-0 text-xl leading-none text-primary/40 xl:text-fluid-xs">
                        Оценим по стандартам ITIL, COBIT, ITSM состояния всех компонентов системы, включая серверы,
                        сеть, оборудование и программное обеспечение. Выявим уязвимости, проблемы и оптимизационные
                        возможности для повышения производительности, безопасности и надежности ИТ-среды.
                    </p>
                </div>
            </li>
            <li class="flex gap-4 xl:flex-col xl:gap-12">
                <div>
                    <svg class="xl:w-34 xl:h-33 h-12 w-12" viewBox="0 0 163 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 112H161M84.5918 38L161 38" stroke="#EAE9F3" stroke-width="2" stroke-linecap="square"></path>
                        <path class="path-animate" d="M161 76H21.08C10.5424 76 2 67.3443 2 56.667C2 45.9898 10.5424 37.3341 21.08 37.3341H60.83M42.248 18L61.8738 37.886L43.3392 56.6663"
                            stroke="url(#paint0_linear_1237_14042)" stroke-width="1.6" stroke-linecap="square" stroke-dasharray="4 6"></path>
                        <defs>
                            <linearGradient id="paint0_linear_1237_14042" x1="-15.079" y1="76.0001" x2="161" y2="76.0001" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#16181D" stop-opacity="0"></stop>
                                <stop offset="0.300346" stop-color="#7271EF"></stop>
                                <stop offset="0.828125" stop-color="#FF5281"></stop>
                                <stop offset="0.973958" stop-color="#FF7C52"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div>
                    <h3 class="m-0 mb-3 text-xl font-normal uppercase leading-none xl:text-fluid-xs">Автоматизация
                        бизнес процессов
                    </h3>
                    <p class="m-0 text-xl leading-none text-primary/40 xl:text-fluid-xs">
                        Внедряем современные технологии для упрощения и оптимизации рабочих операций, что позволит
                        вам снизить затраты и повысить эффективность. С помощью автоматизации ускорятся бизнес
                        процессы, уменьшатся ошибки и освободится время для стратегических задач.
                    </p>
                </div>
            </li>
            <li class="flex gap-4 xl:flex-col xl:gap-12">
                <div>
                    <svg class="xl:w-34 xl:h-33 h-12 w-12" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle class="path-animate" cx="66" cy="66" r="65" stroke="url(#paint0_linear_2564_14959)" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"
                            stroke-dasharray="4 6"></circle>
                        <path
                            d="M112 66.503C112.001 55.9764 108.351 45.7752 101.674 37.6376C94.9965 29.5 85.7041 23.9294 75.3799 21.875C65.0557 19.8206 54.3385 21.4095 45.0545 26.371C35.7705 31.3325 28.494 39.3596 24.4649 49.0846C20.4357 58.8096 19.9033 69.6307 22.9581 79.7043C26.013 89.7779 32.4662 98.4806 41.2183 104.33C49.9703 110.179 60.4797 112.812 70.9557 111.781C81.4317 110.75 91.2262 106.119 98.6703 98.6763"
                            stroke="#EAE9F3" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                        </path>
                        <path
                            d="M55.1703 46.4722C58.0024 44.5777 61.012 42.8026 64.1759 41.123C73.5409 45.25 81.9905 51.0162 89.3954 58.0669C87.9632 68.5347 85.2857 78.3506 80.9344 87.1681C70.982 89.1827 60.7155 89.5031 50.5877 88.2659C48.2531 84.0784 46.2353 79.7082 44.5549 75.2115"
                            stroke="#EAE9F3" stroke-width="2"></path>
                        <defs>
                            <linearGradient id="paint0_linear_2564_14959" x1="-4.78829" y1="41.0179" x2="79.9977" y2="153.998" gradientUnits="userSpaceOnUse">
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
                    <h3 class="m-0 mb-3 text-xl font-normal uppercase leading-none xl:text-fluid-xs">Оптимизация ИТ
                        инфраструктуры
                    </h3>
                    <p class="m-0 text-xl leading-none text-primary/40 xl:text-fluid-xs">
                        Улучшим эффективность и производительность технических ресурсов компании, таких как серверы,
                        сети и программного обеспечения. Цель — снизить затраты, повысить скорость работы и
                        обеспечить надежность системы. Это позволит вам создать более гибкую и масштабируемую
                        ИТ-среду для поддержки роста вашего бизнеса.
                    </p>
                </div>
            </li>
            <li class="flex gap-4 xl:flex-col xl:gap-12">
                <div>
                    <svg class="xl:w-34 xl:h-33 h-12 w-12" viewBox="0 0 122 133" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <linearGradient id="paint0_linear_1237_14066" x1="19.2303" y1="95.2329" x2="44.974" y2="118.807" gradientUnits="userSpaceOnUse">
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
                    <h3 class="m-0 mb-3 text-xl font-normal uppercase leading-none xl:text-fluid-xs">Разработка
                    </h3>
                    <p class="m-0 text-xl leading-none text-primary/40 xl:text-fluid-xs">
                        Создадим уникальное ИТ-решений, от проектирования до внедрения. Цель — предоставить
                        эффективные и надежные решения, которые соответствуют потребностям вашего бизнеса.
                    </p>
                </div>
            </li>
        </ul>
    </section>

    <section class="py-15 xl:py-30 xl:mx-7 xl:px-7">
        <div class="grid-cols-24 grid">
            <div class="col-span-5">
                <span class="hidden pt-5 uppercase text-primary/50 xl:block">Наши услуги</span>
            </div>

            <div class="xl:col-span-19 col-span-full">
                <h2 class="md:px-15 m-0 mb-7 px-6 text-fluid-lg font-normal md:mb-10 xl:p-0">Наши услуги</h2>
                <ul class="md:pl-15 scrollbar-none m-0 flex list-none gap-4 overflow-x-auto pl-6 pr-3 md:pr-7 xl:inline">
                    <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-primary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                        <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">01</div>
                        <a class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl" href="#">Услуги
                            ЦОД</a>
                        <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                            <img class="absolute inset-0 h-full w-full scale-95 rounded-lg opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                src="/images/data-center-services.webp" alt="Услуги ЦОД">
                        </div>
                        <div class="col-span-7 text-sm leading-none text-primary/50 xl:my-5 xl:text-lg">
                            Безопасное хранилище, обработка данных, масштабируемость, резервирование,
                            энергоснабжение,
                            мониторинг, доступ 24/7. </div>
                    </li>
                    <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-primary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                        <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">02</div>
                        <a class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl" href="#">
                            ИТ-консалтинг
                        </a>
                        <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                            <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                src="/images/it-consulting.webp" alt="ИТ-консалтинг">
                        </div>
                        <div class="col-span-7 text-sm leading-none text-primary/50 xl:my-5 xl:text-lg">
                            Оптимизация бизнес-процессов, внедрение технологий, аудит, стратегия, безопасность,
                            интеграция,
                            сопровождение, обучение, эффективность.
                        </div>
                    </li>
                    <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-primary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                        <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">03</div>
                        <a class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl" href="#">
                            ИТ-аутсорсинг
                        </a>
                        <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                            <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                src="/images/it-outsourcing.webp" alt="ИТ-аутсорсинг">
                        </div>
                        <div class="col-span-7 text-sm leading-none text-primary/50 xl:my-5 xl:text-lg">
                            Передача ИТ-задач, поддержка инфраструктуры,
                            оптимизация, сопровождение, экспертиза, масштабируемость, безопасность, снижение затрат.
                        </div>
                    </li>
                    <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-primary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                        <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">04</div>
                        <a class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl" href="#">
                            Автоматизация бизнес-процессов</a>
                        <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                            <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                src="/images/business-process-automation.webp" alt="Автоматизация бизнес-процессов">
                        </div>
                        <div class="col-span-7 text-sm leading-none text-primary/50 xl:my-5 xl:text-lg">
                            Оптимизация операций, программные решения,
                            интеграция, эффективность, контроль, анализ, снижение затрат, ускорение работы.</div>
                    </li>
                    <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-primary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                        <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">05</div>
                        <a class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl" href="#">
                            Разработка</a>
                        <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                            <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                src="/images/development.webp" alt="Разработка">
                        </div>
                        <div class="col-span-7 text-sm leading-none text-primary/50 xl:my-5 xl:text-lg">
                            Создание программного обеспечения, веб-сайтов,
                            приложений, интеграция, тестирование, кастомизация, сопровождение, безопасность,
                            инновации.</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="xl:py-25 relative mx-3 overflow-hidden rounded-xl bg-white px-3 py-6 text-secondary md:mx-7 md:px-8 md:py-20">
        <div class="grid-cols-24 grid">
            <div class="col-span-5">
                <span class="hidden pt-5 uppercase xl:block">О компании</span>
            </div>
            <div class="xl:col-span-19 col-span-full">
                <h2 class="text-fluid-lg/18.5 m-0 mb-7 font-normal md:mb-10 xl:mb-20">О компании</h2>
                <div class="flex gap-12 xl:gap-20">
                    <div class="hidden lg:block">
                        <img class="xl:w-144 xl:h-88 w-[450px] rounded-lg object-cover" src="/images/team-1.jpg" alt="">
                    </div>
                    <div>
                        <p class="text-xl/5.5 xl:max-w-110 m-0 mb-8 lg:mb-10">Мы — команда высококвалифицированных
                            специалистов,
                            объединённых общей целью: создавать передовые решения, которые помогают бизнесу
                            расти и
                            процветать. Мы работаем на рынке ИТ услуг с 2014 года, наша компания зарекомендовала
                            себя как надежный и уважаемый партнер на рынке информационных технологий.</p>
                        <a class="w-content xl:w-content inline-block rounded-sm border-2 border-solid border-transparent bg-button-bg px-4 py-3 text-xs uppercase leading-none text-white no-underline sm:text-sm xl:px-8 xl:py-5 xl:text-base"
                            href="#">Узнать
                            больше
                        </a>
                    </div>
                </div>
            </div>
            <img class="-right-21 absolute top-0 hidden lg:block xl:-right-16 2xl:right-0" src="/images/circle-and-pentagon.svg" alt="Декоративное изображение">
        </div>

    </section>

    <section class="py-15 xl:py-30 xl:pl-15 xl:relative xl:pr-7">
        <h2 class="md:px-15 m-0 mb-7 px-6 text-fluid-lg font-normal leading-none text-white md:mb-10 xl:p-0 2xl:mb-28 2xl:text-9xl">
            Наши проекты</h2>
        <div class="gap-47 flex">
            <div class="hidden xl:block">
                <div class="flex gap-2">
                    <button
                        class="btn-prev--projects xl:w-13 xl:h-13 2xl:w-15 2xl:h-15 h-11 w-11 cursor-pointer rounded-sm border border-primary/30 bg-secondary p-0 transition-all duration-200 ease-in hover:border-button-bg">
                        <svg class="text-button-bg" width="11px" height="22px">
                            <use href="#arrow-left"></use>
                        </svg>
                    </button>
                    <button
                        class="btn-next--projects xl:w-13 xl:h-13 2xl:w-15 2xl:h-15 h-11 w-11 cursor-pointer rounded-sm border border-primary/30 bg-secondary p-0 transition-all duration-200 ease-in hover:border-button-bg">
                        <svg class="rotate-180 text-button-bg" width="11px" height="22px">
                            <use href="#arrow-left"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="swiper swiper--projects">
                <div class="swiper-wrapper md:ml-15 ml-6 !h-max cursor-auto select-none xl:m-0">
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group rounded-xl bg-[#16181D]">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-1.jpg" alt="" />
                            </div>
                            <div class="p-3.5 md:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7">
                                    Тестирование системы учёта базы данных "JAC Motors"
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group rounded-xl bg-[#16181D]">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-2.jpg" alt="">
                            </div>
                            <div class="p-3.5 lg:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7" href="#">
                                    Приёмочное тестирование и проверка интерфейса мебельного салона "JYSK"
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group rounded-xl bg-[#16181D]">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-3.jpg" alt="">
                            </div>
                            <div class="p-3.5 lg:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7" href="#">
                                    Тестирование доступности сайта для "AUTO Tajikistan"
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group rounded-xl bg-[#16181D]">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-4.jpg" alt="">
                            </div>
                            <div class="p-3.5 lg:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7" href="#">
                                    Создание документации для тестирования ПО компании "City Service"
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group rounded-xl bg-[#16181D]">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-5.jpg" alt="">
                            </div>
                            <div class="p-3.5 lg:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7" href="#">
                                    Услуги по тестированию мобильного приложения фармацевтического дистрибьютора "Дусти
                                    Фарма"
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group rounded-xl bg-[#16181D]">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-6.jpg" alt="">
                            </div>
                            <div class="p-3.5 lg:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7" href="#">
                                    Услуги по тестированию мобильного приложения мебельного салона "Хонаи Ман"
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide !w-68 !h-75 md:!w-92 md:!h-111 lg:!w-107 lg:!h-104 xl:!w-109 xl:!h-83 2xl:!w-127 2xl:!h-97 group mr-3 rounded-xl bg-[#16181D] md:mr-7">
                        <a class="text-inherit no-underline">
                            <div>
                                <img class="w-68 h-42 md:w-92 md:h-62 lg:w-107 xl:w-109 xl:h-53 2xl:w-127 2xl:h-62 rounded-t-xl object-cover" src="/images/testing-7.jpg" alt="">
                            </div>
                            <div class="p-3.5 lg:p-7 xl:p-6">
                                <div class="transition-all duration-200 ease-in group-hover:text-button-bg md:text-[28px]/7 xl:text-xl/5 2xl:text-[28px]/7" href="#">
                                    Услуги по тестированию мобильного приложения компании "Taj-Motors"
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:pr-15 xl:top-30 mt-6 flex justify-end pr-3 md:pr-7 xl:absolute xl:right-0 2xl:top-40">
            <a class="w-30 group flex flex w-max items-center rounded-md border border-primary/30 text-xs uppercase text-primary no-underline transition-all duration-200 ease-in hover:border-button-bg md:text-sm 2xl:text-base"
                href="#">

                <span class="py-2 pl-3 pr-2 leading-none transition-all duration-200 ease-in group-hover:text-button-bg md:py-3 xl:p-4 2xl:p-5">Все
                    проекты</span>
                <span class="group-hover:scale-y-60 h-full w-px origin-center bg-primary/10 transition-transform duration-200 ease-in group-hover:bg-button-bg"></span>
                <span class="px-3 md:p-3 xl:p-4 2xl:p-5">
                    <svg class="h-2 w-2 transition-all duration-200 ease-in group-hover:text-button-bg md:h-3 md:w-3 2xl:h-4 2xl:w-4">
                        <use href="#icon-arrow"></use>
                    </svg>
                </span>
            </a>
        </div>
    </section>

    <section class="xl:py-30 mx-3 rounded-xl bg-[#16181D] px-3 py-6 md:mx-7 md:px-8 md:py-20">
        <div class="grid-cols-24 grid">
            <div class="col-span-5">
            </div>
            <div class="xl:col-span-19 col-span-full">
                <h2 class="md:mb-15 m-0 mb-7 text-fluid-lg font-normal">Нас рекомендуют</h2>
                <span class="group-hover:scale-y-60 h-full w-px origin-center bg-primary/10 transition-transform duration-200 ease-in group-hover:bg-button-bg"></span>
            </div>
        </div>
        <div class="gradient-overlay xl:gap-47 xl:flex xl:flex-row-reverse">
            <div class="swiper swiper--testimonials h-130 md:h-140 xl:h-150 2xl:h-170">
                <div class="swiper-wrapper m-0 cursor-default select-none p-0">
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/jacmotors.jpg" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Компания "JAC Motors" </h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
                                ООО «КИТ» является нашим партнером в области информационно-технической поддержки
                                нашей организации. За время сотрудничества ООО «КИТ» подтвердило свой высокий
                                профессиональный статус, компетентность и активность в решении поставленных задач.
                                Все работы выполняются вовремя, в строго оговоренные сроки и с надлежащим качеством.
                                Сотрудники компании грамотно справляются со своими обязанностями. Мы удовлетворены
                                работами ООО «КИТ» и готовы рекомендовать эту компанию как надежного и
                                ответственного партнера. </div>
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Сохиб Назаров </span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Технический директор <br>ООО «JAC Motors» </div>
                        </div>
                    </div>
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/jysk.jpg" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Компания "JYSK"</h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
                                Компания ООО "Jysk" выражает благодарность компании ООО "КИТ" за продуктивную и
                                качественную работу, а также за оперативно предоставленную техническую поддержку.
                                Специалисты компании помогли решить проблему с переходом с одной базы данных на
                                новую систему учёта. Желаем Вам профессиональных успехов, экономическогои
                                финансового благополучия, а также укрепления взаимоотношений между нашими
                                компаниями! </div>
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Мухаммад Абдулхаков </span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Начальник департамента программ повышения эффективности бизнеса</div>
                        </div>
                    </div>
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/auto-tajikistan.png" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Компания Hyundai Авто Таджикистан </h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
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
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Сухроб Бакоев </span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Старший менеджер департамента маркетинговых коммуникаций </div>
                        </div>
                    </div>
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/city-service.png" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Компания "City Service" </h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
                                Центр обслуживания общественного транспорта, производимого заводом AKIA AVESTO, ООО
                                «City Service» было принято решение о внедрении программы «1С». В качестве компании-
                                интегратора были привлечены специалисты ООО «КИТ», обладающие опытом автоматизации
                                учетных систем данного направления. Выражаем благодарность ООО «КИТ» за
                                взаимовыгодное сотрудничество и квалифицированную помощь в реализации задачи по
                                автоматизации деятельности предприятия. Приятно работать с опытными специалистами,
                                умеющими оказать профессиональные услуги на высоком уровне. </div>
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Махмадсаид Кодиров</span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Генеральный директор ООО "City Service" </div>
                        </div>
                    </div>
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/dusti-farma.png" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Фармацевтический дистрибьютер ООО "Дусти Фарм" </h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
                                Продукт компании «1С» внедренный специалистами ООО "КИТ" значительно упростил работу
                                отделу продаж "Дусти Фарм". "Дусти Фарм" рад продуктивному сотрудничеству и выражает
                                искреннюю благодарность за весомый вклад в развитие нашей сферы деятельности и
                                желает прогресса специалистам ООО "КИТ". </div>
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Субхони Комил </span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Генеральный директор ООО "Дусти Фарм" </div>
                        </div>
                    </div>
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/honai-man.png" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Компания "ХОНАИ МАН" </h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
                                Компания ООО "ХОНАИ МАН" выражает благодарность компании ООО "КИТ" за продуктивную и
                                качественную работу, а также за оперативно предоставленную техническую поддержку.
                                Специалисты компании помогли решить проблему с переходом с одной базы данных на
                                новую систему учёта. Желаем Вам профессиональных успехов, экономического и
                                финансового благополучия, а также укрепления взаимоотношений между нашими
                                компаниями! </div>
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Кибриёи Комилджон </span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Генеральный директор ООО "ХОНАИ МАН" </div>
                        </div>
                    </div>
                    <div class="swiper-slide md:!w-112 2xl:!w-112 rounded-xl bg-[#16181D] xl:!w-96">
                        <div class="flex h-full flex-col">
                            <img class="mb-8 h-5 w-max md:h-10 xl:mb-14 xl:h-9 2xl:h-10" src="/images/taj-motors.png" alt="Logo">
                            <h3 class="m-0 mb-4 text-xl font-normal leading-5 md:text-2xl 2xl:mb-7">
                                Компания Тойота Центр "Тадж Моторс" </h3>
                            <div class="mb-5 text-sm/4 text-primary/50 md:text-base xl:text-lg/5 2xl:text-xl/6">
                                ООО «КИТ» является нашим партнерам в области информационно-технической поддержки
                                нашей организации. За время сотрудничества ООО «КИТ» подтвердило свой высокий
                                профессиональный статус, компетентность и активность в решении поставленных задач.
                                Все работы выполняются вовремя, в строго оговоренные сроки и с надлежащим качеством.
                                Сотрудники компании грамотно справляются со своими обязанностями. Мы удовлетворены
                                работами ООО «КИТ» и готовы рекомендовать эту компанию как надежного и
                                ответственного партнера. </div>
                            <div class="mt-auto border-t border-primary/15 pt-5">
                                <span class="text-sm md:text-xl">
                                    Ахмад Мирзоев </span>
                            </div>
                            <div class="h-9 text-xs/3 text-primary/50 md:h-12 md:text-base/4">
                                Генеральный директор ООО "Тадж Моторс" </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-15 flex justify-end gap-2">
                <button
                    class="btn-prev--testimonials lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 h-11 w-11 cursor-pointer rounded-sm border border-primary/30 bg-inherit p-0 transition-all duration-200 ease-in hover:border-button-bg">
                    <svg class="h-4 w-2 text-button-bg lg:h-5 lg:w-3">
                        <use href="#arrow-left"></use>
                    </svg>
                </button>
                <button
                    class="btn-next--testimonials lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 h-11 w-11 cursor-pointer rounded-sm border border-primary/30 bg-inherit p-0 transition-all duration-200 ease-in hover:border-button-bg">
                    <svg class="h-4 w-2 rotate-180 text-button-bg lg:h-5 lg:w-3">
                        <use href="#arrow-left"></use>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <x-brand-slider :logos="$logos" />

    <section class="md:px-15 py-15 px-6">
        <div class="flex flex-col justify-between gap-12">
            <div class="w-full xl:flex xl:items-center xl:gap-10">
                <h2 class="m-0 mb-7 text-4xl font-normal md:text-fluid-lg 2xl:text-9xl">Оставить заявку</h2>
                <p class="xl:max-w-100 m-0 text-fluid-md">
                    Хотите делать качественное ПО? Запросите бесплатную консультацию заполнив эту форму
                </p>
            </div>

            <x-feedback-form />
        </div>
    </section>

    <section class="md:pt-15 2xl:pt-25 xl:pb-15 md:px-7 md:pb-10 xl:pt-20 2xl:pb-20">
        <div class="flex select-none flex-col gap-10 overflow-hidden md:grid md:grid-cols-2 md:gap-4">
            <div class="swiper swiper--main-vacancies relative !mx-3 !overflow-visible rounded-xl md:!m-0 md:!overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full">
                        <div class="w-full">
                            <img class="md:h-132 lg:h-150 h-auto w-full rounded-xl object-cover" src="/images/team-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="w-full">
                            <img class="md:h-132 lg:h-150 h-auto w-full rounded-xl object-cover" src="/images/team-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="w-full">
                            <img class="md:h-132 lg:h-150 h-auto w-full rounded-xl object-cover" src="/images/team-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="w-full">
                            <img class="md:h-132 lg:h-150 h-auto w-full rounded-xl object-cover" src="/images/team-5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="xl:bottom-13 xl:right-13 absolute bottom-10 right-10 z-10 hidden md:block">
                    <div class="flex gap-2">
                        <button
                            class="btn-prev--main-vacancies lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 h-11 w-11 cursor-pointer rounded-sm border border-primary/30 bg-[#16181D] p-0 transition-all duration-200 ease-in hover:border-button-bg hover:bg-primary/30">
                            <svg class="text-button-bg" width="11px" height="22px">
                                <use href="#arrow-left"></use>
                            </svg>
                        </button>
                        <button
                            class="btn-next--main-vacancies lg:w-13 lg:h-13 2xl:w-15 2xl:h-15 h-11 w-11 cursor-pointer rounded-sm border border-primary/30 bg-[#16181D] p-0 transition-all duration-200 ease-in hover:border-button-bg hover:bg-primary/30">
                            <svg class="rotate-180 text-button-bg" width="11px" height="22px">
                                <use href="#arrow-left"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="xl:p-13 relative mx-3 overflow-hidden rounded-xl bg-[#16181D] px-3 py-6 md:m-0 md:flex md:flex-col md:px-6 md:py-11">
                <h2 class="z-10 m-0 mb-7 text-3xl font-normal leading-none md:m-0 md:text-5xl xl:text-6xl 2xl:text-7xl">
                    Команда</h2>
                <p class="z-10 m-0 mb-7 text-xl/6 text-primary/50 md:mb-10 md:mt-auto">Мы поддерживаем друг друга и
                    всегда готовы
                    прийти на
                    помощь. Эта привычка позволяет легко строить палаточные лагеря, а также заниматься поиском дефектов
                    ПО.<br>
                    Мы искренне интересуемся успехами и достижениями каждого. В нашей команде много талантов и еще
                    больше увлечений.</p>
                <div class="flex justify-end md:justify-start">
                    <a class="w-content xl:w-content inline-block rounded-sm border-2 border-solid border-transparent bg-button-bg px-3 py-2 text-xs uppercase leading-none text-white no-underline sm:text-sm xl:px-8 xl:py-5 xl:text-base"
                        href="#">Наши вакансии</a>
                </div>
                <img class="w-114 h-82 xl:w-153 xl:h-106 2xl:w-178 2xl:h-124 absolute right-0 top-0 hidden md:block" src="/images/circle&pentagon.svg" alt="Декоративное изображение">
            </div>

        </div>
    </section>
@endsection
