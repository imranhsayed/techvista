<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index( Request $request ) {
		$query = Train::query();

		if ( $request->has( 'search' ) ) {
			$search = $request->input( 'search' );
			$query->where( function ( $q ) use ( $search ) {
				$q->where( 'name', 'LIKE', "%{$search}%" )
				  ->orWhere( 'short_description', 'LIKE', "%{$search}%" )
				  ->orWhere( 'description', 'LIKE', "%{$search}%" );
			} );
		}

		$trains = $query->latest('id')->get();
		$title  = "Trains!";

		return view( 'admin/index', compact( 'title', 'trains' ) );
	}

	/**
	 * Show the form for creating a new train.
	 */
	public function create() {
		$title = "Create Train";

		return view( 'admin/create', compact( 'title' ) );
	}

	/**
	 * Store a newly created train in storage.
	 */
	public function store( Request $request ) {
		$request->validate( [
			'name'              => 'required',
			'short_description' => 'required',
			'description'       => 'required',
			'started_on'        => 'required',
			'cost'              => 'required',
			'speed'             => 'required',
			'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		] );

		$train                    = new Train();
		$train->name              = $request->name;
		$train->short_description = $request->short_description;
		$train->description       = $request->description;
		$train->started_on        = $request->started_on;
		$train->cost              = $request->cost;
		$train->speed             = $request->speed;

		if ( $request->hasFile( 'image' ) ) {
			$file     = $request->file( 'image' );
			$filename = time() . '.' . $file->getClientOriginalExtension();
			$file->move( public_path( 'images' ), $filename );
			$train->image = $filename;
		} else {
			// Set the flash message for missing image
			session()->flash( 'error', 'You must upload an image.' );

			return redirect()->route( 'TrainCreate' )->withInput();
		}

		$train->save();

		// Set the flash message
		session()->flash( 'success', 'Train created successfully!' );

		return redirect()->route( 'list' );
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit( string $id ) {
		$post  = Train::find( $id );
		$title = "Edit Post";

		return view( 'admin/edit', compact( 'post', 'title' ) );
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update( Request $request, $id ) {
		$request->validate( [
			'name'              => 'required',
			'short_description' => 'required',
			'description'       => 'required',
			'started_on'        => 'required',
			'cost'              => 'required',
			'speed'             => 'required',
			'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		] );

		$train                    = Train::findOrFail( $id );
		$train->name              = $request->name;
		$train->short_description = $request->short_description;
		$train->description       = $request->description;
		$train->started_on        = $request->started_on;
		$train->cost              = $request->cost;
		$train->speed             = $request->speed;

		if ( $request->image ) {
			// Delete the old image if it exists
			if ( $train->image && file_exists( public_path( 'images/' . $train->image ) ) ) {
				unlink( public_path( 'images/' . $train->image ) );
			}

			$file     = $request->file( 'image' );
			$filename = time() . '.' . $file->getClientOriginalExtension();
			$file->move( public_path( 'images' ), $filename );
			$train->image = $filename;
		}

		$train->save();

		// Set the flash message
		session()->flash( 'success', 'Train updated successfully!' );

		return redirect()->route( 'list' );
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy( string $id ) {
		$train = Train::findOrFail( $id );
		$train->delete();

		// Set the flash message
		session()->flash( 'success', 'Train deleted successfully!' );

		return redirect()->route( 'list' );
	}
}
