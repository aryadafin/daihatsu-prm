<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CarCreditCalculator extends Component
{
    public Car $car;

    public ?int $simulationId = null;

    public int $dpPercent = 20;

    public int $tenor = 5;

    public function mount(Car $car): void
    {
        $this->car = $car;

        $this->simulationId = $car
            ->creditSimulations
            ->first()?->id;
    }

    #[Computed]
    public function simulation()
    {
        return $this->car
            ->creditSimulations
            ->firstWhere(
                'id',
                $this->simulationId
            );
    }

    #[Computed]
    public function otr(): float
    {
        return $this->simulation?->otr_price ?? 0;
    }

    #[Computed]
    public function dpNominal(): float
    {
        return $this->otr * ($this->dpPercent / 100);
    }

    #[Computed]
    public function asuransi(): float
    {
        return $this->otr * 0.06;
    }

    #[Computed]
    public function pokokHutang(): float
    {
        return (
            $this->otr
            - $this->dpNominal
        ) + $this->asuransi;
    }

    #[Computed]
    public function bunga(): float
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
    public function cicilan(): float
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
            'livewire.car-credit-calculator'
        );
    }
}