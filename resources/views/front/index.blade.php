

@extends('layout.app')

@section('title', 'Daihatsu PRM - Dealer Resmi Daihatsu Promo Terbaik')

@section('meta_description',
'Dealer Daihatsu PRM resmi dengan promo Daihatsu terbaru, simulasi kredit, test drive, dan penawaran terbaik untuk Ayla, Rocky, Xenia, Sigra dan lainnya.')

@push('styles')
<link rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css">
@endpush

@section('content')
<div class="relative mb-10">

    <div class="main-carousel">

      @foreach($heroBanners as $banner)

<div class="carousel-cell w-full">

    <picture>

        <source
            media="(min-width: 768px)"
            srcset="{{ Storage::url($banner->desktop_image) }}">

        <img
            src="{{ Storage::url($banner->mobile_image) }}"
            alt="Daihatsu PRM Banner"
            loading="eager"
            fetchpriority="high"
            decoding="async"
            class="w-full object-cover">

    </picture>

</div>

@endforeach

    </div>

</div>

		<section id="unit" class="max-w-[1130px] mx-auto mt-[80px]">

    {{-- Header --}}
    <div class="text-center mb-12 fade-up">

        <p class="text-[#C8102E] font-semibold uppercase tracking-[3px]">
            Daihatsu PRM
        </p>

        <h2 class="text-4xl font-bold mt-3">
            Temukan Mobil Impianmu
        </h2>

        <p class="text-gray-500 mt-3">
            Pilihan lengkap mobil Daihatsu untuk keluarga maupun bisnis.
        </p>

    </div>

    {{-- Desktop --}}
    <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

        @foreach($cars as $car)

            @if($car->slug === 'kendaraan-custom')

                <div
                    class="group fade-up bg-gradient-to-br from-[#C8102E] to-[#9B0C24]
                           rounded-[24px] p-6 text-white
                           flex flex-col transition-all duration-500
                           hover:-translate-y-2 hover:shadow-xl"

                    style="transition-delay: {{ $loop->iteration * 100 }}ms">

                    <div class="h-[180px] flex items-center justify-center overflow-hidden">

                        <img
    loading="lazy"
    decoding="async"
    src="{{ $car->thumbnail
        ? \Illuminate\Support\Facades\Storage::url($car->thumbnail)
        : asset('assets/images/no-image.png') }}"
    class="w-full h-[220px] object-contain
           scale-125
           transition-all duration-700 ease-out
           group-hover:scale-[1.35]
           group-hover:-translate-y-3"
    alt="{{ $car->name }}">

                    </div>

                    <div class="flex-1 flex flex-col mt-4">

                        <span class="inline-flex w-fit px-3 py-1 rounded-full bg-white/20 text-sm">
                            Special Order
                        </span>

                        <h3 class="font-bold text-2xl mt-4">
                            {{ $car->name }}
                        </h3>

                        <p class="text-white/80 mt-3 text-sm leading-relaxed flex-1">
                            Ambulance, Mobil Desa, kendaraan operasional instansi,
                            hingga kebutuhan modifikasi khusus lainnya.
                        </p>

                        <a href="#contact"
                           class="mt-6 w-full py-3 rounded-full
                                  bg-white text-[#C8102E]
                                  text-center font-bold">

                            Konsultasi Sekarang

                        </a>

                    </div>

                </div>

            @else

                <a href="{{ route('front.car', $car) }}"
                   class="block fade-up"
                   style="transition-delay: {{ $loop->iteration * 100 }}ms"
                   aria-label="Lihat detail {{ $car->name }}">

                    <div class="group bg-white rounded-[28px]
                                border border-[#EEF0F7]
                                p-6 transition-all duration-500 cursor-pointer
                                hover:-translate-y-2
                                hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)]">

                        <div class="relative overflow-hidden rounded-2xl
                                    bg-gradient-to-b from-gray-50 to-white">

                            <img
                                src="{{ $car->thumbnail
                                    ? \Illuminate\Support\Facades\Storage::url($car->thumbnail)
                                    : asset('assets/images/no-image.png') }}"
                                class="w-full h-[220px] object-contain
                                       scale-125
                                       transition-all duration-700 ease-out
                                       group-hover:scale-[1.35]
                                       group-hover:-translate-y-3"
                                alt="{{ $car->name }}">

                        </div>

                        <div class="mt-5 flex flex-col justify-between min-h-[110px]">

                            <h3 class="text-xl font-bold text-[#1A1A1A]
                                       leading-tight
                                       group-hover:text-[#C8102E]
                                       transition-colors">

                                {{ $car->name }}

                            </h3>

                            <div class="mt-3">

                                <p class="text-sm text-gray-400">
                                    Mulai dari
                                </p>

                                <p class="text-[#C8102E] text-2xl font-bold leading-tight">

                                    @if($car->price)

                                        Rp {{ number_format($car->price / 1000000, 0, ',', '.') }} Jutaan

                                    @else

                                        Hubungi Kami

                                    @endif

                                </p>

                            </div>

                        </div>

                    </div>

                </a>

            @endif

        @endforeach

    </div>

    {{-- Mobile --}}
<div class="unit-carousel md:hidden fade-up">

    @foreach($cars as $car)

        <div class="carousel-cell w-[85%] px-2">

            <a href="{{ route('front.car', $car) }}"
               class="block">

                <div class="bg-white rounded-[24px] border border-[#EEF0F7]
                            p-5 shadow-sm">

                    <img
    loading="lazy"
    decoding="async"
    src="{{ Storage::url($car->thumbnail) }}"
    alt="{{ $car->name }}"
    class="w-full object-contain">
                    <h3 class="font-bold text-lg mt-4">
                        {{ $car->name }}
                    </h3>

                    @if($car->price)
                        <p class="text-[#C8102E] font-bold mt-2">
                            Rp {{ number_format($car->price / 1000000, 0, ',', '.') }} Jutaan
                        </p>
                    @endif

                </div>

            </a>

        </div>

    @endforeach

</div>
</section>


		
	<section class="pt-28">

    <div class="max-w-7xl mx-auto px-8 lg:px-12">

        <div class="text-center mb-24 fade-up">

            <p class="uppercase tracking-[6px] text-[#C8102E]">
                Layanan Kami
            </p>

            <h2 class="text-5xl font-bold mt-3">
                Pengalaman Terbaik Bersama Daihatsu PRM
            </h2>

            <p class="mt-5 text-gray-500 text-lg max-w-3xl mx-auto">
                Nikmati berbagai layanan terbaik dari Daihatsu PRM untuk memberikan
                pengalaman membeli mobil yang lebih mudah, nyaman, dan terpercaya.
            </p>

        </div>

    </div>

</section>

@foreach($services as $index => $service)

@php
    $link = $service->button_url ?: 'https://wa.me/6285222300036';
@endphp

<section class="pb-24 {{ $index % 2 ? 'bg-[#F8F9FC]' : 'bg-white' }}">

    <div class="max-w-7xl mx-auto px-8 lg:px-12">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            @if($index % 2 == 0)

                {{-- Gambar --}}
                <div class="fade-up relative group">

                    <a href="{{ $link }}">

                        <img
                            src="{{ Storage::url($service->image) }}"
                            alt="{{ $service->title }}"
                            class="w-full rounded-[40px]
                                   shadow-2xl
                                   object-cover
                                   transition duration-700
                                   group-hover:scale-[1.03]">

                    </a>

                    <a href="{{ $link }}"
                       class="absolute bottom-8 right-8
                              w-20 h-20 rounded-3xl
                              bg-[#0047BA]
                              hover:bg-[#C8102E]
                              transition duration-500
                              flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-8 h-8 text-white"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M17.25 6.75 6.75 17.25" />

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M8.25 6.75h9v9" />

                        </svg>

                    </a>

                </div>

                {{-- Text --}}
                <div class="fade-up">

                    <h2 class="text-5xl font-bold">
                        {{ $service->title }}
                    </h2>

                    <p class="mt-5 text-gray-600 text-lg leading-8 max-w-xl">
                        {{ $service->description }}
                    </p>

                    <a href="{{ $link }}"
                       class="inline-flex items-center gap-3
                              mt-7 px-10 py-4
                              rounded-full
                              bg-[#C8102E]
                              text-white
                              font-semibold
                              hover:scale-105
                              transition duration-500">

                        Pelajari Lebih Lanjut

                    </a>

                </div>

            @else

                {{-- Text --}}
                <div class="fade-up order-2 lg:order-1">

                    <h2 class="text-5xl font-bold">
                        {{ $service->title }}
                    </h2>

                    <p class="mt-5 text-gray-600 text-lg leading-8 max-w-xl">
                        {{ $service->description }}
                    </p>

                    <a href="{{ $link }}"
                       class="inline-flex items-center gap-3
                              mt-7 px-10 py-4
                              rounded-full
                              bg-[#C8102E]
                              text-white
                              font-semibold
                              hover:scale-105
                              transition duration-500">

                        Pelajari Lebih Lanjut

                    </a>

                </div>

                {{-- Gambar --}}
                <div class="fade-up order-1 lg:order-2 relative group">

                    <a href="{{ $link }}">

                        <img
                            src="{{ Storage::url($service->image) }}"
                            alt="{{ $service->title }}"
                            class="w-full rounded-[40px]
                                   shadow-2xl
                                   object-cover
                                   transition duration-700
                                   group-hover:scale-[1.03]">

                    </a>

                    <a href="{{ $link }}"
                       class="absolute bottom-8 right-8
                              w-20 h-20 rounded-3xl
                              bg-[#0047BA]
                              hover:bg-[#C8102E]
                              transition duration-500
                              flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-8 h-8 text-white"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M17.25 6.75 6.75 17.25" />

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M8.25 6.75h9v9" />

                        </svg>

                    </a>

                </div>

            @endif

        </div>

    </div>

</section>




@endforeach

<section class="py-24 bg-[#F8F9FC]">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-16 fade-up">

            <p class="uppercase tracking-[6px] text-[#C8102E]">
                Testimoni Pelanggan
            </p>

            <h2 class="text-5xl font-bold mt-3">
                Cerita Bahagia Bersama Daihatsu PRM
            </h2>

        </div>

        <div class="testimonialSwiper swiper">

            <div class="swiper-wrapper">

                @foreach($testimonials as $testimonial)

                    <div class="swiper-slide">

                        <div class="grid lg:grid-cols-2 gap-12 items-center">

                            {{-- Foto --}}
                            <div>

                                <img
                                    src="{{ Storage::url($testimonial->photo) }}"
                                    alt="{{ $testimonial->name }}"
                                    class="w-full h-[420px] object-cover rounded-[40px] shadow-2xl">

                            </div>

                            {{-- Testimoni --}}
                            <div>

                                <div class="text-yellow-400 text-3xl mb-6">
                                    ★★★★★
                                </div>

                                <blockquote class="text-2xl leading-relaxed text-gray-700 italic">

                                    "{{ $testimonial->message }}"

                                </blockquote>

                                <div class="mt-10">

                                    <h3 class="text-3xl font-bold">

                                        {{ $testimonial->name }}

                                    </h3>

                                    <p class="text-gray-500 mt-2">

                                        {{ $testimonial->city }}

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

            <div class="swiper-pagination mt-10"></div>

        </div>

    </div>

</section>
	<section id="latest-articles"
    class="max-w-7xl mx-auto px-4 lg:px-6 py-20">

    {{-- Header --}}
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-10 fade-up">

        <div>
            <span
                class="inline-flex items-center px-4 py-2 rounded-full bg-red-50 text-red-600 text-sm font-semibold">
                BERITA & INFORMASI
            </span>

            <h2 class="mt-4 text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                Artikel & Promo <br>
                Daihatsu Terbaru
            </h2>

            <p class="mt-4 text-gray-500 max-w-2xl">
                Dapatkan informasi promo, tips otomotif, dan berita terbaru
                seputar Daihatsu untuk menemani perjalanan Anda.
            </p>
        </div>

        <a href="#"
            class="inline-flex items-center justify-center px-6 py-3 rounded-full border border-gray-200 font-semibold hover:border-red-500 hover:text-red-600 transition">

            Lihat Semua Artikel

        </a>

    </div>

    <div class="grid lg:grid-cols-[1.6fr_0.9fr] gap-8">

        {{-- Featured --}}
        @if($featuredArticle)

            <a href="{{ route('front.details', $featuredArticle) }}"
                class="group relative overflow-hidden rounded-[32px] min-h-[520px] fade-up">

                <img
                    src="{{ Storage::url($featuredArticle->thumbnail) }}"
                    alt="{{ $featuredArticle->name }}"
                    class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent">
                </div>

                <div
                    class="absolute bottom-0 left-0 right-0 p-8 md:p-10 text-white">

                    <div
                        class="inline-flex items-center px-4 py-2 rounded-full bg-red-600 text-sm font-semibold mb-5">

                        Featured Article

                    </div>

                    <h3
                        class="text-3xl md:text-4xl font-bold leading-tight group-hover:text-red-300 transition">

                        {{ $featuredArticle->name }}

                    </h3>

                    <div
                        class="flex flex-wrap items-center gap-3 mt-5 text-white/80 text-sm">

                        <span>
                            {{ $featuredArticle->author?->name }}
                        </span>

                        <span>•</span>

                        <span>
                            {{ $featuredArticle->created_at->format('d M Y') }}
                        </span>

                    </div>

                </div>

            </a>

        @endif

        {{-- Sidebar --}}
        <div
            class="flex flex-col gap-5 max-h-[520px] overflow-y-auto pr-2 custom-scrollbar">

            @foreach($latestArticles as $article)

                <a href="{{ route('front.details', $article) }}"
                    class="group fade-up"
                    style="transition-delay: {{ $loop->iteration * 100 }}ms">

                    <div
                        class="bg-white rounded-3xl border border-gray-100 p-4 flex gap-4 hover:shadow-lg hover:border-red-200 hover:-translate-y-1 transition-all duration-300">

                        <div
                            class="w-[120px] h-[100px] rounded-2xl overflow-hidden shrink-0">

                            <img
                                src="{{ Storage::url($article->thumbnail) }}"
                                alt="{{ $article->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                        </div>

                        <div class="flex flex-col justify-center">

                            <h3
                                class="font-bold text-gray-900 line-clamp-2 group-hover:text-red-600 transition">

                                {{ $article->name }}

                            </h3>

                            <div
                                class="flex flex-wrap items-center gap-2 mt-3 text-sm text-gray-500">

                                <span>
                                    {{ $article->author?->name }}
                                </span>

                                <span>•</span>

                                <span>
                                    {{ $article->created_at->format('d M Y') }}
                                </span>

                            </div>

                        </div>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</section>
		<script src="js/two-lines-text.js"></script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<!-- JavaScript -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		

     @push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endpush

@endsection  
	