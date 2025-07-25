<div class="order-popup fixed left-0 top-0 flex hidden h-screen w-screen items-center justify-center bg-black/50 transition-all duration-300">
    <div class="w-140 relative rounded-lg bg-white p-10 text-secondary">
        <h1 class="m-0 mb-5 font-medium">Заказ</h1>
        <form class="flex justify-between gap-5" action="">
            <input class="w-full rounded-lg border border-secondary/50 px-3 py-2 shadow-sm focus:border-button-bg focus:outline-none focus:ring-1 focus:ring-button-bg" name="your-name" type="text"
                placeholder="Ваше имя">
            <input class="w-full rounded-lg border border-secondary/50 px-3 py-2 shadow-sm focus:border-button-bg focus:outline-none focus:ring-1 focus:ring-button-bg" name="phone" type="phone"
                placeholder="Номер телефона">
        </form>
        <div class="">
            <button class="w-full cursor-pointer rounded-md border-0 bg-button-bg px-2.5 py-2 font-futura text-xs/3 uppercase text-white transition hover:bg-[#5b5fe6] md:px-4 md:py-3 md:text-sm"
                type="submit">Заказать</button>
        </div>
        <div class="mt-5 flex items-center gap-2">
            <input class="id="consent" name="consent" type="checkbox" required />
            <label class="text-base" for="consent">
                Даю согласие на обработку и хранение моих персональных данных
            </label>
        </div>

        <div class="absolute right-0 top-0 cursor-pointer" data-click-action="hide-popup">
            <button class="flex h-8 w-8 cursor-pointer items-center justify-center border-none bg-transparent p-0" type="button">
                <span class="absolute block h-[3px] w-4 rotate-45 bg-black"></span>
                <span class="absolute block h-[3px] w-4 -rotate-45 bg-black"></span>
            </button>
        </div>
    </div>
</div>
