<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    
    public function index()
    {
        //
    }

    //create new car
    public function create(Request $request)
    {
        // taking the values from the form in index.blade.php name=''
        $make= $request['make'];
        $model= $request['model'];
        $produced_on= $request['produced_on'];

        $car= new Car();
        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;

        $car->save();
        return redirect()->back()->with('success', ['your message,here']);  
    }
    
    //show all cars
    public function show()
    {
        $cars= Car::all();
        return view('index',['cars'=>$cars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}