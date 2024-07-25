<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index( Request $request ) {
		$title = "Inquiries!";

		return view( 'admin/index', compact( 'title' ) );
	}

	/**
	 * Show the form for creating a new train.
	 */
	public function create() {
		$title = "Create Inquiry";

		return view( 'admin/create', compact( 'title' ) );
	}

	/**
	 * Store a newly created train in storage.
	 */
	public function store( Request $request ) {
		$request->validate( [
			'name'    => 'required',
			'email'   => 'required',
			'phone'   => 'required',
			'message' => 'required',
		] );

		$inquiry          = new Inquiry();
		$inquiry->name    = $request->name;
		$inquiry->email   = $request->email;
		$inquiry->phone   = $request->phone;
		$inquiry->message = $request->message;

		$inquiry->save();

		// Set the flash message
		session()->flash( 'success', 'Inquiry created successfully!' );

		return redirect()->route( 'thank-you' );
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit( string $id ) {
		$post  = Inquiry::find( $id );
		$title = "Edit Post";

		return view( 'admin/edit', compact( 'post', 'title' ) );
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update( Request $request, $id ) {
		$request->validate( [
			'name'    => 'required',
			'email'   => 'required',
			'phone'   => 'required',
			'message' => 'required',
		] );

		$inquiry          = Inquiry::findOrFail( $id );
		$inquiry->name    = $request->name;
		$inquiry->email   = $request->email;
		$inquiry->phone   = $request->phone;
		$inquiry->message = $request->message;

		$inquiry->save();

		// Set the flash message
		session()->flash( 'success', 'Inquiry updated successfully!' );

		return redirect()->route( 'list' );
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy( string $id ) {
		$inquiry = Inquiry::findOrFail( $id );
		$inquiry->delete();

		// Set the flash message
		session()->flash( 'success', 'Inquiry deleted successfully!' );

		return redirect()->route( 'list' );
	}
}
