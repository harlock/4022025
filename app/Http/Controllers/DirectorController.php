<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    // Muestra directores
    public function index()
    {
        $directores = Director::all();
        return view('directores.index', compact('directores'));
    }
}
