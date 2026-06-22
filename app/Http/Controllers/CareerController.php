<?php

namespace App\Http\Controllers;

use App\Models\Career;

class CareerController extends Controller
{
    public function show()
    {
        $careers = Career::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view(
            'front.careers.show',
            compact('careers')
        );
    }
}