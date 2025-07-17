<div class="fixed w-full h-screen bg-white top-0 z-50 feedback-modal hidden">
    <div class="flex flex-col lg:flex-row justify-between items-start gap-12">
        <div class="w-full lg:w-1/2">
            <h2 class="text-4xl font-semibold mb-2">Оставить заявку</h2>
            <p class="text-lg text-gray-500">
                Хотите делать качественное ПО? Запросите бесплатную консультацию заполнив эту форму
            </p>
        </div>

        <x-contact-form />
    </div>
    <button data-click-action="toggle-feedback-modal">Close</button>
</div>
