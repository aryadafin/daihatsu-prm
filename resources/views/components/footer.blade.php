<footer
    id="lokasi"
    class="bg-[#0B1220] text-white mt-20">

    <div class="max-w-7xl mx-auto px-6 py-16">

        <div class="grid md:grid-cols-4 gap-12">

            {{-- Brand --}}
            <div>

                <img src="{{ asset('assets/images/logos/logopng.png') }}"
                     alt="Daihatsu PRM"
                     class="h-12 mb-5">

                <p class="text-gray-400 leading-relaxed text-sm">
                    Authorized Daihatsu Showroom yang menghadirkan pengalaman
                    pembelian mobil terbaik dengan pelayanan profesional,
                    cepat, dan terpercaya.
                </p>

                <div class="mt-6 space-y-3">

                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        ⭐ 4.9/5 Rating Pelanggan
                    </div>

                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        🕘 Senin - Jum'at : 08.30 - 16.30 WIB<br>
                        🕘 Sabtu - Jum'at : 08.30 - 14.00 WIB
                    </div>

                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        🚗 Test Drive & Konsultasi Gratis
                    </div>

                </div>

                <a href="https://wa.me/6285222300036"
                   target="_blank"
                   class="inline-flex mt-6 bg-[#C8102E] px-6 py-3 rounded-full text-sm font-semibold hover:bg-[#A80E27] transition">

                    WhatsApp Sekarang

                </a>

            </div>

            {{-- Produk --}}
            <div>

                <h4 class="font-semibold text-lg mb-5">
                    Produk Daihatsu
                </h4>

                <ul class="space-y-3 text-gray-400 text-sm">

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Rocky
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Terios
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Sigra
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Ayla
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Xenia
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Gran Max
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Artikel --}}
            <div>

                <h4 class="font-semibold text-lg mb-5">
                    Artikel & Informasi
                </h4>

                <ul class="space-y-3 text-gray-400 text-sm">

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Promo Terbaru
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Tips & Edukasi
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Berita Daihatsu
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('credit.simulation') }}"
                           class="hover:text-white transition">
                            Simulasi Kredit
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Booking Test Drive
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Kontak --}}
            <div>

                <h4 class="font-semibold text-lg mb-5">
                    Hubungi Kami
                </h4>

                <div class="space-y-5">

                    {{-- Serpong --}}
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">

                        <p class="font-semibold text-white mb-1">
                            Cabang Serpong
                        </p>

                        <p class="text-sm text-gray-400 leading-relaxed">
                            Taman Tekno Boulevard Blok B19-20<br>
                            BSD City, Setu, Tangerang Selatan<br>
                            Banten 15311
                        </p>

                        <p class="mt-3 text-sm text-gray-300">
                            📞 0852 2230 0036
                        </p>

                    </div>
{{-- Serpong --}}
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">

                        <p class="font-semibold text-white mb-1">
                            Pameran Pasar Kemis
                        </p>

                        <p class="text-sm text-gray-400 leading-relaxed">
                            JL.bumi indah 
Ruko Union no RPR 05

                        </p>

                        <p class="mt-3 text-sm text-gray-300">
                            📞 0852 2230 0036
                        </p>

                    </div>


                    {{-- Pandeglang --}}
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">

                        <p class="font-semibold text-white mb-1">
                            Cabang Pandeglang
                        </p>

                        <p class="text-sm text-gray-400 leading-relaxed">
                            Jl. Raya Serang - Pandeglang<br>
                            Karang Tanjung, Kabupaten Pandeglang<br>
                            Banten 42251
                        </p>

                        <p class="mt-3 text-sm text-gray-300">
                            📞 0899 9898 970
                        </p>

                    </div>

                    <div class="text-sm text-gray-400">
                        ✉️ prmgroup@daihatsuprm.co.id
                    </div>

                </div>

            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/10 mt-14 pt-8">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <p class="text-gray-500 text-sm">
                    © {{ date('Y') }} Daihatsu PRM. All rights reserved.
                </p>

                <div class="flex items-center gap-5 text-gray-500 text-sm">

                    <a href="https://instagram.com/daihatsuprm" class="hover:text-white transition">
                        Instagram
                    </a>

                    <a href="https://www.facebook.com/share/1SdP2cmRv7/" class="hover:text-white transition">
                        Facebook
                    </a>

                    <a href="https://www.youtube.com/@DaihatsuPRMOfficial" class="hover:text-white transition">
                        YouTube
                    </a>

                </div>

                <p class="text-gray-500 text-sm">
                    Authorized Daihatsu Showroom • Trusted & Professional Service
                </p>

            </div>

        </div>

    </div>

</footer>