<a href="{{ route('front.car', $related) }}"
   class="block">

    <div class="bg-white rounded-[24px] border border-[#EEF0F7]
                p-5 hover:shadow-lg transition">

       <img
    src="{{ Storage::url($related->thumbnail) }}"
    class="w-full object-contain"
    alt="{{ $related->name }}">

        <h3 class="font-bold text-xl mt-4">
            {{ $related->name }}
        </h3>

        <p class="text-[#C8102E] font-bold mt-2">

            @if($related->price)

                Rp {{ number_format($related->price / 1000000, 0, ',', '.') }} Jutaan

            @endif

        </p>

    </div>

</a>