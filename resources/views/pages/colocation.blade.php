@extends('layouts.app')

@section('title', 'Colocation | ' . config('app.name'))

@section('content')
    <section class="2xl:mb-30 2xl:mt-30 max-w-350 mx-auto mb-7 mt-5 select-none px-3 md:p-7">
        <h1 class="animate-fade-in-scale 2xl:mb-15 w-70 m-0 mb-7 text-[28px] font-medium leading-none md:w-max md:text-4xl lg:text-5xl xl:text-7xl">Colocation — размещение серверов</h1>
        <ul class="lg:w-200 mb-5 flex list-none flex-col flex-wrap gap-1 p-0 text-[10px] text-secondary md:text-sm lg:flex-row xl:text-base">
            <li class="rounded-xl bg-white p-1.5 leading-none md:p-2 lg:w-max xl:p-3">Вторая розетка для подключение резервного блока питания</li>
            <li class="rounded-xl bg-white p-1.5 leading-none md:p-2 lg:w-max xl:p-3">IP-KVM по запросу для удаленного управления</li>
            <li class="rounded-xl bg-white p-1.5 leading-none md:p-2 lg:w-max xl:p-3">Техническая поддержка 24х7 и удаленное обслуживание</li>
            <li class="rounded-xl bg-white p-1.5 leading-none md:p-2 lg:w-max xl:p-3">Подключение IPM/iLO/iDRAC для удаленного доступа</li>
            <li class="rounded-xl bg-white p-1.5 leading-none md:p-2 lg:w-max xl:p-3">Круглосуточный доступ в ЦОД для работы с оборудованием</li>
        </ul>
        <p class="animate-fade-in-scale max-w-140 xl:max-w-220 m-0 text-sm font-normal leading-none text-primary/50 md:text-lg xl:text-2xl">
            Размещение сервера на площадках «KIT», соответствующих стандарту Tier II в Душанбе. По запросу перезагрузим и подключим IP-KVM для удаленного управления сервером. Основная и резервные розетки
            для серверов с 2 блоками питания. </p>
    </section>

    <section class="w-full bg-[#f7f7fa]">
        <div class="max-w-350 mx-auto px-3 py-10 text-secondary md:px-7 xl:py-24">
            <h2 class="m-0 mb-6 text-xl font-medium md:mb-10 md:text-3xl lg:text-4xl xl:text-6xl">Тарифы на размещение сервера</h2>
            <div class="accordion">
                <div class="accordion__item mb-6 cursor-pointer rounded-lg bg-white shadow-sm md:mb-10">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 text-lg font-normal leading-none md:text-2xl md:text-xl">Что входит в стоимость размещения сервера?</h3>
                        <svg class="h-6 w-6 transition-transform duration-300">
                            <use href="#icon-double-chevron-down"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <ul class="m-0 list-none p-0">
                                <li class="mb-3 flex items-start gap-2">
                                    <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                    <p class="m-0 leading-none">Безлимитный трафик на скорости 100 Мбит/с или 1Гбит/с с 100 ТБ</p>
                                </li>
                                <li class="mb-3 flex items-start gap-2">
                                    <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                    <p class="m-0 leading-none">Один публичный IPv4-адрес в приватном VLAN</p>
                                </li>
                                <li class="mb-3 flex items-start gap-2">
                                    <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                    <p class="m-0 leading-none">Подключение порта удаленного управления (IPMI, iLO, iDRACK)</p>
                                </li>
                                <li class="mb-3 flex items-start gap-2">
                                    <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                    <p class="m-0 leading-none">Техническая поддержка 24/7</p>
                                </li>
                                <li class="mb-3 flex items-start gap-2">
                                    <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                    <p class="m-0 leading-none">Услуги удаленного обслуживания</p>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                    <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="grid list-none grid-cols-1 gap-5 p-0">
                <li class="rounded-lg bg-white p-4 shadow-sm md:p-7">
                    <div class="mb-services__item flex flex-col justify-between font-medium md:flex-row">
                        <div>
                            <div class="mb-services__title mb-3 text-2xl md:text-3xl" data-title="Название">Colocation 1U</div>
                            <div class="mb-services__specs md:flex md:w-80 md:flex-wrap md:gap-10 md:gap-y-5 md:text-lg lg:w-full">
                                <div class="mb-services__spec" data-title="Мощность">450 Вт</div>
                                <div class="mb-services__spec" data-title="Розетки">2 шт</div>
                                <div class="mb-services__spec" data-title="IP-адреса">1 IPv4</div>
                                <div class="mb-services__spec" data-title="Скорость">100 Мбит/с</div>
                            </div>
                        </div>
                        <div class="mb-services__order mt-3 md:flex md:flex-col md:justify-end">
                            <div class="mb-services__price text-xl md:text-2xl" data-title="Стоимость"> 500 TJS / мес</div>
                            <div class="mb-services__order-btn mt-5 flex justify-end">
                                <button class="w-21 cursor-pointer rounded-md border-2 border-solid border-transparent bg-button-bg px-2.5 py-2 font-futura text-xs/3 font-medium uppercase text-white"
                                    data-click-action="show-popup">Заказать</button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="rounded-lg bg-white p-4 shadow-sm md:p-7">
                    <div class="mb-services__item flex flex-col justify-between font-medium md:flex-row">
                        <div>
                            <div class="mb-services__title mb-3 text-2xl md:text-3xl" data-title="Название">Colocation 2U</div>
                            <div class="mb-services__specs md:flex md:w-80 md:flex-wrap md:gap-10 md:gap-y-5 md:text-lg lg:w-full">
                                <div class="mb-services__spec" data-title="Мощность">350 Вт</div>
                                <div class="mb-services__spec" data-title="Розетки">2 шт</div>
                                <div class="mb-services__spec" data-title="IP-адреса">1 IPv4</div>
                                <div class="mb-services__spec" data-title="Скорость">100 Мбит/с или 1 Гбит/с + 100ТБ</div>
                            </div>
                        </div>
                        <div class="mb-services__order mt-3 md:flex md:flex-col md:justify-end">
                            <div class="mb-services__price text-xl md:text-2xl" data-title="Стоимость"> 750 TJS / мес</div>
                            <div class="mb-services__order-btn mt-5 flex justify-end">
                                <button class="w-21 cursor-pointer rounded-md border-2 border-solid border-transparent bg-button-bg px-2.5 py-2 font-futura text-xs/3 font-medium uppercase text-white"
                                    data-click-action="show-popup">Заказать</button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="text-center text-secondary/60 md:text-lg">Все цены указаны с учетом всех налогов</p>

            <div class="my-10 lg:my-20">
                <h2 class="m-0 mb-6 text-xl font-medium md:mb-10 md:text-3xl lg:text-4xl xl:text-6xl">Дополнительные услуги</h2>
                <div class="accordion">
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">Дополнительные ресурсы</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительные 100
                                            Вт электрической
                                            мощности (220V/48V)</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 200 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительная
                                            розетка без выделения мощности</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 30 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительная
                                            розетка питания 100 Вт</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 320 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">Сетевые услуги</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Порт
                                            локальной сети
                                            1 Гбит/c</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 30 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Порт
                                            локальной сети
                                            10 Гбит/c</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 300 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительный порт
                                            100 Мбит/c без Интернета</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 20 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительный порт
                                            1 Гбит/c без Интернета</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 30 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительный порт
                                            10 Гбит/c без Интернета</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 300 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительный порт
                                            10 Мбит/с с Интернетом</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 110 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительный порт
                                            100 Мбит/с с Интернетом</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 600 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Дополнительный порт
                                            1 Гбит/с с Интернетом</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 3600 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Увеличение
                                            скорости
                                            подключения на 100 Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 600 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Увеличение
                                            скорости
                                            подключения до 1 Гбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 3600 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">MC-LAG 1
                                            Гбит/с
                                        </div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 50 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">IP-адреса</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">1
                                            IPv4-адрес</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 15 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Подсеть
                                            IPv4 /29 (5
                                            шт)</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 120 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Подсеть
                                            IPv4 /28 (13
                                            шт)</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 240 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Подсеть
                                            IPv4 /27 (29
                                            шт)</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 480 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Подсеть
                                            IPv4 /26 (61
                                            шт)</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 960 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Подсеть
                                            IPv6 /64
                                        </div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 15 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Подсеть
                                            IPv6 /48
                                        </div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 120 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">Диски для бэкапов</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Диск для
                                            бэкапов 50
                                            Гб</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 5 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Диск для
                                            бэкапов 100
                                            Гб</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 10 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Диски для
                                            бэкапов 1
                                            Тб</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 100 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">Защита от DDoS-атак</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита 10
                                            Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 457 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита 20
                                            Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 823 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита 50
                                            Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 1739 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита 100
                                            Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 3203 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита
                                            уровня L7 5 Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 2500 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита
                                            уровня L7 10 Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 5000 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита
                                            уровня L7 25 Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 10000 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Защита
                                            уровня L7 50 Мбит/с</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 15000 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">Кроссировки до 3 операторов связи</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Оптическая
                                            или медная кроссировка по дата-центру</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> 80 TJS </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 80 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Кроссировка
                                            по дата-центру до магистрального узла ТТК</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> 180 TJS </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 180 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Кроссировка
                                            по дата-центру до магистрального узла TeliaCarrier</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> 180 TJS </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 180 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 w-[90%] text-lg font-normal leading-none md:text-xl">Прочие допы</h3>
                            <svg class="h-6 w-6 transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                                <div class="mb-additional-services__content grid gap-5 lg:gap-0">
                                    <div class="mb-7 hidden justify-between text-xl font-medium lg:flex">
                                        <span class="lg-additional-services__name">Наименование</span>
                                        <div class="lg-additional-services__price flex gap-10">
                                            <span class="lg-additional-services__price-install">Установка</span>
                                            <span class="lg-additional-services__price-monthly">В месяц</span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Предоставление ячейки хранения ЗИП</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 160 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Аренда АВР,
                                            8А, 1.7кВт, 2 розетки schuko, 4 розетки C13</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 160 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Предоставление кабеля электропитания 10A, 100-230V, 2′, (5) C13 to C14, 1 шт.</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> 40 TJS </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> Бесплатно </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">
                                            Предоставление патч-корда до 3 метров</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> 40 TJS </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> Бесплатно </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Хранение
                                            упаковки</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 500 TJS </span>
                                        </div>
                                    </div>
                                    <div class="mb-additional-services__content-item md:flex md:items-center md:justify-between">
                                        <div class="mb-additional-services__name md:w-118 mb-3 text-lg leading-none text-secondary/70 md:mb-0 lg:w-[75%] xl:w-[85%]" data-title="Наименование">Хранение
                                            единицы оборудования на складе</div>
                                        <div class="mb-additional-services__price md:w-35 lg:w-45 flex flex-col lg:flex-row lg:gap-10">
                                            <span class="mb-additional-services__price-install" data-title="Установка:"> — </span>
                                            <span class="mb-additional-services__price-monthly" data-title="В месяц:"> 700 TJS </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-10 rounded-lg bg-custom-gradient p-4 text-white md:p-7 lg:mb-20 xl:p-10">
                <h2 class="m-0 text-2xl leading-none md:text-3xl lg:text-4xl xl:text-5xl">SLA – гарант качества предоставления услуг</h2>
                <p class="text-md xl:mb-15 mb-7 md:mb-10 md:text-lg lg:text-xl xl:w-[85%]">В договоре закреплено соглашение (SLA), которое регламентирует предоставление услуги colocation в рамках
                    определенных параметров. За их соблюдение мы несем финансовую ответственность.</p>
                <ul class="flex list-none flex-col gap-5 p-0 md:grid md:grid-cols-2 md:gap-7 lg:flex lg:flex-row xl:gap-20">
                    <li>
                        <h3 class="m-0 md:text-2xl lg:mb-1 lg:text-3xl">99,98%</h3>
                        <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">Гарантированная доступность сервиса</p>
                    </li>
                    <li>
                        <h3 class="m-0 md:text-2xl lg:mb-1 lg:text-3xl">≤ 15 минут</h3>
                        <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">Время реакции на инцидент</p>
                    </li>
                    <li>
                        <h3 class="m-0 md:text-2xl lg:mb-1 lg:text-3xl">≤ 40 минут</h3>
                        <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">Время решения инцидента</p>
                    </li>
                    <li>
                        <h3 class="m-0 md:text-2xl lg:mb-1 lg:text-3xl">~ 20 минут</h3>
                        <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">Среднее время ответа на запрос</p>
                    </li>
                </ul>
            </div>
            <div class="lg:h-70 relative mb-20 h-[clamp(280px,80vw,400px)] rounded-lg bg-white p-4 shadow-sm md:p-7 xl:p-10">
                <h2 class="m-0 text-2xl leading-none md:text-3xl lg:w-[70%] lg:text-4xl xl:w-[50%]">Доставим и поможем разместить сервер в дата центре</h2>
                <p class="text-md xl:mb-15 lg:w-120 mb-7 md:mb-10 md:text-lg lg:text-xl xl:w-[50%]">Бесплатно доставим оборудование в наш ЦОД из любой точки Таджикистана и осуществим его монтаж в
                    серверную стойку</p>
                <picture>
                    <source srcset="/images/delivery-car.svg" media="(min-width: 768px)">
                    <img class="top-50 xl:top-15 lg:left-185 xl:left-280 absolute left-1/2 w-[clamp(250px,80vw,480px)] -translate-x-1/2 rotate-1 transition-all duration-500 ease-in-out lg:top-20"
                        src="/images/delivery-car-mobile.svg" alt="Адаптивное изображение">
                </picture>
            </div>
            <div class="mb-10 lg:mb-20">
                <ul class="flex list-none flex-col gap-2 p-0 md:grid md:grid-cols-2 md:gap-4 lg:flex lg:flex-row lg:justify-between">
                    <li class="rounded-lg bg-white p-5 shadow-sm">
                        <h3 class="m-0 text-xl md:text-2xl lg:mb-1">Выгода</h3>
                        <p class="lg:w-45 xl:w-70 m-0 leading-none text-secondary/60 md:text-lg">при единовременной оплате</p>
                    </li>
                    <li class="rounded-lg bg-white p-5 shadow-sm">
                        <h3 class="m-0 text-xl md:text-2xl lg:mb-1">15%</h3>
                        <p class="lg:w-45 xl:w-70 m-0 leading-none text-secondary/60 md:text-lg">При оплате от 1 года</p>
                    </li>
                    <li class="rounded-lg bg-white p-5 shadow-sm">
                        <h3 class="m-0 text-xl md:text-2xl lg:mb-1">7%</h3>
                        <p class="lg:w-45 xl:w-70 m-0 leading-none text-secondary/60 md:text-lg">При оплате от 6 месяцев</p>
                    </li>
                    <li class="rounded-lg bg-white p-5 shadow-sm">
                        <h3 class="m-0 text-xl md:text-2xl lg:mb-1">3%</h3>
                        <p class="lg:w-45 xl:w-70 m-0 leading-none text-secondary/60 md:text-lg">При оплате от 3 месяцев</p>
                    </li>
                </ul>
            </div>
            <div class="text-secondary/70 xl:text-xl">
                <p>
                    <strong>Colocation</strong> – это размещение серверов в дата-центре (ЦОД), где вам предоставляется место в стойке, доступ к электропитанию и сетевым ресурсам. При этом управление самим
                    оборудованием
                    остается за вами. В случае возникновения проблем доступна круглосуточная техническая поддержка.
                </p>
                <p>
                    Размещение серверов в ЦОД — это не только гарантия стабильной работы благодаря резервированию инфраструктуры, но и ряд преимуществ, которые сложно и дорого реализовать самостоятельно
                </p>
                <ul class="m-0 list-none p-0">
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Оптимальный микроклимат: постоянное охлаждение и фильтрация воздуха защищают оборудование от перегрева и пыли.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Оптимальный микроклимат: постоянное охлаждение и фильтрация воздуха защищают оборудование от перегрева и пыли.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Пожарная защита: автоматическая сигнализация и система газового пожаротушения предотвращают повреждение оборудования.</p>
                    </li>
                </ul>
                <h2 class="my-5 text-2xl font-medium text-secondary md:mt-10 md:text-3xl lg:text-4xl xl:text-6xl">Кому подходит услуга</h2>
                <p>
                    Размещение сервера в дата-центре — оптимальное решение для среднего и, в некоторых случаях, малого бизнеса, если компания сталкивается со следующими задачами:
                </p>
                <ul class="m-0 list-none p-0">
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Отсутствует подходящее помещение для установки серверного оборудования.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Нет возможности или необходимости инвестировать в создание и поддержку собственной серверной.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Любые перебои в работе сайта, портала или сервисов могут привести к значительным финансовым потерям.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Требуется высокий уровень безопасности и надежное хранение данных.</p>
                    </li>
                </ul>
                <h2 class="my-5 text-2xl font-medium leading-none text-secondary md:mt-10 md:text-3xl lg:text-4xl xl:text-6xl">Преимущества размещения серверов (colocation) в дата центрах КИТ</h2>
                <ul class="m-0 list-none p-0">
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Гарантированная доступность 99,98% – зафиксировано в SLA.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Удобное расположение – всего 10 минут от центра Душанбе</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Широкий выбор операторов связи – 50 телеком-провайдеров, возможность резервирования каналов.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Бесплатная техподдержка 24/7.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Надежная инфраструктура – дата-центр соответствует стандартам Tier II.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Бесплатная помощь при установке – доставим сервер, подключим и смонтируем в стойку.</p>
                    </li>
                    <li class="mb-3 flex items-start gap-2">
                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                        <p class="m-0 leading-none">Удаленное управление – IP-KVM предоставляется по запросу.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="w-full bg-white">
        <div class="max-w-350 mx-auto px-3 py-10 text-secondary md:grid md:grid-cols-2 md:gap-5 md:px-7 lg:grid-cols-3 lg:gap-7 xl:gap-10 xl:py-24">
            <div class="lg:col-span-2">
                <h2 class="m-0 text-2xl font-medium md:text-3xl lg:text-4xl xl:text-6xl">Дата-центр КИТ</h2>
                <p class="text-secondary/80 lg:text-lg xl:text-xl">
                    Наши ЦОДы отвечают современным стандартам отрасли, инженерная инфраструктура соответствует требованиям Tier II и стандартам PCI DSS. Площадки объединены в общую сеть передачи
                    данных,
                    которая построена на базе собственных резервированных оптических линий связи и сетевого оборудования.
                </p>
                <div class="mb-10 rounded-lg bg-[#f7f7fa] p-4 md:m-0 md:p-7 xl:p-10">
                    <ul class="flex list-none flex-col gap-5 p-0 text-secondary/70 md:grid md:grid-cols-2 md:gap-7">
                        <li>
                            <h3 class="m-0 leading-none md:text-2xl lg:text-3xl">100 м2</h3>
                            <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">серверных залов</p>
                        </li>
                        <li>
                            <h3 class="m-0 leading-none md:text-2xl lg:text-3xl">100+</h3>
                            <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">клиентов</p>
                        </li>
                        <li>
                            <h3 class="m-0 leading-none md:text-2xl lg:text-3xl">2</h3>
                            <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">дата-центра</p>
                        </li>
                        <li>
                            <h3 class="m-0 leading-none md:text-2xl lg:text-3xl">30+</h3>
                            <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">шкафов</p>
                        </li>
                        <li>
                            <h3 class="m-0 leading-none md:text-2xl lg:text-3xl">10 лет</h3>
                            <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">на рынке</p>
                        </li>
                        <li>
                            <h3 class="m-0 leading-none md:text-2xl lg:text-3xl">5 МВт</h3>
                            <p class="lg:w-50 m-0 leading-none md:text-lg lg:text-xl">электрическая мощность</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center">
                <div class="grid h-max grid-cols-2 gap-4 lg:gap-7 xl:gap-10">
                    <img class="w-full rounded-xl object-cover" src="/images/data-center-1.png" alt="Декоративное изображение">
                    <div class="md:-translate-y-10">
                        <img class="w-full rounded-xl object-cover" src="/images/data-center-2.png" alt="Декоративное изображение">
                    </div>
                    <img class="w-full rounded-xl object-cover" src="/images/data-center-3.png" alt="Декоративное изображение">
                    <div class="md:-translate-y-10">
                        <img class="w-full rounded-xl object-cover" src="/images/data-center-4.png" alt="Декоративное изображение">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="w-full bg-[#f7f7fa]">
        <div class="max-w-350 mx-auto px-3 py-10 text-secondary md:px-7 xl:gap-10 xl:py-24">
            <h2 class="m-0 mb-5 text-2xl font-medium leading-none md:text-3xl lg:text-4xl xl:text-6xl">Для администраторов и собственников бизнеса</h2>
            <div class="md:grid md:grid-cols-2">
                <div class="order-2 flex items-center xl:w-140">
                    <img class="w-full rounded-xl object-cover" src="/images/colocation-for-admin.svg" alt="Преимущества размещения сервера для администраторов">
                </div>
                <div class="order-1">
                    <h3 class="m-0 my-7 text-xl font-medium leading-none md:text-2xl lg:text-3xl xl:text-4xl">Преимущества размещения сервера для администраторов</h3>
                    <ul class="m-0 mb-7 list-none p-0 text-lg text-secondary/60">
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Нет необходимости заниматься поддержкой и эксплуатацией серверной комнаты;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Стабильная работа колокейшн в потоп, электрический блэкаут или при обрыве кабеля интернет;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Нет необходимости приезжать во время сбоев, достаточно обратиться за помощью в техническую поддержку;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Нет необходимости строить сеть и общаться с операторами связи, мы организуем локальную сеть на своем оборудовании и/или предложим арендовать его;
                            </p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Мы сами перевезем оборудование из любой точки Таджикистана, смонтируем и подключим его в сеть;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Можно хранить ЗИП в специализированных ячейках, по вашей команде мы все заменим;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Если оборудование недоступно, подключаем IP-KVM за считанные минуты.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md:grid md:grid-cols-2">
                <div class="order-1 flex items-center xl:w-140">
                    <img class="w-full rounded-xl object-cover" src="/images/colocation-for-business.svg" alt="Преимущества размещения сервера для собственников бизнеса">
                </div>
                <div class="order-2">
                    <h3 class="m-0 my-7 text-xl font-medium leading-none md:text-2xl lg:text-3xl xl:text-4xl">Преимущества размещения сервера для собственников бизнеса</h3>
                    <ul class="m-0 list-none p-0 text-lg text-secondary/60">
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Сокращение расходов на сопровождение ИТ-инфраструктуры, за счет исключения затрат на строительство и поддержку собственных серверных комнат;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Повышение безопасности ИТ-инфраструктуры. Периметр безопасности, видеонаблюдение, контроль доступа;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Ответственность за сохранность с возможностью страхования;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Финансовые гарантии уровня доступности услуги (SLA) 100%;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Сокращение финансовых потерь за счет минимального времени реакции на сбои;</p>
                        </li>
                        <li class="mb-3 flex items-start gap-2">
                            <img class="w-2 md:w-3" src="/images/pentagon.svg">
                            <p class="m-0 leading-none">Работа с обязательным заключением договора и ежемесячной отправкой бухгалтерских документов.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-[#212121] bg-[url('/public/images/lines-bg.svg')] bg-cover bg-center bg-no-repeat">
        <div class="max-w-350 mx-auto h-max xl:h-160 px-3 py-10 md:px-7 xl:gap-10 xl:py-24">
            <h2 class="m-0 mb-5 text-center text-4xl font-medium md:mb-7 lg:mb-10 md:text-5xl xl:text-7xl xl:mb-15">Отзывы о нашей работе</h2>
            <div class="flex items-center gap-2 xl:gap-5">
                <button class="btn-prev--reviews hidden md:block transition-all duration-300 cursor-pointer rounded-full bg-white p-2 border-2 border-[#212121] group hover:border-button-bg">
                    <svg class="h-3 w-3 lg:w-5 lg:h-5 text-black transition-all duration-300 group-hover:text-button-bg" viewBox="0 0 24 24" fill="none">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="swiper swiper--reviews">
                    <div class="swiper-wrapper md:flex md:items-center">
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center md:flex md:flex-row xl:gap-10">
                                <div class="w-50 h-35 flex items-center rounded-xl bg-white p-7 md:h-50 md:w-50 lg:w-60 lg:h-60">
                                    <img class="w-full object-cover" src="/images/taj-motors.png" alt="Тадж Моторс" />
                                </div>
                                <div class="p-3.5 text-center md:text-start md:p-7 xl:p-6 md:w-[70%]">
                                    <h4 class="m-0 text-lg leading-none md:text-xl lg:text-2xl xl:text-3xl">Taj Motors — Toyota Official Dealer</h4>
                                    <p class="lg:text-lg xl:text-xl">
                                        Компания Taj Motors благодарит КИТ за надежность, высокий уровень безопасности и бесперебойную работу серверной инфраструктуры. Отличная техподдержка 24/7, гибкость
                                        и
                                        качество услуг делают КИТ надежным партнером. Рекомендуем!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center md:flex md:flex-row xl:gap-10">
                                <div class="w-50 h-35 flex items-center rounded-xl bg-white p-7 md:h-50 md:w-50 lg:w-60 lg:h-60">
                                    <img class="w-full object-cover" src="/images/evar.png" alt="Сеть супермаркетов Ёвар" />
                                </div>
                                <div class="p-3.5 text-center md:text-start md:p-7 xl:p-6 md:w-[70%]">
                                    <h4 class="m-0 text-lg leading-none md:text-xl lg:text-2xl xl:text-3xl">Сеть супермаркетов Ёвар</h4>
                                    <p class="lg:text-lg xl:text-xl">
                                        Сеть супермаркетов Ёвар выражает благодарность компании КИТ за стабильную работу серверной инфраструктуры, высокую отказоустойчивость и качественную техническую
                                        поддержку. Благодаря КИТ наши бизнес-процессы работают бесперебойно, а данные надёжно защищены. Надёжный и профессиональный партнёр, которого мы рекомендуем!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center md:flex md:flex-row xl:gap-10">
                                <div class="w-50 h-35 flex items-center rounded-xl bg-white p-7 md:h-50 md:w-50 lg:w-60 lg:h-60">
                                    <img class="w-full object-cover" src="/images/dusti-farma.png" alt="Дусти фарма" />
                                </div>
                                <div class="p-3.5 text-center md:text-start md:p-7 xl:p-6 md:w-[70%]">
                                    <h4 class="m-0 text-lg leading-none md:text-xl lg:text-2xl xl:text-3xl">Дусти Фарма</h4>
                                    <p class="lg:text-lg xl:text-xl">
                                        Для фармацевтического бизнеса критично важно, чтобы ИТ-системы работали чётко и без сбоев. С КИТ мы чувствуем уверенность: всё работает стабильно, любые вопросы
                                        решаются оперативно. Отдельно отмечаем внимательность команды и индивидуальный подход. Это сотрудничество действительно облегчает нашу работу.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-next--reviews hidden md:block transition-all duration-300 cursor-pointer left-0 rounded-full bg-white p-2 border-2 border-[#212121] group hover:border-button-bg">
                    <svg class="h-3 w-3 lg:w-5 lg:h-5 text-black transition-all duration-300 group-hover:text-button-bg" viewBox="0 0 24 24" fill="none">
                        <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

            </div>
        </div>
    </section>
    <section class="w-full bg-[#f7f7fa]">
        <div class="max-w-350 mx-auto px-3 py-10 text-secondary md:px-7 xl:gap-10 xl:py-24">
            <h2 class="m-0 mb-6 text-2xl font-medium md:mb-10 md:text-3xl lg:text-4xl xl:text-6xl">Часто-задаваемые вопросы</h2>
            <div class="accordion">
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Как быстро я могу разместить сервер в дата-центре?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Осуществить размещение сервера можно в день обращения в отдел продаж. При условии, что сервер будет доставлен вами. Необходимо будет подписать
                                договор на
                                колокейшн и совершить оплату</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Можно ли получить сетевые настройки до размещения сервера?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Да. Для этого необходимо сделать запрос в службу технической поддержки через личный кабинет</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Tower какого размера можно разместить в ЦОД?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Мы предоставляем место под размещение tower сервера размерами:<br>
                                Ширина: 30 см<br>
                                Высота: 49 см<br>
                                Глубина: 65 см</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Как узнать, какую мощность потребляет сервер?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">
                                Перед монтажом в стойку оборудование подключается к измерительному прибору, который показывает потребляемую мощность. Если она превышает указанную в
                                тарифе, будет выставлен счет за дополнительное потребление
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Выдаются ли документы при передаче оборудования?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">При приемке оборудования для размещения мы выдаем акт приема-передачи, в котором указываются тип, модель и серийные номера</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Как оформить доставку оборудования?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Для оформления бесплатной доставки необходимо связаться с отделом продаж. Доставка оборудования в дата-центр осуществляется транспортной
                                компанией
                                «Название компании». Страховка оплачивается отдельно и зависит от страховой суммы</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Можно ли привезти оборудование без салазок?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Можно, но в этом случае оно будет установлено на полку. Стоимость аренды полки рассчитывается отдельно.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Можно ли зарезервировать место в стойке рядом с имеющимся?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Да. Стоимость резерва можно посмотреть в списке доп. услуг, а наличие технической возможности нужно уточнить у сотрудников отдела продаж.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Как соединить оборудование между собой без доступа в серверный зал?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">
                                Все кроссировки выполняются инженерами технической поддержки Миран. Стоимость кроссировок указана в списке доп. услуг. Вместо кроссировок возможно
                                заказать организацию локальной сети между размещаемым оборудованием на скорости 1 и 10 Гбит/с.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 w-[90%] text-base font-normal leading-none text-secondary/80 md:text-xl">Можно попасть на экскурсию в ЦОД?</h3>
                        <svg class="faq-accordion h-6 w-6 transition-transform duration-300">
                            <use href="#arrow"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner border-t-1 border-secondary/10 p-4 md:p-7">
                            <p class="m-0 xl:text-lg">Да, записаться на экскурсию можно через отдел продаж или заполнив форму выше</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.order-popup')

@endsection
