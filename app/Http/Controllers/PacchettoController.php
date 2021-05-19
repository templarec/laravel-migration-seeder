<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacchetto;
class PacchettoController extends Controller
{
    public function index() {
        $pacchetti = pacchetto::all();
        return view('home', compact('pacchetti'));
    }
}
