<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galaxy;

class GalaxyController extends Controller
{
    public function index()
    {
        $galaxies = Galaxy::all();
        return view('galaxies.index', compact('galaxies'));
    }
}
