<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Fetch project-related information for the logged-in user

        return view('client-dashboard', compact('user'));
    }
}
