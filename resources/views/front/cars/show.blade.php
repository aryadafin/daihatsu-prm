@extends('layout.app')

@section('title', $car->name . ' - Daihatsu PRM')

@section('content')

    <!-- semua isi halaman mobil -->



  

<section class="max-w-7xl mx-auto px-6 py-12">

    <div class="grid lg:grid-cols-2 gap-12 items-center">

        {{-- Gambar --}}
        <div class="bg-white rounded-[32px] p-8">

            <img
    src="{{ Storage::url($car->thumbnail) }}"
    class="w-full object-contain"
    alt="{{ $car->name }}">

        </div>

        {{-- Informasi --}}
        <div>

            <p class="uppercase tracking-[0.3em] text-sm text-gray-400">
                Daihatsu
            </p>

            <h1 class="text-5xl font-bold mt-3">
                {{ $car->name }}
            </h1>

            <p class="text-[#C8102E] text-4xl font-bold mt-8">

                @if($car->price)

                    Rp {{ number_format($car->price / 1000000, 0, ',', '.') }} Jutaan

                @else

                    Hubungi Kami

                @endif

            </p>

            @if($car->description)

                <p class="text-gray-500 mt-6 leading-relaxed">
                    {{ $car->description }}
                </p>

            @endif
                        <div class="mt-10 flex flex-wrap gap-4">

                <a href="https://wa.me/6285222300036?text={{ urlencode('Halo Admin Daihatsu PRM, saya tertarik dengan ' . $car->name) }}"
                   target="_blank"
                   class="bg-[#C8102E] text-white px-8 py-4 rounded-full font-semibold hover:bg-[#A60D26] transition">

                    WhatsApp Sekarang

                </a>

                <a href="#booking"
                   class="border border-[#C8102E] text-[#C8102E]
                          px-8 py-4 rounded-full font-semibold
                          hover:bg-[#C8102E] hover:text-white transition">

                    Booking Test Drive

                </a>

            </div>

        </div>

    </div>

</section>
@if($car->hero_image)

<section class="relative h-screen">

    <img
        src="{{ Storage::url($car->hero_image) }}"
        class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-7xl font-bold text-white">
                {{ $car->name }}
            </h1>
        </div>
    </div>

</section>

@endif
<section class="max-w-7xl mx-auto px-6 py-12">

    <h2 class="text-3xl font-bold mb-8">
        Spesifikasi
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white rounded-[24px] p-6">
            <p class="text-gray-400">Mesin</p>
            <p class="font-bold mt-2">
                {{ $car->engine ?: '-' }}
            </p>
        </div>

        <div class="bg-white rounded-[24px] p-6">
            <p class="text-gray-400">Bahan Bakar</p>
            <p class="font-bold mt-2">
                {{ $car->fuel_type ?: '-' }}
            </p>
        </div>

        <div class="bg-white rounded-[24px] p-6">
            <p class="text-gray-400">Transmisi</p>
            <p class="font-bold mt-2">
                {{ $car->transmission ?: '-' }}
            </p>
        </div>

        <div class="bg-white rounded-[24px] p-6">
            <p class="text-gray-400">Kapasitas</p>
            <p class="font-bold mt-2">
                {{ $car->seat_capacity ?: '-' }}
            </p>
        </div>

    </div>

</section>

@if($car->features->count())

<section class="py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center fade-up">

            <p class="uppercase tracking-[6px] text-[#C8102E]">
                Keunggulan
            </p>

            <h2 class="text-5xl font-bold mt-4">
                Mengapa Memilih {{ $car->name }}
            </h2>

        </div>

    </div>

</section>

@foreach($car->features as $index => $feature)

<section class="py-24 {{ $index % 2 ? 'bg-[#F8F9FC]' : 'bg-white' }}">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            @if($index % 2 == 0)

                <div class="fade-up">

                    <img
                        src="{{ Storage::url($feature->image) }}"
                        class="w-full rounded-[40px] shadow-2xl object-cover">

                </div>

                <div class="fade-up">

                    <span class="text-[#C8102E] uppercase tracking-[4px]">
                        Feature {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h2 class="text-5xl font-bold mt-5">
                        {{ $feature->title }}
                    </h2>

                    <p class="text-gray-600 mt-8 leading-8">
                        {{ $feature->description }}
                    </p>

                </div>

            @else

                <div class="fade-up order-2 lg:order-1">

                    <span class="text-[#C8102E] uppercase tracking-[4px]">
                        Feature {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h2 class="text-5xl font-bold mt-5">
                        {{ $feature->title }}
                    </h2>

                    <p class="text-gray-600 mt-8 leading-8">
                        {{ $feature->description }}
                    </p>

                </div>

                <div class="fade-up order-1 lg:order-2">

                    <img
                        src="{{ Storage::url($feature->image) }}"
                        class="w-full rounded-[40px] shadow-2xl object-cover">

                </div>

            @endif

        </div>

    </div>

</section>

@endforeach

@endif

@if($car->youtube_url)

<section class="py-28 bg-[#0B1220]">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="uppercase tracking-[4px] text-red-500">
                Video Review
            </p>

            <h2 class="text-5xl font-bold text-white mt-4">
                Explore {{ $car->name }}
            </h2>

        </div>

        <div class="aspect-video rounded-[40px] overflow-hidden shadow-2xl">

            <iframe
                class="w-full h-full"
                src="{{ str_replace('watch?v=', 'embed/', $car->youtube_url) }}"
                allowfullscreen>
            </iframe>

        </div>

    </div>

</section>

@endif

@if($car->creditSimulations->count())

    <livewire:car-credit-calculator
        :car="$car"
    />

@endif
<section class="py-28">

    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-[#D6001C] rounded-[40px] p-14 text-center">

            <h2 class="text-5xl font-bold text-white">
                Siap Memiliki {{ $car->name }}?
            </h2>

            <p class="text-white/80 mt-5 text-lg">
                Hubungi tim Daihatsu PRM sekarang dan dapatkan
                penawaran terbaik.
            </p>

            <a href="https://wa.me/6285222300036"
               class="inline-flex mt-10 bg-white text-[#D6001C]
                      px-10 py-4 rounded-full font-bold
                      hover:scale-105 transition">

                Booking Test Drive
            </a>

        </div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-6 py-12">

    <div class="flex items-center justify-between mb-8">

        <div>

            <p class="text-[#C8102E] font-semibold">
                Unit Lainnya
            </p>

            <h2 class="text-3xl font-bold">
                Mobil Daihatsu Lainnya
            </h2>

        </div>

    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach($relatedCars as $related)

            @include('front.cars.partials.related')

        @endforeach

    </div>

</section>


@endsection