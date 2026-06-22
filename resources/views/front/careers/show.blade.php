@extends('layout.app')

@section('title', 'Karir - Daihatsu PRM')

@section('content')

<section class="py-24">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center">

            <h1 class="text-5xl font-bold">
                Bergabung Bersama Daihatsu PRM
            </h1>

            <p class="mt-6 text-gray-500 max-w-3xl mx-auto text-lg">
                Temukan peluang karir terbaik dan jadilah bagian dari tim profesional Daihatsu PRM.
            </p>

        </div>

    </div>

</section>

@foreach($careers as $index => $career)

@php
    $link = $career->button_url ?: 'https://wa.me/6285222300036';
@endphp

<section class="pb-24 {{ $index % 2 ? 'bg-[#F8F9FC]' : 'bg-white' }}">

    <div class="max-w-7xl mx-auto px-8 lg:px-12">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            @if($index % 2 == 0)

                {{-- Gambar --}}
                <div class="fade-up relative group">

                    <a href="{{ $link }}" target="_blank">

                        <img
                            src="{{ Storage::url($career->image) }}"
                            alt="{{ $career->title }}"
                            class="w-full rounded-[40px]
                                   shadow-2xl
                                   object-cover
                                   transition duration-700
                                   group-hover:scale-[1.03]">

                    </a>

                </div>

                {{-- Text --}}
                <div class="fade-up">

                    <span class="uppercase tracking-[4px] text-[#C8102E]">
                        {{ $career->employment_type }}
                    </span>

                    <h2 class="text-5xl font-bold mt-3">
                        {{ $career->title }}
                    </h2>

                    <div class="flex flex-wrap gap-6 mt-5 text-gray-500">

                        <span>
                            📍 {{ $career->location }}
                        </span>

                        @if($career->salary)

                            <span>
                                💰 {{ $career->salary }}
                            </span>

                        @endif

                    </div>

                    <div class="prose max-w-none mt-8">
                        {!! $career->description !!}
                    </div>

                    <a href="{{ $link }}"
                       target="_blank"
                       class="inline-flex items-center gap-3
                              mt-8 px-10 py-4
                              rounded-full
                              bg-[#C8102E]
                              text-white
                              font-semibold
                              hover:scale-105
                              transition duration-500">

                        {{ $career->button_text ?: 'Lamar Sekarang' }}

                    </a>

                </div>

            @else

                {{-- Text --}}
                <div class="fade-up order-2 lg:order-1">

                    <span class="uppercase tracking-[4px] text-[#C8102E]">
                        {{ $career->employment_type }}
                    </span>

                    <h2 class="text-5xl font-bold mt-3">
                        {{ $career->title }}
                    </h2>

                    <div class="flex flex-wrap gap-6 mt-5 text-gray-500">

                        <span>
                            📍 {{ $career->location }}
                        </span>

                        @if($career->salary)

                            <span>
                                💰 {{ $career->salary }}
                            </span>

                        @endif

                    </div>

                    <div class="prose max-w-none mt-8">
                        {!! $career->description !!}
                    </div>

                    <a href="{{ $link }}"
                       target="_blank"
                       class="inline-flex items-center gap-3
                              mt-8 px-10 py-4
                              rounded-full
                              bg-[#C8102E]
                              text-white
                              font-semibold
                              hover:scale-105
                              transition duration-500">

                        {{ $career->button_text ?: 'Lamar Sekarang' }}

                    </a>

                </div>

                {{-- Gambar --}}
                <div class="fade-up order-1 lg:order-2 relative group">

                    <a href="{{ $link }}" target="_blank">

                        <img
                            src="{{ Storage::url($career->image) }}"
                            alt="{{ $career->title }}"
                            class="w-full rounded-[40px]
                                   shadow-2xl
                                   object-cover
                                   transition duration-700
                                   group-hover:scale-[1.03]">

                    </a>

                </div>

            @endif

        </div>

    </div>

</section>

@endforeach

@endsection