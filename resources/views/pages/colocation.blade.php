@extends('layouts.app')

@section('title', 'Colocation | ' . config('app.name'))

@section('content')
    <section class="2xl:mb-30 2xl:mt-30 mx-auto mb-7 mt-5 max-w-container select-none px-3 md:p-7">
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
        <div class="mx-auto max-w-container px-3 py-10 text-secondary md:px-7 xl:py-24">
            <h2 class="m-0 mb-6 text-xl font-medium md:mb-10 md:text-3xl lg:text-4xl xl:text-6xl">Тарифы на размещение сервера</h2>
            <div class="accordion">
                <div class="accordion__item mb-6 cursor-pointer rounded-lg bg-white shadow-sm md:mb-10">
                    <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                        <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Что входит в стоимость размещения сервера?</h3>
                        <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                            <use href="#icon-double-chevron-down"></use>
                        </svg>
                    </div>
                    <div class="accordion__content cursor-default">
                        <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                            <ul class="list-none p-0">
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
                                <li class="mb-3 flex items-start gap-2">
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

            <div class="mt-10">
                <h2 class="m-0 mb-6 text-xl font-medium md:mb-10 md:text-3xl lg:text-4xl xl:text-6xl">Дополнительные услуги</h2>
                <div class="accordion">
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Дополнительные ресурсы</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Сетевые услуги</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">IP-адреса</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Диски для бэкапов</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Защита от DDoS-атак</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Кроссировки до 3 операторов связи</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item mb-2 cursor-pointer rounded-lg bg-white shadow-sm md:mb-4">
                        <div class="accordion__header flex items-center justify-between gap-5 p-4 md:p-7">
                            <h3 class="m-0 text-lg font-normal leading-none md:text-xl">Прочие допы</h3>
                            <svg class="h-6 w-6 text-button-bg transition-transform duration-300">
                                <use href="#icon-double-chevron-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__content cursor-default">
                            <div class="accordion__content-inner px-4 md:px-7 md:pb-3">
                                <ul class="list-none p-0">
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
                                    <li class="mb-3 flex items-start gap-2">
                                        <img class="w-2 md:w-3" src="/images/pentagon.svg">
                                        <p class="m-0 leading-none">Монтаж оборудования в дата-центре</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('components.order-popup')

@endsection
