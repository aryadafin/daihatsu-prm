@extends('layout.app')

@section('title', 'Lokasi Kami')

@section('content')

<section class="py-20">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-16 fade-up">

            <div class="inline-flex items-center gap-2
                        bg-red-50 text-[#C8102E]
                        px-5 py-2 rounded-full">

                📍 Lokasi Daihatsu PRM

            </div>

            <h1 class="text-4xl lg:text-5xl font-bold mt-6">

                Temukan Cabang Kami

            </h1>

            <p class="text-gray-500 max-w-2xl mx-auto mt-5">

                Kami siap membantu pembelian unit,
                konsultasi kredit, hingga booking test drive.

            </p>

        </div>



        {{-- List Cabang --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($branches as $branch)

                <div
                    class="
                    group
                    fade-up
                    bg-white
                    rounded-[40px]
                    shadow-lg
                    overflow-hidden
                    hover:-translate-y-2
                    hover:shadow-2xl
                    transition-all duration-500">

                    {{-- Foto --}}
                    <div class="overflow-hidden">

                        <img
                            src="{{ Storage::url($branch->image) }}"
                            class="
                            h-60
                            w-full
                            object-cover
                            transition duration-700
                            group-hover:scale-105">

                    </div>


                    <div class="p-8">

                        {{-- Nama Cabang --}}
                        <h2 class="text-2xl font-bold">

                            {{ $branch->name }}

                        </h2>


                        {{-- Kota --}}
                        <p class="text-gray-500 mt-3">

                            {{ $branch->city }}

                        </p>


                        {{-- Alamat --}}
                        @if($branch->address)

                            <div class="mt-5 text-sm text-gray-500 leading-7">

                                {{ $branch->address }}

                            </div>

                        @endif


                        {{-- Nomor --}}
                        @if($branch->phone)

                            <div class="mt-5 text-sm text-gray-600">

                                📞 {{ $branch->phone }}

                            </div>

                        @endif


                        {{-- Tombol --}}
                        <div class="flex gap-3 mt-8">

                            <a
                                href="{{ $branch->maps_url }}"
                                target="_blank"
                                class="
                                flex-1
                                text-center
                                rounded-2xl
                                py-3
                                border
                                border-gray-200
                                hover:border-[#C8102E]
                                hover:text-[#C8102E]
                                transition">

                                Maps

                            </a>

                            <a
                                href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $branch->phone) }}"
                                target="_blank"
                                class="
                                flex-1
                                text-center
                                rounded-2xl
                                py-3
                                text-white
                                bg-[#25D366]
                                hover:bg-[#1faa52]
                                transition">

                                WhatsApp

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>



        {{-- CTA --}}
        <div
            class="
            fade-up
            mt-20
            rounded-[50px]
            bg-gradient-to-b
            from-[#e5383b]
            to-[#c1121f]
            text-white
            p-12
            text-center">

            <h2 class="text-3xl lg:text-4xl font-bold">

                Siap Memiliki Mobil Daihatsu Impian?

            </h2>

            <p class="mt-5 text-white/80">

                Hubungi tim Daihatsu PRM sekarang dan dapatkan
                penawaran terbaik.

            </p>

            <a
                href="https://wa.me/6285222300036"
                target="_blank"
                class="
                inline-flex
                items-center
                gap-2
                mt-8
                bg-white
                text-[#C8102E]
                px-8
                py-4
                rounded-3xl
                font-semibold
                hover:-translate-y-1
                transition-all">

                Chat WhatsApp

            </a>

        </div>

    </div>

</section>

@endsection