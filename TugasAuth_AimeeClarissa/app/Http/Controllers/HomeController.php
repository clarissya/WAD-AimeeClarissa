<?php

// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data bunga dari database
        $Creature = Creature::all();

        // Menampilkan view dengan data bunga
        return view('welcome', compact('Creature'));
    }
}
