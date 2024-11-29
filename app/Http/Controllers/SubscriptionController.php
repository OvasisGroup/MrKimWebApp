<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        // Save to the database
        Subscription::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect with success message
        return redirect()->route('thankyou', [
            'name' => $request->name,
            'email' => $request->email,
        ]);
    }
}
