<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Creature = Creature::all();
        return view('dashboard.index', compact('Creature'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'origin' => 'required|string|max:255',
            'power_level' => 'required|numeric|min:0',
            'element' => 'required|string|max:255',
        ]);

        Creature::create([
            'name' => $request->name,
            'origin' => $request->origin,
            'power_level' => $request->power_level,
            'element' => $request->element,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Mythical Creature successfully added.');
    }
}

