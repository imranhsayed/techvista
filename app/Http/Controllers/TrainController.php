<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainRequest;
use App\Http\Requests\UpdateTrainRequest;
use App\Models\Train;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();
		$title = "Lab 2 - Trains";

		return view( 'trains.index', compact( 'title', 'trains' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $train = Train::find( $id );
	    $title = $train->name;
	    return view( 'trains.show', compact( 'title', 'train' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Train $train)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrainRequest $request, Train $train)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Train $train)
    {
        //
    }
}
