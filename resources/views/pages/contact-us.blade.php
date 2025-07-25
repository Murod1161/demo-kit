@extends('layouts.app')

@section('title', 'Контакты | ' . config('app.name'))

@section('content')
    <section class="2xl:mx-auto max-w-container xl:pt-30 overflow-hidden px-3 md:px-7 py-10 xl:mx-7 xl:px-7">
        <h1 class="text-fluid-lg font-medium xl:hidden m-0 mb-5">Контакты</h1>
        <div class="grid-cols-24 mb-10 lg:mb-15 xl:mb-20 grid">
            <div class="col-span-5">
                <span class="hidden pt-5 uppercase text-primary/50 xl:block">Контакты</span>
            </div>

            <div class="xl:col-span-19 col-span-full">
                <h2 class="m-0 mb-3 md:text-fluid-lg font-normal md:mb-10 xl:p-0">г. Душанбе</h2>
                <div class="flex flex-col lg:flex-row lg:justify-between gap-5 lg:w-100 xl:w-150">
                    <div class="">
                        <p class="lg:text-button-bg m-0 md:text-xl lg:text-2xl">Адрес:</p>
                        <p class="m-0 lg:text-lg">ул. Шамси 2/5</p>
                    </div>
                    <div class="m-0 flex flex-col p-0">
                        <a class="mb-1 text-white no-underline transition-all duration-200 ease-in hover:text-button-bg md:text-2xl" href="tel:+992446506161">+992 44 650 61 61</a>
                        <a class="mb-1 text-sm leading-none text-white no-underline transition-all duration-200 ease-in hover:text-button-bg md:text-xl" href="mailto:info@kit.tj">info@kit.tj</a>
                        <a class="mb-6 text-sm leading-none text-white no-underline transition-all duration-200 ease-in hover:text-button-bg md:text-xl" href="mailto:job@kit.tj">job@kit.tj</a>

                        <div class="flex flex-wrap gap-2">
                            <a class="w-7.5 h-7.5 md:w-8.5 md:h-8.5 flex items-center justify-center rounded-sm border border-primary/15 text-white no-underline transition-all duration-200 ease-in hover:text-button-bg"
                                href="">
                                <svg width="17" height="16">
                                    <use xlink:href="#telegram"></use>
                                </svg> </a>
                            <a class="w-7.5 h-7.5 md:w-8.5 md:h-8.5 flex items-center justify-center rounded-sm border border-primary/15 text-white no-underline transition-all duration-200 ease-in hover:text-button-bg"
                                href="">
                                <svg width="17" height="16">
                                    <use xlink:href="#vk"></use>
                                </svg> </a>
                            <a class="w-7.5 h-7.5 md:w-8.5 md:h-8.5 flex items-center justify-center rounded-sm border border-primary/15 text-white no-underline transition-all duration-200 ease-in hover:text-button-bg"
                                href="">
                                <svg width="17" height="16">
                                    <use xlink:href="#dzen"></use>
                                </svg> </a>
                            <a class="w-7.5 h-7.5 md:w-8.5 md:h-8.5 flex items-center justify-center rounded-sm border border-primary/15 text-white no-underline transition-all duration-200 ease-in hover:text-button-bg"
                                href="">
                                <svg width="17" height="16">
                                    <use xlink:href="#linkedin"></use>
                                </svg> </a>
                            <a class="w-7.5 h-7.5 md:w-8.5 md:h-8.5 flex items-center justify-center rounded-sm border border-primary/15 text-white no-underline transition-all duration-200 ease-in hover:text-button-bg"
                                href="">
                                <svg width="17" height="16">
                                    <use xlink:href="#youtube"></use>
                                </svg> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden rounded-lg">
            <iframe class="h-[300px] w-392 xl:h-150" src="https://yandex.ru/map-widget/v1/?um=constructor%3A74533aa477b63e2ec4f9f1be760b2fd44a1e0b8cab2f96a267fbecc441caa355&amp;source=constructor" frameborder="0"></iframe>
        </div>
    </section>
@endsection
