<div class="grid lg:grid-cols-2 gap-8">

    {{-- FORM --}}
    <div class="bg-white rounded-3xl shadow-xl p-8">

        <h1 class="text-4xl font-bold mb-2">
            Simulasi Kredit
        </h1>

        <p class="text-gray-500 mb-8">
            Hitung cicilan mobil impian Anda
        </p>

        <div class="space-y-5">

            {{-- Mobil --}}
            <div>
                <label class="font-semibold mb-2 block">
                    Mobil
                </label>

                <select
                    wire:model.live="car_id"
                    class="w-full border rounded-2xl p-4"
                >
                    <option value="">
                        Pilih Mobil
                    </option>

                    @foreach($cars as $car)

                        <option value="{{ $car->id }}">
                            {{ $car->name }}
                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Leasing --}}
            <div>
                <label class="font-semibold mb-2 block">
                    Leasing
                </label>

                <select
                    wire:model.live="leasing_id"
                    class="w-full border rounded-2xl p-4"
                >
                    <option value="">
                        Pilih Leasing
                    </option>

                    @foreach($leasings as $leasing)

                        <option value="{{ $leasing->id }}">
                            {{ $leasing->name }}
                        </option>

                    @endforeach

                </select>
            </div>

            {{-- DP --}}
            <div>
                <label class="font-semibold mb-2 block">
                    DP
                </label>

                <select
                    wire:model.live="dp"
                    class="w-full border rounded-2xl p-4"
                >
                    <option value="">
                        Pilih DP
                    </option>

                    @foreach($dps as $dpValue)

                        <option value="{{ $dpValue }}">
                            {{ $dpValue }} Juta
                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Tenor --}}
            <div>
                <label class="font-semibold mb-2 block">
                    Tenor
                </label>

                <select
                    wire:model.live="tenor"
                    class="w-full border rounded-2xl p-4"
                >
                    <option value="">
                        Pilih Tenor
                    </option>

                    @foreach($tenors as $tenorValue)

                        <option value="{{ $tenorValue }}">
                            {{ $tenorValue }} Bulan
                        </option>

                    @endforeach

                </select>
            </div>

        </div>

    </div>



    {{-- HASIL --}}
    <div
        class="
        bg-gradient-to-br
        from-[#D50032]
        to-[#B00028]
        rounded-3xl
        p-10
        text-white
        shadow-2xl
        "
    >

        <div class="text-xl opacity-90">
            Angsuran Per Bulan
        </div>

        <div class="mt-5 text-5xl font-bold">

            @if($installment)

                Rp {{ number_format($installment,0,',','.') }}

            @else

                -

            @endif

        </div>

        <div class="text-sm opacity-80 mt-2">
            / bulan
        </div>


        @if($otr)

            <div class="border-t border-white/20 mt-10 pt-8 space-y-5">

                <div class="flex justify-between">

                    <span>
                        OTR
                    </span>

                    <span class="font-semibold">
                        Rp {{ number_format($otr,0,',','.') }}
                    </span>

                </div>

                <div class="flex justify-between">

                    <span>
                        DP
                    </span>

                    <span class="font-semibold">
                        {{ $dp }} Juta
                    </span>

                </div>

                <div class="flex justify-between">

                    <span>
                        Tenor
                    </span>

                    <span class="font-semibold">
                        {{ $tenor }} Bulan
                    </span>

                </div>

            </div>

        @endif


        @if($installment)

            <a
                target="_blank"
                href="https://wa.me/6285222300036"
                class="
                mt-10
                block
                text-center
                bg-white
                text-[#D50032]
                font-bold
                rounded-2xl
                py-4
                hover:bg-gray-100
                transition
                "
            >
                Ajukan Sekarang
            </a>

        @endif

    </div>

</div>