<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $cars = cars::all()->toArray();
        $Insurance = Insurance::all()->toArray();

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
    public function store(Request $request)
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
        $car->update($request->all());
        $car->save();
        return redirect()->route('cars.index');
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
