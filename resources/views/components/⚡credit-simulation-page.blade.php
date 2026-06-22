<!-- <?php

use Livewire\Volt\Component;
use App\Models\CreditCar;

new class extends Component
{
    public $cars = [];

    public function mount()
    {
        $this->cars = CreditCar::orderBy('name')->get();
    }
};

?>

<div>

    <h1 class="text-4xl font-bold mb-8">
        Simulasi Kredit
    </h1>

    <select class="border rounded-xl p-3 w-full">

        <option>
            Pilih Mobil
        </option>

        @foreach ($cars as $car)

            <option>

                {{ $car->name }}

            </option>

        @endforeach

    </select>

</div> -->