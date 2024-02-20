<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return view('cars.index', ['cars' => $car]);
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'price' => 'required|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('cars', 'public');

            Storage::disk('public')->delete($request->user()->photo ?? '');
        }

        $car = new Car([
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'description' => $request->description,
            'photo' => $imagePath,
            'user_id' => 1,
        ]);

        $car->save();

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $car->fill($request->except('photo'));

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('cars', 'public');

            if ($car->photo) {
                Storage::disk('public')->delete($car->photo);
            }

            $car->photo = $imagePath;
        }

        $car->save();

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil diperbarui.');
    }


    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
