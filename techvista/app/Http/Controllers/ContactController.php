<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $title = "Contact!";

        return view('contact', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[0-9]{7,15}$/'],
            'message' => ['required', 'string', 'max:2000', 'regex:/^[\w\s\.,!?\-]*$/'],
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->message = $request->message;

        $inquiry->save();

        // Set the flash message
        session()->flash('success', 'Inquiry created successfully!');

        return redirect()->route('thank-you');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact) {
        //
    }
}
