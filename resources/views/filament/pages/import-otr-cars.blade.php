<x-filament-panels::page>

    <form wire:submit="import">

        {{ $this->form }}

        <div class="mt-6">
            <x-filament::button
                type="submit"
                icon="heroicon-o-banknotes">

                Import OTR Mobil

            </x-filament::button>
        </div>

    </form>

</x-filament-panels::page>