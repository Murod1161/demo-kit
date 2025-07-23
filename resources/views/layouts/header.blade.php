<header class="animate-fade-in-scale group sticky top-0 z-50 w-full" id="site-header">
    <div class="mx-auto flex max-w-container items-center justify-between p-3 transition-all md:px-7 md:py-7">
        <a class="flex h-8 w-10 bg-[url('/public/images/logo-light.png')] bg-contain bg-no-repeat group-[.header--menu-shown]:bg-[url('/public/images/logo.png')] md:h-[59px] md:w-[74px]"
            href="{{ route('home') }}">
            <span class="sr-only">На главную страницу</span>
        </a>

        <!-- Mobile navigation -->
        <nav class="md:top-22 absolute left-0 top-12 hidden h-screen fixed transition-all duration-200 w-full bg-white p-3 pt-12 text-secondary group-[.header--menu-shown]:flex md:px-7 xl:hidden">
            <div class="accordion flex flex-col gap-2 md:gap-4">
                <div class="accordion__item accordion__item--shown">
                    <div class="accordion__header flex items-center justify-start gap-5 md:justify-between">
                        <h3 class="mr-auto text-sm font-medium uppercase leading-none md:m-0 md:text-base">Услуги</h3>
                        <svg class="h-6 w-6 transition-transform duration-300">
                            <use href="#icon-double-chevron-down"></use>
                        </svg>
                    </div>
                    <div class="accordion__content text-secondary/50">
                        <ul class="m-0 mt-4 list-none p-0">
                            <li class="mb-3">
                                <div class="flex items-center gap-5 justify-between" id="open-dc-subview">
                                    <h3 class="cursor-pointer text-base font-normal leading-none m-0">Услуги ЦОД</h3>
                                    <svg class="h-6 w-6">
                                        <use href="#icon-double-chevron-down"></use>
                                    </svg>
                                </div>
                                <div class="md:top-22 fixed left-0 top-12 z-50 flex hidden w-full translate-x-full transform flex-col overflow-hidden bg-white p-5 text-secondary transition-transform duration-300 xl:hidden"
                                    id="subview-dc-services">
                                    <button class="mb-5 border-none bg-inherit p-0 text-start" id="subview-back">
                                        <svg class="h-8 w-8">
                                            <use href="#arrow-back"></use>
                                        </svg>
                                    </button>

                                    <ul class="h-screen w-full list-none bg-inherit p-0 text-secondary/50">
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="">Аренда сервера</a></li>
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="">Выделенные серверы</a></li>
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="">Серверы для 1C</a></li>
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="">Облачные серверы</a></li>
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="">Услуги дата-центра</a></li>
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="{{ route('colocation') }}">Colocation</a></li>
                                        <li class="mb-3"><a class="leading-none text-inherit no-underline" href="">Аренда серверной стойки</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="{{ route('it-consulting') }}">ИТ-консалтинг</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">ИТ-аутсорсинг</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Автоматизация бизнес процессов</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Разработка</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="my-3 md:my-1">
                    <a class="text-sm font-medium uppercase leading-none text-secondary no-underline md:text-base" href="">Портфолио</a>
                </div>
                <div class="accordion__item accordion__item--shown">
                    <div class="accordion__header flex items-center justify-start gap-5 md:justify-between">
                        <h3 class="mr-auto text-sm font-medium uppercase leading-none md:m-0 md:text-base">Компания</h3>
                        <svg class="h-6 w-6 transition-transform duration-300">
                            <use href="#icon-double-chevron-down"></use>
                        </svg>
                    </div>
                    <div class="accordion__content text-secondary/50">
                        <ul class="m-0 mt-4 list-none p-0">
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">О нас</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Миссия и ценности</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="{{ route('start-cooperation') }}">Начало сотрудничества</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Клиенты</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Наши процессы</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion__item accordion__item--shown">
                    <div class="accordion__header flex items-center justify-start gap-5 md:justify-between">
                        <h3 class="mr-auto text-sm font-medium uppercase leading-none md:m-0 md:text-base">Карьера</h3>
                        <svg class="h-6 w-6 transition-transform duration-300">
                            <use href="#icon-double-chevron-down"></use>
                        </svg>
                    </div>
                    <div class="accordion__content text-secondary/50">
                        <ul class="m-0 mt-4 list-none p-0">
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Вакансии</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Развитие и карьерный рост</a>
                            </li>
                            <li class="mb-3">
                                <a class="m-0 leading-none text-inherit no-underline" href="">Обучение</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="my-3 md:my-1">
                    <a class="text-sm font-medium uppercase leading-none text-secondary no-underline md:text-base" href="{{ route('contact-us') }}">Контакты</a>
                </div>

                <div class="mt-5 flex justify-end">
                    <button class="w-21 rounded-md border-2 border-solid border-transparent bg-button-bg px-2.5 py-2 font-futura text-xs/3 uppercase text-[#F7F7FA] xl:hidden"
                        data-click-action="show-modal" data-path="modal-callback" type="button">Связаться
                    </button>
                </div>
            </div>
        </nav>

        <!-- Desktop navigation -->
        <nav class="hidden xl:block">
            <ul class="xl:w-188 m-0 flex list-none flex-col gap-7 p-0 xl:flex-row xl:justify-center xl:gap-4">
                <li class="group/services relative flex items-center justify-between xl:list-item">
                    <a class="cursor-context-menu items-center text-sm font-medium uppercase group-hover/services:text-button-bg">Услуги
                        <span class="absolute -bottom-2 left-0 h-[1px] w-3 bg-primary/40 transition-all duration-200 ease-in group-hover/services:w-full group-hover/services:bg-button-bg"></span>
                    </a>
                    <svg class="h-4 w-4 xl:hidden">
                        <use href="#icon-double-chevron-down"></use>
                    </svg>
                    <!-- dropdown -->
                    <ul
                        class="invisible absolute left-0 z-50 mt-5 w-80 list-none rounded-md bg-primary p-0 py-4 text-secondary opacity-0 shadow-lg transition-all duration-300 group-hover/services:visible group-hover/services:opacity-100">
                        <li class="dropdown-arrow group/services-item mr-6 flex items-center justify-between">
                            <a class="navbar-link cursor-context-menu group-hover/services-item:text-button-bg" href="#">Услуги ЦОД</a>
                            <svg class="h-3 w-3 transition-all duration-200 ease-in group-hover/services-item:text-button-bg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <use href="#icon-arrow"></use>
                            </svg>

                            <ul
                                class="invisible absolute -top-4 left-80 z-50 w-80 list-none rounded-md bg-primary p-0 py-4 text-secondary opacity-0 shadow-lg transition-all duration-300 group-hover/services-item:visible group-hover/services-item:opacity-100">
                                <li>
                                    <a class="navbar-link" href="{{ route('it-consulting') }}">Аренда сервера</a>
                                </li>
                                <li>
                                    <a class="navbar-link" href="#">Выделенные серверы</a>
                                </li>
                                <li>
                                    <a class="navbar-link" href="#">Серверы для 1C</a>
                                </li>
                                <li>
                                    <a class="navbar-link" href="#">Облачные серверы</a>
                                </li>
                                <li>
                                    <a class="navbar-link" href="#">Услуги дата-центра</a>
                                </li>
                                <li>
                                    <a class="navbar-link" href="#">Colocation</a>
                                </li>
                                <li>
                                    <a class="navbar-link" href="#">Аренда серверной стойки</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="navbar-link" href="{{ route('it-consulting') }}">ИТ-консалтинг</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">ИТ-аутсорсинг</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">Автоматизация бизнес процессов</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">Разработка</a>
                        </li>
                    </ul>
                </li>

                <li class="group/portfolio xl:mr-130 relative">
                    <a class="text-sm font-medium uppercase text-inherit no-underline hover:text-button-bg" href="#">Портфолио
                        <span class="absolute -bottom-2 left-0 h-[1px] w-3 bg-primary/40 transition-all duration-200 ease-in group-hover/portfolio:w-full group-hover/portfolio:bg-button-bg"></span>
                    </a>
                </li>

                <li class="group/company relative flex items-center justify-between xl:list-item">
                    <a class="cursor-context-menu text-sm font-medium uppercase text-inherit no-underline group-hover/company:text-button-bg" href="#">Компания</a>
                    <svg class="h-4 w-4 xl:hidden">
                        <use href="#icon-double-chevron-down"></use>
                    </svg>
                    <!-- dropdown -->
                    <ul
                        class="invisible absolute left-0 z-50 mt-5 w-80 list-none rounded-md bg-primary p-0 py-4 text-secondary opacity-0 shadow-lg transition-all duration-300 group-hover/company:visible group-hover/company:opacity-100">
                        <li class="dropdown-arrow">
                            <a class="navbar-link" href="#">О нас</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">Миссия и ценности</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="{{ route('start-cooperation') }}">Начало сотрудничества</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">Клиенты</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">Наши процессы</a>
                        </li>
                    </ul>
                </li>

                <li class="group/career relative flex items-center justify-between xl:list-item">
                    <a class="cursor-context-menu text-sm font-medium uppercase text-inherit no-underline group-hover/career:text-button-bg" href="#">Карьера</a>
                    <svg class="h-4 w-4 xl:hidden">
                        <use href="#icon-double-chevron-down"></use>
                    </svg>
                    <!-- dropdown -->
                    <ul
                        class="invisible absolute left-0 z-50 mt-5 w-80 list-none rounded-md bg-primary p-0 py-4 text-secondary opacity-0 shadow-lg transition-all duration-300 group-hover/career:visible group-hover/career:opacity-100">
                        <li class="dropdown-arrow">
                            <a class="navbar-link" href="#">Вакансии</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="№">Развитие и карьерный рост</a>
                        </li>
                        <li>
                            <a class="navbar-link" href="#">Обучение</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="text-sm font-medium uppercase text-inherit no-underline hover:text-button-bg" href="{{ route('contact-us') }}">Контакты</a>
                </li>
            </ul>
            <div class="flex justify-end xl:hidden">
                <button class="w-21 rounded-md border-2 border-solid border-transparent bg-button-bg px-2.5 py-2 font-futura text-xs/3 uppercase text-[#F7F7FA] xl:hidden"
                    data-click-action="show-modal" data-path="modal-callback" type="button">Связаться
                </button>
            </div>
        </nav>

        <div class="flex gap-5 md:items-start">
            <div class="hidden justify-end group-[.header--menu-shown]:hidden md:block">
                <button
                    class="w-26 xl:w-30 xl:h-13 2xl:w-35 h-10 cursor-pointer rounded-md border-2 border-solid border-transparent bg-primary px-2.5 py-2 font-futura text-xs/3 uppercase text-[#26264F] transition-all duration-200 ease-in hover:bg-[#31353f] hover:text-white xl:text-sm 2xl:h-16 2xl:text-base"
                    data-click-action="show-modal" data-path="modal-callback" type="button">Связаться
                </button>
            </div>

            <button class="border-none bg-transparent p-0 xl:hidden" type="button" onclick="this.closest('header')?.classList.toggle('header--menu-shown')">
                <span class="sr-only">Скрыть/Показать меню</span>

                <div class="toggler-icons w-7.5 h-7.5 relative flex cursor-pointer flex-col justify-center group-[.header--menu-shown]:hidden">
                    <span class="mb-1.5 block h-[1px] w-full bg-primary"></span>
                    <span class="block h-[1px] w-full bg-primary"></span>
                </div>
                <div class="w-7.5 h-7.5 relative hidden cursor-pointer flex-col justify-center group-[.header--menu-shown]:flex">
                    <span class="block h-[1px] w-full rotate-45 bg-secondary"></span>
                    <span class="rotate-135 block h-[1px] w-full bg-secondary"></span>
                </div>
            </button>
        </div>
    </div>

</header>
