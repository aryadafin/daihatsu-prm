<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CreditCar;
use App\Models\Leasing;
use App\Models\CreditProgram;
use App\Models\CreditInstallment;

class CreditSimulationPage extends Component
{
    public $cars = [];
    public $leasings = [];
    public $dps = [];
    public $tenors = [];

    public $car_id;
    public $leasing_id;
    public $dp;
    public $tenor;

    public $installment = null;
    public $otr = null;

    public function mount()
    {
        $this->cars = CreditCar::orderBy('name')->get();
    }

    public function updatedCarId()
    {
        $this->reset(
            'leasing_id',
            'dp',
            'tenor',
            'installment',
            'otr'
        );

        $this->leasings = Leasing::whereHas(
            'creditPrograms',
            fn ($q) => $q->where('credit_car_id', $this->car_id)
        )->get();
    }

    public function updatedLeasingId()
    {
        $program = CreditProgram::where(
            'credit_car_id',
            $this->car_id
        )
            ->where(
                'leasing_id',
                $this->leasing_id
            )
            ->first();

        if (!$program) {
            return;
        }

        $this->otr = $program->otr_price;

        $this->dps = CreditInstallment::where(
            'credit_program_id',
            $program->id
        )
            ->select('dp_percent')
            ->distinct()
            ->pluck('dp_percent')
            ->toArray();
    }

    public function updatedDp()
    {
        $this->tenors = [12, 24, 36, 48, 60];
    }

    public function updatedTenor()
    {
        $program = CreditProgram::where(
            'credit_car_id',
            $this->car_id
        )
            ->where(
                'leasing_id',
                $this->leasing_id
            )
            ->first();

        if (!$program) {
            return;
        }

        $installment = CreditInstallment::where(
            'credit_program_id',
            $program->id
        )
            ->where(
                'dp_percent',
                $this->dp
            )
            ->where(
                'tenor',
                $this->tenor
            )
            ->first();

        $this->installment = $installment?->installment;
    }

    public function render()
{
    return view(
        'livewire.credit-simulation-page'
    );
}
}