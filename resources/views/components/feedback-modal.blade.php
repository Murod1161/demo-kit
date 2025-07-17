<section class="feedback-modal md:px-15 py-15 fixed top-0 z-50 hidden h-screen w-full bg-white px-10 px-6 py-20">
    <div class="flex flex-col justify-between gap-12">
        <div class="w-full xl:flex xl:items-center xl:gap-10 xl:justify-center text-secondary">
            <h2 class="m-0 mb-7 text-4xl font-normal md:text-fluid-lg">Оставить заявку</h2>
            <p class="xl:max-w-100 m-0 text-fluid-md leading-none">
                Ваш запрос ценен для нас и будет обработан в кратчайшие сроки
            </p>
        </div>

        <x-contact-form :isLight="false" />
    </div>
    <button data-click-action="toggle-feedback-modal">Close</button>
</section>
