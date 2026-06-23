@php
    $isHome = request()->routeIs('front.index');
@endphp

<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-6">

       <div class="h-20 flex items-center justify-between gap-4">

            {{-- LOGO --}}
            <a href="{{ route('front.index') }}"
   class="shrink-0">
                <img
    src="{{ asset('assets/images/logos/logo-baru.png') }}"
    class="h-10 md:h-12 w-auto"
    alt="Daihatsu PRM">
            </a>

            {{-- DESKTOP MENU --}}
            <div class="hidden lg:flex items-center gap-10">

                <a href="{{ $isHome ? '#unit' : route('front.index').'#unit' }}"
                   class="nav-link">
                    Unit
                </a>

                <a href="{{ $isHome ? '#latest-articles' : route('front.index').'#latest-articles' }}"
                   class="nav-link">
                    Promo
                </a>

                <a href="{{ route('front.contact') }}"
                   class="nav-link">
                    Lokasi
                </a>

                <a href="{{ route('credit.simulation.v2') }}"
   class="nav-link">
    Simulasi Kredit
</a>

                <a href="{{ route('front.career') }}"
                   class="nav-link">
                    Karir
                </a>

            </div>

            {{-- CTA --}}
            <div class="hidden lg:flex gap-3">

                <a href="https://wa.me/6285222300036"
                   target="_blank"
                   class="border border-gray-200 px-6 py-3 rounded-full hover:text-[#C8102E] transition">

                    WhatsApp

                </a>

                <a href="{{ $isHome ? '#booking' : route('front.index').'#booking' }}"
                   class="bg-[#C8102E] text-white px-6 py-3 rounded-full hover:bg-[#A80E27] transition">

                    Test Drive

                </a>

            </div>

           {{-- HAMBURGER --}}
<button
    id="menu-toggle"
    aria-label="Menu"
    class="lg:hidden relative z-[70] w-8 h-8 flex flex-col justify-center items-center">

    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>

</button>

</div>

</div>

</nav>

{{-- OVERLAY --}}
<div
    id="mobile-overlay"
    class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm z-40">
</div>

{{-- MOBILE MENU --}}
<div
    id="mobile-menu"
    class="hidden fixed top-24 left-4 right-4 z-50
           bg-white rounded-3xl shadow-2xl
           p-6 space-y-2">

    <a
        href="{{ $isHome ? '#unit' : route('front.index').'#unit' }}"
        class="mobile-link block py-3 border-b border-gray-100">

        Unit

    </a>

    <a
        href="{{ $isHome ? '#latest-articles' : route('front.index').'#latest-articles' }}"
        class="mobile-link block py-3 border-b border-gray-100">

        Promo

    </a>

    <a
        href="{{ $isHome ? '#lokasi' : route('front.index').'#lokasi' }}"
        class="mobile-link block py-3 border-b border-gray-100">

        Lokasi

    </a>

   <a href="{{ route('credit.simulation.v2') }}"
   class="mobile-link block py-3 border-b border-gray-100">
    Simulasi Kredit
</a>

    <a
        href="{{ route('front.career') }}"
        class="mobile-link block py-3">

        Karir

    </a>

    <div class="pt-4 space-y-3">

        <a
            href="https://wa.me/6285222300036"
            target="_blank"
            class="block text-center border border-gray-200 py-3 rounded-full">

            WhatsApp

        </a>

        <a
            href="{{ $isHome ? '#booking' : route('front.index').'#booking' }}"
            class="block text-center bg-[#C8102E] text-white py-3 rounded-full">

            Booking Test Drive

        </a>

    </div>

</div>