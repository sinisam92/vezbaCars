<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
      $cars = Car::all();
      return view('cars', ['cars' => $cars]);
    }
    public function show($id)
    {
      $car = Car::findOrFail($id);

      return view('single', ['car' => $car]);
    }
}
