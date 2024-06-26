<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsRequest;
use App\Models\Insurance;
use App\Models\cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->authorizeResource(cars::class, 'cars');

    }

    public function index()
    {
        $user = auth()->user();

        if ($user->type === null) {
            $cars = cars::where('user_id', $user->id)->get();
        } else {
            $cars = cars::all()->filter(function ($car) {
                return $this->authorize('view', $car);
            });
        }
        $Insurance = Insurance::all();

        return view('cars.index', compact('cars', 'Insurance'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create', [
            'Insurance'=>Insurance::all()
        ]);
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(CarsRequest $request)
    {
        $cars=cars::create($request->all());
        $cars->save();
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cars $car)
    {
        return view('cars.edit', [
            'cars'=>$car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, cars $car)
    {
            $request->validate([
                'reg_number' => 'required|string',
                'brand' => 'required|string',
                'model' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $car->reg_number = $request->input('reg_number');
            $car->brand = $request->input('brand');
            $car->model = $request->input('model');

            if ($request->hasFile('image')) {
                if ($car->image) {
                    Storage::delete('public/' . $car->image);
                }

                $imagePath = $request->file('image')->store('public/cars');
                $car->image = str_replace('public/', '', $imagePath);
            }

            $car->save();
            return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cars $cars)
    {
        $cars->delete();
        return redirect()->route('cars.index');
    }
}
