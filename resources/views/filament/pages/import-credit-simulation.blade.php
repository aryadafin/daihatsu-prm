<x-filament-panels::page>

    <div class="max-w-4xl mx-auto">

        <div class="space-y-6">

            <x-filament::section>

                <x-slot name="heading">
                    Import Simulasi Kredit
                </x-slot>

                <x-slot name="description">
                    Upload file Excel untuk memperbarui seluruh data simulasi kredit.
                </x-slot>

                {{-- Download Template --}}
                <div class="mt-4">
                    <x-filament::button
                        tag="a"
                        href="/download-template-kredit"
                        color="gray"
                        icon="heroicon-o-arrow-down-tray">

                        Download Template Excel

                    </x-filament::button>
                </div>

            </x-filament::section>

            <x-filament::section>

    <x-slot name="heading">
        Upload File
    </x-slot>

    <div class="space-y-8">

        {{ $this->form }}

        <div class="border-t border-gray-800 pt-6 flex justify-end">

            <x-filament::button
                wire:click="import"
                size="lg"
                icon="heroicon-o-arrow-up-tray">

                Import Excel

            </x-filament::button>

        </div>

    </div>

</x-filament::section>
        </div>

    </div>

</x-filament-panels::page>