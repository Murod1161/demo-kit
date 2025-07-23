@extends('layouts.app')

@section('title', 'Начало сотрудничества | ' . config('app.name'))

@section('content')
    <section class="2xl:mb-30 2xl:mt-30 mb-7 cursor-pointer select-none p-3 md:p-7 2xl:mx-8">
        <h1 class="animate-fade-in-scale 2xl:mb-15 m-0 mb-7 text-[45px] font-normal leading-none md:text-fluid-xl 2xl:text-[150px]">Начало<br>
            сотрудничества</h1>
        <p class="animate-fade-in-scale max-w-200 m-0 text-xl font-normal leading-none text-primary/50 md:text-[28px]">
            Мы учитываем индивидуальные особенности каждого проекта, чтобы полностью удовлетворить ожидания клиентов
        </p>
    </section>

    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-white">
        <div class="mx-auto flex max-w-container flex-col items-center px-3 py-10 text-secondary md:px-7 xl:py-24">
            <h2 class="md:w-130 lg:w-130 xl:w-200 xl:mb-18 2xl:w-260 m-0 mb-6 font-normal leading-none md:mb-10 md:text-3xl lg:mb-12 xl:text-5xl 2xl:text-6xl">Мы ценим каждый запрос и оперативно на него
                реагируем
            </h2>

            <ul class="m-0 mb-10 flex list-none justify-center gap-3 p-0 xl:mb-24">
                <li class="xl:w-54 xl:h-54 flex h-20 w-20 flex-col items-center justify-center gap-1 rounded-lg bg-secondary/5 md:h-40 md:w-40 md:gap-2 xl:gap-3">
                    <img class="md:w-15 md:h-15 xl:w-17 xl:h-17 h-8 w-8" src="/images/phone-icon.png" alt="Иконка телефона">
                    <p class="m-0 text-xs md:text-lg xl:text-xl">по телефону</p>
                </li>
                <li class="xl:w-54 xl:h-54 flex h-20 w-20 flex-col items-center justify-center gap-1 rounded-lg bg-secondary/5 md:h-40 md:w-40 md:gap-2 xl:gap-3">
                    <img class="md:w-15 md:h-15 xl:w-17 xl:h-17 h-8 w-8" src="/images/mail-icon.png" alt="Иконка почты">
                    <p class="m-0 text-xs md:text-lg xl:text-xl">по почте</p>
                </li>
                <li class="xl:w-54 xl:h-54 flex h-20 w-20 flex-col items-center justify-center gap-1 rounded-lg bg-secondary/5 md:h-40 md:w-40 md:gap-2 xl:gap-3">
                    <img class="md:w-15 md:h-15 xl:w-17 xl:h-17 h-8 w-8" src="/images/site-icon.png" alt="Иконка ноутбука">
                    <p class="m-0 text-xs md:text-lg xl:text-xl">через сайт</p>
                </li>
            </ul>

            <div class="grid-cols-24 grid">
                <div class="col-span-5">
                    <span class="hidden pt-5 uppercase text-secondary/50 xl:block">Старт работы</span>
                </div>
                <div class="xl:col-span-19 col-span-full">
                    <h2 class="md:px-15 xl:mb-18 m-0 mb-7 text-fluid-lg font-normal leading-none md:mb-10 xl:p-0">Первые шаги на пути к сотрудничеству с компанией «КИТ»</h2>
                    <div class="xl:gap-15 flex gap-8 md:justify-center md:gap-10 xl:justify-start">
                        <ul class="m-0 flex list-none flex-col gap-8 p-0 font-medium text-white md:gap-7 xl:gap-10">
                            <li class="xl:h-15 xl:w-15 flex h-9 w-9 items-center justify-center rounded-sm bg-[#7271ef] md:h-11 md:w-11">1</li>
                            <span class="border-1 rotate-90 border-dashed border-black"></span>
                            <li class="xl:h-15 xl:w-15 flex h-9 w-9 items-center justify-center rounded-sm bg-[#8A71EF] md:h-11 md:w-11">2</li>
                            <span class="border-1 rotate-90 border-dashed border-black"></span>

                            <li class="xl:h-15 xl:w-15 flex h-9 w-9 items-center justify-center rounded-sm bg-[#A66DE0] md:h-11 md:w-11">3</li>
                            <span class="border-1 rotate-90 border-dashed border-black"></span>

                            <li class="xl:h-15 xl:w-15 flex h-9 w-9 items-center justify-center rounded-sm bg-[#FF5281] md:h-11 md:w-11">4</li>
                            <span class="border-1 rotate-90 border-dashed border-black"></span>

                            <li class="xl:h-15 xl:w-15 flex h-9 w-9 items-center justify-center rounded-sm bg-[#F89675] md:h-11 md:w-11">5</li>
                        </ul>
                        <ul class="w-70 md:w-150 xl:w-225 m-0 flex list-none flex-col gap-3 p-0 text-secondary md:gap-5 xl:gap-7">
                            <li class="border-t-1 border-primary pt-3 md:pt-5">
                                <h4 class="m-0 font-medium md:text-xl xl:mb-4 xl:text-3xl">Заявка</h4>
                                <p class="xl:w-120 w-57 md:w-100 m-0 text-sm leading-none md:text-base xl:text-xl">Обработаем вашу заявку на сайте, письмо по почте или звонок в кратчайший срок по номеру
                                    <span class="text-[#0200D5]">+992 000 00 00 00</span>
                                </p>
                            </li>
                            <li class="border-t-1 border-primary pt-3 md:pt-5">
                                <h4 class="m-0 font-medium md:text-xl xl:mb-4 xl:text-3xl">Звонок с техническим экспертом</h4>
                                <p class="xl:w-120 w-57 md:w-100 m-0 text-sm leading-none md:text-base xl:text-xl">Расскажем про «КИТ», наш подход к работе, узнаем про вас и определим, как вам помочь</p>
                            </li>
                            <li class="border-t-1 mt-3 border-primary pt-3 md:mt-1 md:pt-5">
                                <h4 class="m-0 font-medium md:text-xl xl:mb-4 xl:text-3xl">Коммерческое предложение</h4>
                                <p class="xl:w-120 w-57 md:w-100 m-0 text-sm leading-none md:text-base xl:text-xl">Сформируем коммерческое предложение на основе собранных данных</p>
                            </li>
                            <li class="border-t-1 mt-4 border-primary pt-3 md:mt-0 md:pt-5">
                                <h4 class="m-0 font-medium md:text-xl xl:mb-4 xl:text-3xl">Оформление</h4>
                                <p class="xl:w-120 w-57 md:w-100 m-0 text-sm leading-none md:text-base xl:text-xl">Оформим договор, подпишем соглашение о неразглашении конфиденциальной информации</p>
                            </li>
                            <li class="border-t-1 mt-4 border-primary pt-3 md:mt-0 md:pt-5">
                                <h4 class="m-0 font-medium md:text-xl xl:mb-4 xl:text-3xl">Старт</h4>
                                <p class="xl:w-120 w-57 md:w-100 m-0 text-sm leading-none md:text-base xl:text-xl">Начнем работу над проектом согласно установленному плану</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-[#f7f7fa]">
        <div class="mx-auto max-w-container px-3 py-10 text-secondary md:px-7 xl:py-24">
            <div class="grid-cols-24 grid">
                <div class="col-span-5">
                    <span class="hidden pt-5 uppercase text-secondary/50 xl:block">Сотрудничество</span>
                </div>

                <div class="xl:col-span-19 col-span-full">
                    <h2 class="xl:mb-18 m-0 mb-7 text-fluid-lg font-normal leading-none md:mb-10 xl:p-0">Как мы работаем с клиентами</h2>
                    <ul class="scrollbar-none m-0 -mr-3 flex list-none gap-4 overflow-x-auto p-0 md:-mr-7 md:pr-7 xl:inline">
                        <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-secondary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                            <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">01</div>
                            <p class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl">Анализ</p>
                            <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                                <img class="absolute inset-0 h-full w-full scale-95 rounded-lg opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                    src="/images/analysis.jpg" alt="Анализ">
                            </div>
                            <div class="col-span-7 text-sm leading-none text-secondary/50 xl:my-5 xl:text-lg">
                                Определим, какую функциональность необходимо протестировать, наметим план действий по обеспечению качества</div>
                        </li>
                        <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-secondary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                            <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">02</div>
                            <p class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl">
                                Тестирование ПО
                            </p>
                            <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                                <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                    src="/images/software-testing.jpeg" alt="Тестирование ПО">
                            </div>
                            <div class="col-span-7 text-sm leading-none text-secondary/50 xl:my-5 xl:text-lg">
                                Подготовим ежедневные отчеты о статусе тестирования, чтобы держать вас в курсе происходящего
                            </div>
                        </li>
                        <li class="xl:grid-cols-19 group flex min-w-52 flex-col border-t border-secondary/15 py-5 xl:grid xl:gap-5 xl:py-2">
                            <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">03</div>
                            <p class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl">
                                Результат
                            </p>
                            <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                                <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                    src="/images/result.jpeg" alt="Результат">
                            </div>
                            <div class="col-span-7 text-sm leading-none text-secondary/50 xl:my-5 xl:text-lg">
                                Предоставим подробный отчет по тестированию со списком ошибок и рекомендациями по улучшению качества ПО
                            </div>
                        </li>
                        <li class="xl:grid-cols-19 group mr-3 flex min-w-52 flex-col border-t border-secondary/15 py-5 xl:m-0 xl:grid xl:gap-5 xl:py-2">
                            <div class="col-span-2 mb-3 font-mono text-xs xl:my-6 xl:text-sm">04</div>
                            <p class="col-span-6 mb-4 text-2xl leading-none text-inherit no-underline xl:my-5 xl:text-4xl">
                                Поддержка</p>
                            <div class="w-50 h-31 relative col-span-4 flex hidden items-center justify-center xl:block">
                                <img class="absolute inset-0 h-full w-full scale-95 rounded-lg object-cover opacity-0 transition-all duration-500 ease-in-out group-hover:scale-100 group-hover:opacity-100"
                                    src="/images/support.jpeg" alt="Поддержка">
                            </div>
                            <div class="col-span-7 text-sm leading-none text-secondary/50 xl:my-5 xl:text-lg">
                                Обеспечим поддержку ПО после того, как закончим активную фазу тестирования
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-white">
        <div class="mx-auto max-w-container px-3 py-10 text-secondary md:px-7 xl:py-24">
            <div class="grid-cols-24 grid">
                <div class="col-span-5">
                    <span class="hidden pt-5 uppercase text-secondary/50 xl:block">Сотрудничество</span>
                </div>

                <div class="xl:col-span-19 col-span-full">
                    <h2 class="m-0 mb-5 text-fluid-lg font-normal leading-none md:mb-8 xl:p-0">Форматы проектов и модели сотрудничества</h2>
                    <p class="m-0 mb-5 text-secondary/50 md:mb-8 lg:text-xl">Предлагаем гибкие модели сотрудничества в зависимости от типа проекта:</p>

                    <!-- Accordion Mobile -->
                    <div class="accordion flex flex-col gap-2 md:gap-4 lg:hidden">
                        <div class="accordion__item accordion__item--shown rounded-lg border border-secondary/20 p-3 md:p-7">
                            <div class="accordion__header flex items-center justify-start gap-5 md:justify-between">
                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-button-bg/60 text-xs font-medium text-white md:h-14 md:w-14 md:text-base">TJS</div>
                                <h3 class="mr-auto text-sm font-medium uppercase leading-none md:m-0 md:text-xl">Фиксированная цена</h3>
                                <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                    <use href="#icon-double-chevron-down"></use>
                                </svg>
                            </div>
                            <div class="accordion__content">
                                <p class="font-medium leading-none md:my-7 md:text-lg">
                                    Подходит на небольших и средних проектах с чёткими границами, установленными методологиями и устойчивым набором требований, которые не будут меняться в течение проекта
                                </p>
                                <ul class="list-none p-0">
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Требования и объём проекта определены заранее</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Любые изменения требуют пересмотра сроков и бюджета проекта</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Фиксированные стоимость и продолжительность проекта</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Поэтапная оплата</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion__item accordion__item--shown rounded-lg border border-secondary/20 p-3 md:p-7">
                            <div class="accordion__header flex items-center justify-start gap-5 md:justify-between">
                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-button-bg/60 text-xs font-medium text-white md:h-14 md:w-14 md:text-base">TJS</div>
                                <h3 class="mr-auto text-start text-sm font-medium uppercase leading-none md:m-0 md:text-xl">Оплата по факту</h3>
                                <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                    <use href="#icon-double-chevron-down"></use>
                                </svg>
                            </div>
                            <div class="accordion__content">
                                <p class="font-medium leading-none md:my-7 md:text-lg">
                                    Подходит проектам с несформированными требованиями или в случае, когда невозможно определить риски на ранних этапах проекта
                                </p>
                                <ul class="list-none p-0">
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Стоимость рассчитывается из фактических трудозатрат</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Требования определяются в процессе работы</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Допустимы любые изменения на проекте</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Поэтапная оплата</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion__item accordion__item--shown rounded-lg border border-secondary/20 p-3 md:p-7">
                            <div class="accordion__header flex items-center justify-start gap-5 md:justify-between">
                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-button-bg/60 text-xs font-medium text-white md:h-14 md:w-14 md:text-base">TJS</div>
                                <h3 class="mr-auto text-sm font-medium uppercase leading-none md:m-0 md:text-xl">Выделенная команда</h3>
                                <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                    <use href="#icon-double-chevron-down"></use>
                                </svg>
                            </div>
                            <div class="accordion__content">
                                <p class="font-medium leading-none md:my-7 md:text-lg">
                                    Подходит на долгосрочных проектах с нечеткими требованиями и частыми изменениями границ, а также при параллельно идущих проектах, для которых может потребоваться
                                    перемещение ресурсов
                                </p>
                                <ul class="list-none p-0">
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Определяется идея проекта и основные требования</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Команда гибко подстраивается под любые изменения</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Сохранение знаний и полный контроль работы команды</p>
                                    </li>
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Стоимость работы команды определена и оплачивается ежемесячно</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <ul class="xl:w-258 grid list-none grid-cols-3 gap-4 p-0">
                            <li class="flex h-full flex-col rounded-lg border border-secondary/20">
                                <div class="flex flex-1 flex-col">
                                    <div class="h-60 rounded-lg bg-[#f7f7fa] p-7">
                                        <p class="m-0 text-xl leading-none xl:leading-6">Подходит на небольших и средних проектах с чёткими границами, установленными методологиями и устойчивым набором
                                            требований,
                                            которые
                                            не будут меняться в течение проекта</p>
                                    </div>
                                    <div class="p-7">
                                        <ul class="list-none p-0 text-secondary/60">
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Требования и объём проекта определены заранее</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Любые изменения требуют пересмотра сроков и бюджета проекта</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Фиксированные стоимость и продолжительность проекта</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Поэтапная оплата</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-auto flex justify-center">
                                        <svg class="h-5 w-5 rotate-90 text-button-bg">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-start gap-3 p-7">
                                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-button-bg/60 text-base font-medium text-white">TJS</div>
                                        <h3 class="m-0 text-lg font-medium uppercase leading-none">Фиксированная цена</h3>
                                    </div>
                                </div>

                            </li>
                            <li class="flex h-full flex-col rounded-lg border border-secondary/20">
                                <div class="flex flex-1 flex-col">
                                    <div class="h-60 rounded-lg bg-[#f7f7fa] p-7">
                                        <p class="m-0 text-xl leading-none xl:leading-6">Подходит проектам с несформированными требованиями или в случае, когда невозможно определить риски на ранних
                                            этапах проекта</p>
                                    </div>
                                    <div class="p-7">
                                        <ul class="list-none p-0 text-secondary/60">
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Стоимость рассчитывается из фактических трудозатрат</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Требования определяются в процессе работы</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Допустимы любые изменения на проекте</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Поэтапная оплата</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-auto flex justify-center">
                                        <svg class="h-5 w-5 rotate-90 text-button-bg">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-start gap-3 p-7">
                                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-button-bg/60 text-base font-medium text-white">TJS</div>
                                        <h3 class="m-0 text-lg font-medium uppercase leading-none">Оплата по факту</h3>
                                    </div>
                                </div>
                            </li>
                            <li class="flex h-full flex-col rounded-lg border border-secondary/20">
                                <div class="flex flex-1 flex-col">

                                    <div class="h-60 rounded-lg bg-[#f7f7fa] p-7">
                                        <p class="m-0 text-xl leading-none xl:leading-6">Подходит на долгосрочных проектах с нечеткими требованиями и частыми изменениями границ, а также при параллельно
                                            идущих
                                            проектах,
                                            для которых может потребоваться
                                            перемещение ресурсов</p>
                                    </div>
                                    <div class="p-7">
                                        <ul class="list-none p-0 text-secondary/60">
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Определяется идея проекта и основные требования</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Команда гибко подстраивается под любые изменения</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Сохранение знаний и полный контроль работы команды</p>
                                            </li>
                                            <li class="mb-3 flex items-start gap-2 xl:mb-4">
                                                <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                                <p class="m-0 text-lg leading-none">Стоимость работы команды определена и оплачивается ежемесячно</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-auto flex justify-center">
                                        <svg class="h-5 w-5 rotate-90 text-button-bg">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-start gap-3 p-7">
                                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-button-bg/60 text-base font-medium text-white">TJS</div>
                                        <h3 class="m-0 text-lg font-medium uppercase leading-none">Выделенная команда</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-[#f7f7fa]">
        <div class="mx-auto max-w-container px-3 py-10 text-secondary md:px-7 xl:py-24">
            <div class="grid-cols-24 grid">
                <div class="col-span-5">
                    <span class="hidden pt-5 uppercase text-secondary/50 xl:block">Сотрудничество</span>
                </div>

                <div class="xl:col-span-19 col-span-full">
                    <h2 class="xl:w-265 xl:mb-18 m-0 mb-7 text-fluid-lg font-normal leading-none md:mb-10 xl:p-0">Сопровождение и поддержка проекта</h2>
                    <ul class="xl:w-258 grid list-none grid-cols-1 gap-3 p-0 md:grid-cols-2 md:gap-4">
                        <li class="md:min-h-55 relative overflow-hidden rounded-lg bg-white p-3 md:flex md:items-center md:p-7">
                            <p class="text-2xl leading-none md:m-0 md:text-3xl">Контролируем процесс исправления выявленных дефектов</p>
                            <img class="w-55 md:w-87 -right-15 md:-right-23 md:-bottom-33 h-55 md:h-87 -bottom-23 absolute" src="/images/benefits-1.svg" alt="Фоновая фигура">
                        </li>
                        <li class="md:min-h-55 relative overflow-hidden rounded-lg bg-white p-3 md:flex md:items-center md:p-7">
                            <p class="text-2xl leading-none md:m-0 md:text-3xl">Обновляем и актуализируем сценарии тестирования</p>
                            <img class="w-55 md:w-87 -right-15 md:-right-23 md:-bottom-33 h-55 md:h-87 -bottom-23 absolute" src="/images/benefits-2.svg" alt="Фоновая фигура">
                        </li>
                        <li class="md:min-h-55 relative overflow-hidden rounded-lg bg-white p-3 md:flex md:items-center md:p-7">
                            <p class="text-2xl leading-none md:m-0 md:text-3xl">Следим за правильностью и качеством внесенных изменений</p>
                            <img class="w-55 md:w-87 -right-15 md:-right-23 md:-bottom-33 h-55 md:h-87 -bottom-23 absolute" src="/images/benefits-3.svg" alt="Фоновая фигура">
                        </li>
                        <li class="md:min-h-55 relative overflow-hidden rounded-lg bg-white p-3 md:flex md:items-center md:p-7">
                            <p class="text-2xl leading-none md:m-0 md:text-3xl">Участвуем в приемо-сдаточных испытаниях (ПСИ)</p>
                            <img class="w-55 md:w-87 -right-15 md:-right-23 md:-bottom-33 h-55 md:h-87 -bottom-23 absolute" src="/images/benefits-4.svg" alt="Фоновая фигура">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-white text-secondary">
        <div class="mx-auto max-w-container px-3 py-10 md:px-7 xl:py-24 flex flex-col gap-12">
            <div class="w-full xl:flex xl:items-center xl:gap-10">
                <h2 class="m-0 mb-7 text-4xl font-normal md:text-fluid-lg 2xl:text-9xl">Оставить заявку</h2>
                <p class="xl:max-w-100 m-0 text-fluid-md">
                    Хотите делать качественное ПО? Запросите бесплатную консультацию заполнив эту форму
                </p>
            </div>

            <x-feedback-form />
        </div>
    </section>
@endsection
