<section class="w-screen relative left-1/2 -translate-x-1/2 overflow-hidden">
    <div class="slider-track flex animate-slide py-15 md:py-25 xl:py-35 2xl:py-40 select-none">
        @foreach (array_merge($logos, $logos) as $logo)
            <div
                class="slide-item shrink-0 w-22 md:w-30 xl:w-33 2xl:w-37 mr-18 md:mr-30 flex items-center justify-center">
                <img src="{{ asset('images/' . $logo['file']) }}" alt="Логотип компании «{{ $logo['alt'] }}»"
                    class="w-22 md:w-30 xl:w-33 2xl:w-37 opacity-40 {{ $logo['bg'] ?? '' }}">
            </div>
        @endforeach
    </div>
</section>
