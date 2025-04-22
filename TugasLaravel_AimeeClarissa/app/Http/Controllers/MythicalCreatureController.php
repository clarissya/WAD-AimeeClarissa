<?php

namespace App\Http\Controllers;

use App\Models\MythicalCreature;
use Illuminate\Http\Request;

class MythicalCreatureController extends Controller
{
    public function index()
    {
        $creatures = MythicalCreature::all();
        return view('mythical_creatures.index', compact('creatures'));
    }
}
