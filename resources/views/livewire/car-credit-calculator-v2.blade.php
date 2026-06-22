
<div class="max-w-7xl mx-auto px-4 lg:px-6 relative">

    {{-- Background --}}
    <div class="absolute inset-0 -z-10
                bg-gradient-to-br
                from-slate-50
                via-white
                to-red-50 rounded-[50px]">
    </div>

    {{-- LIST MOBIL --}}
    @if(!$this->car)
{{-- Search --}}
<div class="max-w-2xl mx-auto mb-12">

    <div class="relative">

        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="absolute left-6 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110 2.5a7.5 7.5 0 016.65 14.15z"/>

        </svg>

        <input
            type="text"

            wire:model.live.debounce.300ms="search"

            placeholder="Cari mobil Daihatsu..."

            class="
                w-full
                rounded-[35px]
                bg-white
                border border-gray-200
                py-5
                pl-14
                pr-6
                text-lg
                shadow-lg
                focus:ring-4
                focus:ring-blue-100
                focus:border-[#0047BA]
                transition">

    </div>

</div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fade">

    @foreach($this->cars as $car)

        <button
            wire:click="selectCar({{ $car->id }})"
            class="group
                   bg-white/80
                   backdrop-blur-xl
                   rounded-[40px]
                   border border-white
                   p-8
                   shadow-lg
                   hover:-translate-y-2
                   hover:shadow-2xl
                   transition-all duration-500">

            <img
                src="{{ Storage::url($car->thumbnail) }}"
                class="h-52 mx-auto object-contain transition duration-700 group-hover:scale-105">

            <h3 class="text-2xl font-bold mt-6">

                {{ $car->name }}

            </h3>

            <p class="text-[#C8102E] mt-3 font-semibold">

                OTR Rp {{ number_format($car->price,0,',','.') }}

            </p>

        </button>

    @endforeach


    @if($this->cars->isEmpty())

        <div class="col-span-full">

            <div
                class="
                bg-white
                rounded-[40px]
                p-12
                text-center
                shadow-lg">

                <div class="text-7xl mb-6">

                    🚗

                </div>

                <h3 class="text-2xl font-bold">

                    Mobil tidak ditemukan

                </h3>

                <p class="mt-3 text-gray-500">

                    Coba kata kunci lain

                </p>

            </div>

        </div>

    @endif

</div>

    @endif



    {{-- KALKULATOR --}}
@if($this->car)

<div class="space-y-8 animate-fade">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">

        {{-- KIRI --}}
        <div
            class="
            bg-white/80
            backdrop-blur-xl
            rounded-[40px]
            border border-white
            shadow-xl
            p-8 lg:p-10">

            <div class="flex items-center justify-between mb-10">

                <h2 class="text-3xl font-bold">
                    Simulasi Kredit
                </h2>

                <button
                    wire:click="resetCar"
                    class="text-gray-500 hover:text-[#C8102E] transition">

                    Pilih Mobil Lain

                </button>

            </div>

            {{-- Mobil --}}
            <div class="mb-8">

                <label class="text-gray-500">
                    Mobil
                </label>

                <div class="text-2xl font-bold mt-2">
                    {{ $this->car->name }}
                </div>

            </div>

            {{-- Varian --}}
            <div class="mb-10">

                <label class="text-sm font-medium text-gray-500">
                    Pilih Varian
                </label>

                <select
                    wire:model.live="simulationId"
                    class="
                    w-full
                    mt-3
                    rounded-[30px]
                    border-2
                    border-[#e5383b]
                    bg-white
                    px-6
                    py-5
                    text-lg
                    shadow-sm
                    focus:ring-4
                    focus:ring-red-100
                    transition">

                    @foreach($this->car->creditSimulations as $simulation)

                        <option value="{{ $simulation->id }}">
                            {{ $simulation->name }}
                        </option>

                    @endforeach

                </select>

            </div>

            {{-- DP --}}
            <div class="mb-10">

                <div class="flex justify-between mb-3">

                    <span>DP</span>

                    <span class="font-bold text-[#e5383b]">
                        {{ $dpPercent }}%
                    </span>

                </div>

                <input
                    type="range"
                    min="10"
                    max="50"
                    step="5"
                    wire:model.live="dpPercent"
                    class="w-full cursor-pointer">

            </div>

            {{-- Tenor --}}
            <div>

                <div class="flex justify-between mb-3">

                    <span>Tenor</span>

                    <span class="font-bold text-[#e5383b]">
                        {{ $tenor }} Tahun
                    </span>

                </div>

                <input
                    type="range"
                    min="1"
                    max="5"
                    wire:model.live="tenor"
                    class="w-full cursor-pointer">

            </div>

            {{-- Cicilan --}}
            <div
                class="
                mt-12
                rounded-[40px]
                p-8 lg:p-10
                text-white
                shadow-xl
                bg-gradient-to-b
                from-[#e5383b]
                to-[#c1121f]">

                <p class="text-white/80">
                    Estimasi Cicilan per Bulan
                </p>

                <div class="text-4xl lg:text-5xl font-bold mt-4">

                    Rp {{ number_format($this->cicilan,0,',','.') }}

                </div>

                <div class="mt-2 text-white/70">
                    /bulan
                </div>

            </div>

        </div>



        {{-- KANAN --}}
        <div
            class="
            bg-white
            rounded-[40px]
            shadow-xl
            border border-gray-100
            p-8 lg:p-10
            lg:sticky lg:top-28">

            <img
                src="{{ Storage::url($this->car->thumbnail) }}"
                class="w-full object-contain">

            <h2 class="text-3xl lg:text-4xl font-bold mt-8">

                {{ $this->car->name }}

            </h2>

            @if($this->simulation)

                <div
                    wire:key="simulation-name-{{ $simulationId }}"
                    class="mt-3 text-xl font-semibold text-gray-600">

                    {{ $this->simulation->name }}

                </div>

            @endif

            <p class="text-[#C8102E] text-2xl mt-4 font-semibold">

                OTR Rp {{ number_format($this->otr,0,',','.') }}

            </p>

            <div class="mt-10 border-t pt-8 space-y-5 text-gray-700">

                <div class="detail-row">

                    <span>DP Nominal</span>

                    <span class="font-semibold">

                        Rp {{ number_format($this->dpNominal,0,',','.') }}

                    </span>

                </div>

                <div class="detail-row">

                    <span>Asuransi</span>

                    <span class="font-semibold">

                        Rp {{ number_format($this->asuransi,0,',','.') }}

                    </span>

                </div>

                <div class="detail-row">

                    <span>Pokok Hutang</span>

                    <span class="font-semibold">

                        Rp {{ number_format($this->pokokHutang,0,',','.') }}

                    </span>

                </div>

                <div class="detail-row">

                    <span>Bunga</span>

                    <span class="font-semibold">

                        {{ $this->bunga * 100 }}%

                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- Tombol WhatsApp --}}
    <div
        class="
        bg-white
        rounded-[40px]
        shadow-xl
        border border-gray-100
        p-6">

        <a
            href="{{ $this->whatsappUrl }}"
            target="_blank"
            class="
            block
            w-full
            text-center
            rounded-[30px]
            py-5
            font-semibold
            text-white
            text-lg
            bg-gradient-to-r
            from-[#0047BA]
            to-[#0066FF]
            shadow-lg
            hover:-translate-y-1
            hover:shadow-2xl
            transition-all duration-500">

            Ajukan Simulasi via WhatsApp

        </a>

    </div>

</div>

@endif

</div>