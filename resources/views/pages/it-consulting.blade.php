@extends('layouts.app')

@section('title', 'ИТ-консалтинг | ' . config('app.name'))

@section('content')
    <main class="mx-auto max-w-container">
        <section class="md:mb-15 xl:my-30 2xl xl:gap-3:mb-20 2xl:mt-30 mb-7 select-none p-3 md:p-7 2xl:mx-8">
            <h1 class="2xl:mb-15 m-0 mb-7 text-fluid-xl font-normal leading-none leading-none 2xl:text-[150px]">ИТ-консалтинг</h1>
            <p class="max-w-120 xl:max-w-150 m-0 text-xl font-normal leading-none text-primary/50 md:text-[28px]">
                Мы предоставляем консалтинговые услуги в области ит-технологий и помогаем в формировании стратегии развития
                ит-инфраструктуры.
            </p>
        </section>

        <section class="relative left-1/2 w-screen -translate-x-1/2 bg-[#F7F7FA]">
            <div class="mx-auto max-w-container bg-[#F7F7FA] py-10 xl:py-24 px-3 md:px-7 text-secondary">
                <h2 class="m-0 font-normal leading-none md:text-3xl xl:text-4xl 2xl:text-5xl">Описание</h2>
                <p class="mt-3 md:text-lg xl:text-xl">
                    Использование современных ИТ-технологий позволяет упростить и автоматизировать рабочие процессы, что
                    способствует повышению эффективности бизнеса. Обеспечение доступности ИТ-сервисов — ключевая задача для
                    технических специалистов.<br>
                    <br>
                    Отсутствие комплексной оценки состояния ИТ-инфраструктуры и её соответствия
                    бизнес-требованиям может привести к повышению рисков инцидентов. Последствия таких сбоев могут включать
                    как мгновенные финансовые и репутационные потери, так и долгосрочные проблемы, замедляющие развитие
                    компании.<br>
                    <br>
                    Инциденты могут быть вызваны физическими поломками оборудования, сбоями в программном обеспечении,
                    нехваткой ресурсов для обслуживания увеличившегося объема данных или ошибками проектирования при
                    внедрении новых сервисов.
                </p>
                <h2 class="xl:mt-30 m-0 mt-5 font-normal leading-none md:mt-10 md:text-3xl xl:text-4xl 2xl:text-5xl">Как этого избежать?</h2>
                <div class="rounded-lg bg-button-bg/15">
                    <p class=" mt-3 px-3 py-5 md:px-5 md:text-lg xl:py-10 xl:text-xl">
                        Обратитесь к экспертам компании КИТ для профессионального консалтинга. Мы проведём всестороннюю
                        оценку
                        вашей ИТ-инфраструктуры, выявим проблемы в архитектуре и настройках, а также поможем разработать
                        стратегию её дальнейшего развития.
                    </p>
                </div>
                <h2 class="xl:mt-30 m-0 mt-5 font-normal leading-none md:mt-10 md:text-3xl xl:text-4xl 2xl:text-5xl">ИТ-консалтинг — состав услуги</h2>
                <p class="mt-3 md:text-lg xl:text-xl">
                    На данном этапе специалисты консалтинговой компании выполнят детальный аудит текущего состояния
                    ИТ-инфраструктуры компании, в который войдут:
                </p>
                <ul class="my-5 list-none space-y-4 p-0 md:text-lg xl:text-xl">
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Оценка архитектуры решения</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Проверка соответствия настроек оборудования и ПО рекомендуемым практикам</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Оценка производительности ИТ–оборудования в штатном режиме работы</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Оценка производительности в режиме моделирования комбинированных нагрузок</p>
                    </li>
                </ul>
                <p class="mt-3 md:text-lg xl:text-xl">
                    В результате IT-консультирования вы получите отчёт, подробно описывающий текущее состояние каждого
                    сегмента вашей информационной системы, а также рекомендации по её модернизации, повышению стабильности
                    работы и снижению эксплуатационных затрат.
                </p>
                <h2 class="xl:mt-30 m-0 mt-5 font-normal leading-none md:mt-10 md:text-3xl xl:text-4xl 2xl:text-5xl">Разработка стратегии развития ИТ</h2>
                <p class="mt-3 md:text-lg xl:text-xl">
                    Учитывая долгосрочные планы развития вашего бизнеса, мы разработаем экспертное предложение в формате
                    дорожной карты, включающее технически и финансово обоснованные рекомендации по развитию
                    ИТ-инфраструктуры.<br>
                    <br class="block h-3">
                    Разработка стратегии развития ИТ осуществляется на основе тщательного анализа текущих инфраструктурных
                    решений, приложений и сервисов, используемых в компании. Это позволяет сформировать предложения по
                    модернизации и оптимизации ИТ-инфраструктуры, обеспечивая её соответствие бизнес-целям организации.
                </p>

                <h2 class="xl:mt-30 m-0 mt-5 font-normal leading-none md:mt-10 md:text-3xl xl:text-4xl 2xl:text-5xl">Стоимость ИТ-консультации</h2>
                <p class="mt-3 md:text-lg xl:text-xl">
                    Стоимость услуг IT-консалтинга формируется индивидуально, учитывая как качественные, так и
                    количественные показатели. Итоговая сумма зависит от размера и сложности ИТ-инфраструктуры заказчика, а
                    также от объёма необходимых консалтинговых услуг, определяемого временем, затраченным экспертами
                    компании на реализацию поставленных задач.
                </p>

                <h2 class="xl:mt-30 m-0 mt-5 font-normal leading-none md:mt-10 md:text-3xl xl:text-4xl 2xl:text-5xl">Преимущества ИТ-консалтинга</h2>
                <p class="mt-3 md:text-lg xl:text-xl">
                    Стоимость услуг IT-консалтинга формируется индивидуально, учитывая как качественные, так и
                    количественные показатели. Итоговая сумма зависит от размера и сложности ИТ-инфраструктуры заказчика, а
                    также от объёма необходимых консалтинговых услуг, определяемого временем, затраченным экспертами
                    компании на реализацию поставленных задач.
                </p>
                <ul class="my-5 list-none space-y-4 p-0 md:text-lg xl:text-xl">
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Независимая экспертная оценка соответствия ИТ-систем задачам бизнеса</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Приведение архитектуры и настроек корпоративных ИТ-систем в соответствие с
                            рекомендуемыми практиками</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Повышение эффективности использования имеющихся ИТ-ресурсов</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Заблаговременная оценка объема инвестиций в ИТ, согласно планам развития
                            предприятия</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Выбор ИТ-решений, позволяющих максимально эффективно решать задачи бизнеса</p>
                    </li>
                </ul>
                <h2 class="xl:mt-30 m-0 mt-5 font-normal leading-none md:mt-10 md:text-3xl xl:text-3xl xl:text-4xl 2xl:text-5xl">Почему КИТ</h2>
                <ul class="my-5 list-none space-y-4 p-0 md:text-lg xl:text-xl">
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Свыше года успешной работы на рынке системной интеграции</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">В штате компании эксперты, обладающие большим практическим опытом в области
                            ИТ-консалтинга</p>
                    </li>
                    <li class="mb-2 flex items-center gap-2 xl:gap-3">
                        <img class="w-2 2xl:w-3" src="/images/pentagon.svg">
                        <p class="m-0">Компания КИТ — независимый системный интегратор, что позволяет нам сосредоточиться
                            на потребностях наших клиентов и предлагать наиболее эффективные решения.</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
