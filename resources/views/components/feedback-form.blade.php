<div class="feedback-original-container">
    <form class="feedback xl:w-222 2xl:w-258 grid gap-y-10 sm:grid-cols-2 sm:gap-x-10 md:gap-x-20 md:gap-y-10 xl:mx-auto" method="POST" action="{{ route('contact.submit') }}"
        enctype="multipart/form-data" autocomplete="off">

        @csrf

        <!-- Тема обращения -->
        <div class="relative sm:col-span-1">
            <select class="peer w-full appearance-none border-0 border-b bg-transparent pb-2 pr-8 pt-6 font-futura text-inherit focus:outline-none" id="themeSelect" required>
                <option value="" disabled selected hidden></option>
                <option class="bg-primary text-xl text-secondary" value="client">Я потенциальный клиент</option>
                <option class="bg-primary text-xl text-secondary" value="partner">Предлагаю партнёрство</option>
                <option class="bg-primary text-xl text-secondary" value="media">Реклама/СМИ</option>
                <option class="bg-primary text-xl text-secondary" value="support">Вопрос по работе сайта</option>
            </select>

            <label class="pointer-events-none absolute left-0 top-3 text-base font-medium uppercase transition-all duration-200" id="themeLabel" for="themeSelect">
                Тема обращения
            </label>

            <svg class="pointer-events-none absolute right-2 top-1/2 h-5 w-5 -translate-y-1/2 transition-transform duration-300 ease-in-out" id="selectArrow">
                <use href="#icon-double-chevron-down"></use>
            </svg>
        </div>

        <div class="hidden sm:col-span-1 sm:inline"></div>

        <!-- ФИО -->
        <div class="form-group sm:col-span-1">
            <input class="w-full border-0 border-b bg-transparent py-2 font-futura text-inherit outline-none" name="name" type="text" placeholder=" " minlength="2" required />
            <label class="block text-sm font-medium">ФИО</label>
            <p class="form-group_error">Обязательно для заполнения</p>
        </div>

        <!-- Телефон -->
        <div class="form-group sm:col-span-1">
            <input class="w-full border-0 border-b bg-transparent py-2 font-futura text-inherit outline-none" name="phone" type="tel" minlength="9" placeholder=" " required />
            <label class="block text-sm font-medium uppercase">Телефон</label>
            <p class="form-group_error">Введите правильный формат телефона</p>
        </div>

        <!-- Компания -->
        <div class="form-group sm:col-span-1">
            <input class="w-full border-0 border-b bg-transparent py-2 font-futura text-inherit outline-none" name="company" type="text" placeholder=" " />
            <label class="block text-sm font-medium uppercase">Компания</label>
        </div>

        <!-- Почта -->
        <div class="form-group sm:col-span-1">
            <input class="w-full border-0 border-b bg-transparent py-2 font-futura text-inherit outline-none" name="email" type="email" placeholder=" " />
            <label class="block text-sm font-medium uppercase">Почта</label>
            <p class="form-group_error">Введите правильный формат почты</p>
        </div>

        <!-- Сообщение -->
        <div class="form-group sm:col-span-2">
            <textarea class="w-full border-0 border-b bg-transparent py-2 font-futura text-inherit outline-none" name="message" rows="1" placeholder=" "></textarea>
            <label class="block text-sm font-medium uppercase">Ваше сообщение</label>
        </div>

        <!-- Кнопка и прикрепление -->
        <div class="flex flex-col items-start justify-between gap-7 sm:col-span-2 md:flex-row-reverse">

            <!-- Прикрепить файл -->
            <div>
                <label class="mb-3 inline-flex cursor-pointer items-center gap-2 rounded-md border border-primary/50 px-4 py-3 text-sm leading-none">
                    <svg class="h-6 w-6">
                        <use href="#clip" />
                    </svg>
                    <span class="uppercase">Прикрепить файл</span>
                    <input class="hidden" id="fileInput" name="attachment" type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" />
                </label>

                <!-- Имя файла -->
                <p class="mt-1 hidden text-xs italic text-inherit" id="file-name">Файл не выбран</p>

                <!-- Сообщение об ошибке -->
                <p class="mt-1 hidden text-xs text-[#db3131]" id="file-error">Файл слишком большой. Максимум — 5 МБ.
                </p>

                <p class="m-0 text-xs text-gray-400">Максимальный размер файла 5 МБ</p>
            </div>

            <div class="flex w-full flex-row-reverse items-center justify-between gap-8 md:w-auto md:flex-row lg:gap-10">
                <button class="cursor-pointer rounded-md border-0 bg-button-bg px-2.5 py-2 font-futura text-xs/3 uppercase text-white transition hover:bg-[#5b5fe6] md:px-4 md:py-3 md:text-sm"
                    type="submit">Отправить</button>
                <p class="max-w-70 xl:max-w-100 m-0 text-xs leading-none text-inherit md:text-base">
                    Нажимая кнопку вы даёте согласие на обработку ваших персональных данных и соглашаетесь с
                    <a class="text-inherit underline" href="#">политикой конфиденциальности</a>
                </p>
            </div>
        </div>
    </form>
</div>
