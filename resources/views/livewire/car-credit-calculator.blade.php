<div class="py-24 bg-[#F8F9FC]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <p class="uppercase tracking-[4px] text-[#C8102E]">
                Simulasi Kredit
            </p>

            <h2 class="text-5xl font-bold mt-4">
                Hitung Cicilan {{ $car->name }}
            </h2>

        </div>


        <div class="grid lg:grid-cols-2 gap-10">

            {{-- FORM --}}
            <div class="bg-white rounded-[32px] shadow-xl p-10">

                <div class="space-y-10">

                    {{-- Tipe Mobil --}}
                    <div>

                        <label class="block font-semibold mb-3">

                            Tipe Mobil

                        </label>

                        <select
                            wire:model.live="simulationId"
                            class="w-full border rounded-2xl p-4"
                        >

                            @foreach($car->creditSimulations as $simulation)

                                <option value="{{ $simulation->id }}">

                                    {{ $simulation->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- DP --}}
                    <div>

                        <div class="flex justify-between mb-4">

                            <span class="font-semibold">

                                DP

                            </span>

                            <span class="text-[#C8102E] font-bold">

                                {{ $dpPercent }}%

                            </span>

                        </div>

                        <input
                            type="range"
                            min="20"
                            max="70"
                            step="5"
                            wire:model.live="dpPercent"
                            class="w-full"
                        >

                    </div>


                    {{-- Tenor --}}
                    <div>

                        <label class="block font-semibold mb-4">

                            Tenor

                        </label>

                        <div class="flex flex-wrap gap-3">

                            @foreach([1,2,3,4,5] as $value)

                                <button
                                    type="button"
                                    wire:click="$set('tenor',{{ $value }})"
                                    class="
                                        px-6 py-3 rounded-full border transition

                                        {{ $tenor == $value
                                            ? 'bg-[#D6001C] text-white border-[#D6001C]'
                                            : 'bg-white'
                                        }}
                                    "
                                >

                                    {{ $value }} Tahun

                                </button>

                            @endforeach

                        </div>

                    </div>

                </div>
{{-- Thumbnail Mobil --}}
<div class="bg-[#F8F9FC] rounded-[32px] p-8 mt-10">

    <img
    src="{{ Storage::url($car->thumbnail) }}"
    alt="{{ $car->name }}"
    class="
        w-full
        object-contain
        transition-all
        duration-500
        ease-out
        hover:scale-110
        hover:-translate-y-2
    "
/>

    <div class="text-center mt-6">

        <h3 class="text-2xl font-bold">

            {{ $car->name }}

        </h3>

        <p class="text-gray-500 mt-2">

            Daihatsu {{ $car->name }}

        </p>

    </div>

</div>
            </div>



            {{-- HASIL --}}
            <div class="bg-[#D6001C] rounded-[32px] p-10 text-white shadow-xl">

                <div class="text-white/70">

                    Harga OTR

                </div>

                <div class="text-4xl font-bold mt-3">

                    Rp {{ number_format($this->otr,0,',','.') }}

                </div>


                <div class="border-t border-white/20 mt-10 pt-10 space-y-5">

                    <div class="flex justify-between">

                        <span>

                            DP

                        </span>

                        <span class="font-semibold">

                            Rp {{ number_format($this->dpNominal,0,',','.') }}

                        </span>

                    </div>


                    <div class="flex justify-between">

                        <span>

                            Pokok Hutang

                        </span>

                        <span class="font-semibold">

                            Rp {{ number_format($this->pokokHutang,0,',','.') }}

                        </span>

                    </div>


                    <div class="flex justify-between">

                        <span>

                            Tenor

                        </span>

                        <span class="font-semibold">

                            {{ $tenor }} Tahun

                        </span>

                    </div>

                </div>


                <div class="border-t border-white/20 mt-10 pt-10">

                    <div class="text-white/70">

                        Cicilan Per Bulan

                    </div>

                    <div class="text-5xl font-bold mt-4">

                        Rp {{ number_format($this->cicilan,0,',','.') }}

                    </div>

                </div>


                <a
                    target="_blank"
                    href="https://wa.me/6285222300036?text={{ urlencode(
                        "Halo Daihatsu PRM,

Saya tertarik dengan ".$this->simulation?->name."

Harga OTR : Rp ".number_format($this->otr,0,',','.')."

DP : Rp ".number_format($this->dpNominal,0,',','.')."

Tenor : ".$tenor." Tahun

Cicilan : Rp ".number_format($this->cicilan,0,',','.')."/bulan

Mohon informasi promo terbaik."
                    ) }}"
                    class="
                        mt-10
                        block
                        text-center
                        bg-white
                        text-[#D6001C]
                        font-bold
                        rounded-2xl
                        py-4
                        hover:bg-gray-100
                        transition
                    "
                >

                    Minta Penawaran

                </a>
<div class="mt-8 text-sm text-white/80 leading-7">

    <p>
        * Harga OTR yang tertera merupakan harga OTR wilayah Tangerang dan sekitarnya.
    </p>

    <p class="mt-2">
        * Uang muka belum meliputi biaya administrasi, provisi, asuransi, dan biaya lainnya.
    </p>

    <p class="mt-2">
        * Simulasi kredit dibuat berdasarkan tingkat suku bunga yang disesuaikan dengan tenor yang telah Anda pilih.
    </p>

    <p class="mt-2">
        * Simulasi ini hanya sebagai ilustrasi dan dapat berubah sewaktu-waktu sesuai kebijakan leasing yang berlaku.
    </p>

</div>
            </div>

        </div>

    </div>

</div>