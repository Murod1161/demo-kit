<form method="POST" action="{{ route('contact.submit') }}"
    class="feedback text-white grid gap-y-10 sm:grid-cols-2 sm:gap-x-10 md:gap-x-20 md:gap-y-10 xl:w-222 xl:mx-auto 2xl:w-258"
    enctype="multipart/form-data"
    autocomplete="off">

    @csrf

    <!-- Тема обращения -->
    <div class="relative sm:col-span-1">
        <select id="themeSelect" required
            class="font-futura peer w-full text-white bg-transparent border-0 border-b appearance-none pt-6 pb-2 pr-8 focus:outline-none">
            <option value="" disabled selected hidden></option>
            <option value="client" class="text-black text-xl bg-primary p-10">Я потенциальный клиент</option>
            <option value="partner" class="text-black text-xl bg-primary">Предлагаю партнёрство</option>
            <option value="media" class="text-black text-xl bg-primary">Реклама/СМИ</option>
            <option value="support" class="text-black text-xl bg-primary">Вопрос по работе сайта</option>
        </select>

        <label for="themeSelect" id="themeLabel"
            class="absolute left-0 top-3 text-white text-base uppercase transition-all duration-200 pointer-events-none">
            Тема обращения
        </label>

        <svg id="selectArrow"
            class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2 h-5 w-5 text-white transition-transform duration-300 ease-in-out">
            <use href="#icon-double-chevron-down"></use>
        </svg>
    </div>

    <div class="sm:col-span-1 hidden sm:inline"></div>

    <!-- ФИО -->
    <div class="form-group sm:col-span-1">
        <input
            class="font-futura w-full outline-none text-white py-2 bg-transparent border-0 border-b"
            type="text"
            placeholder=" "
            minlength="2"
            name="name"
            required />
        <label class="block text-sm font-normal">ФИО</label>
        <p class="form-group_error">Обязательно для заполнения</p>
    </div>

    <!-- Телефон -->
    <div class="form-group sm:col-span-1">
        <input type="tel" minlength="9" placeholder=" " required
            name="phone"
            class="font-futura w-full outline-none text-white py-2 bg-transparent border-0 border-b" />
        <label class="block text-sm font-normal uppercase">Телефон</label>
        <p class="form-group_error">Введите правильный формат телефона</p>
    </div>

    <!-- Компания -->
    <div class="form-group sm:col-span-1">
        <input type="text" placeholder=" "
            name="company"
            class="font-futura w-full outline-none text-white py-2 bg-transparent border-0 border-b" />
        <label class="block text-sm font-normal uppercase">Компания</label>
    </div>

    <!-- Почта -->
    <div class="form-group sm:col-span-1">
        <input type="email" placeholder=" "
            name="email"
            class="font-futura w-full outline-none text-white py-2 bg-transparent border-0 border-b" />
        <label class="block text-sm font-normal uppercase">Почта</label>
        <p class="form-group_error">Введите правильный формат почты</p>
    </div>

    <!-- Сообщение -->
    <div class="form-group sm:col-span-2">
        <textarea rows="1" placeholder=" "
            name="message"
            class="font-futura w-full outline-none text-white py-2 bg-transparent border-0 border-b"></textarea>
        <label class="block text-sm font-normal uppercase">Ваше сообщение</label>
    </div>

    <!-- Кнопка и прикрепление -->
    <div class="flex flex-col sm:col-span-2 md:flex-row-reverse justify-between items-start gap-7">

        <!-- Прикрепить файл -->
        <div>
            <label
                class="cursor-pointer inline-flex items-center gap-2 mb-3 border border-primary/10 px-4 py-3 rounded-md text-sm leading-none">
                <svg class="h-6 w-6">
                    <use href="#clip" />
                </svg>
                <span class="uppercase">Прикрепить файл</span>
                <input type="file" name="attachment" class="hidden" id="fileInput"
                    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" />
            </label>

            <!-- Имя файла -->
            <p id="file-name" class="text-xs text-gray-300 mt-1 italic hidden">Файл не выбран</p>

            <!-- Сообщение об ошибке -->
            <p id="file-error" class="text-xs text-[#db3131] mt-1 hidden">Файл слишком большой. Максимум — 5 МБ.
            </p>

            <p class="text-xs text-gray-400 m-0">Максимальный размер файла 5 МБ</p>
        </div>

        <div class="flex flex-row-reverse md:flex-row items-center justify-between gap-8 lg:gap-10 w-full md:w-auto">
            <button type="submit"
                class="font-futura bg-button-bg text-white text-xs/3 px-2.5 py-2 md:text-sm md:px-4 md:py-3 border-0 rounded-md hover:bg-[#5b5fe6] transition uppercase cursor-pointer">Отправить</button>
            <p class="text-xs md:text-base text-primary m-0 max-w-70 xl:max-w-100 leading-none">
                Нажимая кнопку вы даёте согласие на обработку ваших персональных данных и соглашаетесь с
                <a href="#" class="underline text-primary">политикой конфиденциальности</a>
            </p>
        </div>
    </div>
</form>
