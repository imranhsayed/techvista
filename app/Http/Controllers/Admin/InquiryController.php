<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(Request $request)
    {
        $title = "Inquiries!";
        $inquiries = Inquiry::all(); 

        return view('admin.index', compact('title', 'inquiries'));
    }

    public function create()
    {
        $title = "Create Inquiry";

        return view('admin.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[0-9]{7,15}$/'],
            'message' => ['required', 'string', 'max:2000', 'regex:/^[\w\s\.,!?\-]*$/'],
        ]);

        Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        session()->flash('success', 'Inquiry created successfully!');
        return redirect()->route('thank-you');
    }

    public function edit($id)
    {
        $post = Inquiry::find($id);
        $title = "Edit Post";

        return view('admin.edit', compact('post', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $inquiry = Inquiry::findOrFail($id);
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->message = $request->message;

        $inquiry->save();

        session()->flash('success', 'Inquiry updated successfully!');
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry updated successfully!');

    }

    public function destroy($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();

        session()->flash('success', 'Inquiry deleted successfully!');

        //return redirect()->route('list');
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry updated successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $inquiry = Inquiry::findOrFail($id);
        $inquiry->status = $request->status;
        $inquiry->save();

        session()->flash('success', 'Status updated successfully!');
        //return redirect()->route('list');
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry updated successfully!');
    }

    public function updateNotes(Request $request, $id)
    {
        $request->validate([
            'notes' => 'nullable|string|max:2000',
        ]);

        $inquiry = Inquiry::findOrFail($id);
        $inquiry->notes = $request->notes;
        $inquiry->save();

        session()->flash('success', 'Notes updated successfully!');
        //return redirect()->route('list');
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry updated successfully!');
    }
}
