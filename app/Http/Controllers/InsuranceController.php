<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsuranceRequest;
use http\Client;
use Illuminate\Http\Request;
use App\Models\Insurance;


class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insurances = Insurance::all()->toArray();
        return view('client.index', compact('insurances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('client.create');
    }

    public function store(InsuranceRequest $request)
    {
//        $this->validate($request,[
//            'name' => 'required',
//            'surname' => 'required',
//            'email' => 'required',
//            'phone' => 'required',
//            'address' => 'required'
//        ]);
        $insurance = new Insurance([
            'name' => $request ->get('name'),
            'surname' => $request ->get('surname'),
            'email' => $request ->get('email'),
            'phone' => $request ->get('phone'),
            'address' => $request ->get('address')
        ]);
        $insurance->save();
        return redirect()->route('client.create')->with('success',
        'Data Added');
    }



    public function edit($id)
    {
        $insurances = Insurance::find($id);
        return view('client.edit', compact('insurances', 'id'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $insurance = Insurance::findOrFail($id);

        $insurance->name = $request->input('name');
        $insurance->surname = $request->input('surname');
        $insurance->email = $request->input('email');
        $insurance->phone = $request->input('phone');
        $insurance->address = $request->input('address');

        $insurance->save();

        return redirect()->route('client.index')->with('success', 'updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $insurance = Insurance::findOrFail($id);
        $insurance->delete();
        return redirect()->route('client.index')->with('success', 'deleted');
    }
}
