<div class="feedback-modal md:px-15 py-15 fixed inset-0 z-50 hidden h-screen w-screen bg-[#f7f7fa] px-10 px-6 py-20">

    <div class="flex flex-col justify-between gap-12">
        <div class="max-w-240 2xl:max-w-260 mx-auto w-full text-secondary xl:flex xl:items-center xl:gap-10">
            <h2 class="m-0 mb-7 text-4xl font-normal md:text-fluid-lg">Оставить заявку</h2>
            <p class="xl:max-w-90 m-0 text-fluid-md leading-none">
                Ваш запрос ценен для нас и будет обработан в кратчайшие сроки
            </p>
        </div>

        <div class="feedback-modal__form-container"></div>
    </div>
    <div class="right-15 z-60 w-25 h-13 absolute top-10 flex cursor-pointer items-center gap-2" data-click-action="hide-modal">
        <button class="flex h-8 w-8 items-center justify-center border-none bg-transparent p-0" type="button">
            <span class="absolute block h-[3px] w-4 rotate-45 bg-black"></span>
            <span class="absolute block h-[3px] w-4 -rotate-45 bg-black"></span>
        </button>
        <span class="font-medium uppercase text-secondary">Закрыть</span>
    </div>

    @unless (request()->routeIs('home'))
        @include('components.feedback-form')
    @endunless

</div>

