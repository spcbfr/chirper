<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class ChirpController extends Controller
{
    //
    public function index(): View {

        return view('chirps', [
            //
        ]);
    }

}
