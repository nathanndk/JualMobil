<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class DashboardController extends Controller
{
    public function index()
    {

        $cars = Car::all();

        return view('dashboard', ['cars' => $cars]);
    }
}
