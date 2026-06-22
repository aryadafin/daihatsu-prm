<?php

namespace App\Http\Controllers;

use App\Models\Branch;

class ContactController extends Controller
{
    public function index()
    {
        $branches = Branch::where(
                'is_active',
                true
            )
            ->orderBy('sort_order')
            ->get();

        return view(
            'front.contact',
            compact('branches')
        );
    }
}