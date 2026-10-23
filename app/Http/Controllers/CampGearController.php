<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampGear;

class CampGearController extends Controller
{
    public function index()
    {
        $gears = CampGear::all();
        return view('gears.index', compact('gears'));
    }

    // Halaman Detail Produk
    public function show($id)
    {
        $gear = CampGear::findOrFail($id);
        return view('gears.show', compact('gear'));
    }
}