<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CarCreditCalculatorV2 extends Component
{
    public string $search = '';

    public ?int $carId = null;

    public int $dpPercent = 20;

    public int $tenor = 5;

  #[Computed]
public function cars()
{
    return Car::query()

        ->when(
            $this->search,

            fn ($query) =>

            $query->where(
                'name',
                'like',
                '%' . $this->search . '%'
            )
        )

        ->orderBy('name')

        ->get();
}
    #[Computed]
    public function car()
    {
        return Car::find($this->carId);
    }

   #[Computed]
public function otr()
{
    return $this->simulation?->otr_price ?? 0;
}
public function selectCar($id)
{
    $this->carId = $id;

    $car = Car::find($id);

    if ($car && $car->creditSimulations()->exists()) {
        $this->simulationId =
            $car->creditSimulations()
                ->orderBy('id')
                ->first()
                ->id;
    }
}

    #[Computed]
    public function dpNominal()
    {
        return $this->otr * ($this->dpPercent / 100);
    }

    #[Computed]
    public function asuransi()
    {
        return $this->otr * 0.06;
    }

    #[Computed]
    public function pokokHutang()
    {
        return (
            $this->otr
            - $this->dpNominal
        )
        + $this->asuransi;
    }

    #[Computed]
    public function bunga()
    {
        return match ($this->tenor) {

            1 => 0.08,
            2 => 0.085,
            3 => 0.09,
            4 => 0.095,

            default => 0.10,

        };
    }

    #[Computed]
    public function cicilan()
    {
        $bulan = $this->tenor * 12;

        $totalBunga =
            $this->pokokHutang
            *
            $this->bunga
            *
            $this->tenor;

        $totalHutang =
            $this->pokokHutang
            +
            $totalBunga;

        return $totalHutang / $bulan;
    }

    public function render()
    {
        return view(
            'livewire.car-credit-calculator-v2'
        );
    }
    public function resetCar()
{
    $this->carId = null;
}
#[Computed]
public function whatsappUrl()
{
    if (!$this->car) {
        return '#';
    }

    $message = rawurlencode(
        "Halo Daihatsu PRM\n\n" .
        "Saya tertarik dengan:\n\n" .
        "Mobil : {$this->car->name}\n" .
        "OTR : Rp " . number_format($this->otr,0,',','.') . "\n" .
        "DP : {$this->dpPercent}%\n" .
        "Tenor : {$this->tenor} Tahun\n\n" .
        "Estimasi Cicilan:\nRp " .
        number_format($this->cicilan,0,',','.') .
        "/bulan"
    );

    return "https://wa.me/6285222300036?text={$message}";
}
 public ?int $simulationId = null;
 #[Computed]
public function simulation()
{
    return $this->car
        ?->creditSimulations()
        ->find($this->simulationId);
}

}