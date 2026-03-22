<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $trains = Train::where('orario_partenza', '>=', $today)
            ->orderBy('orario_partenza', 'asc')
            ->get();

        return view('index', compact('trains'));
    }
}
