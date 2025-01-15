<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiStepFormController extends Controller
{
    public function stepOne(Request $request)
    {
        $data = $request->session()->get('stepOneData', []);
        return view('cleaning.multistep.step-one', compact('data'));
    }

    public function postStepOne(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $request->session()->put('stepOneData', $validated);
        return redirect()->route('step.two');
    }

    public function stepTwo(Request $request)
    {
        $data = $request->session()->get('stepTwoData', []);
        return view('cleaning.multistep.step-two', compact('data'));
    }

    public function postStepTwo(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $request->session()->put('stepTwoData', $validated);
        return redirect()->route('confirm');
    }

    public function stepThree(Request $request)
    {
        return view('cleaning.multistep.step-three');
    }

    public function postStepThree(Request $request)
    {
        $stepOneData = $request->session()->get('stepOneData', []);
        $stepTwoData = $request->session()->get('stepTwoData', []);

        // Merge data and store it in the database
        $finalData = array_merge($stepOneData, $stepTwoData);

        // Example: Save to database (assuming a User model)
        // User::create($finalData);

        // Clear the session
        $request->session()->forget(['stepOneData', 'stepTwoData']);

        return redirect()->route('step.one')->with('success', 'Form submitted successfully!');
    }
    public function confirm(Request $request)
{
    // Retrieve all the data from the session
    $stepOneData = $request->session()->get('stepOneData', []);
    $stepTwoData = $request->session()->get('stepTwoData', []);

    return view('cleaning.multistep.confirm', compact('stepOneData', 'stepTwoData'));
}

public function submit(Request $request)
{
    $stepOneData = $request->session()->get('stepOneData', []);
    $stepTwoData = $request->session()->get('stepTwoData', []);

    // Merge all data and store in the database
    $finalData = array_merge($stepOneData, $stepTwoData);

    // Example: Save to database (assuming a User model)
    // User::create($finalData);

    // Clear session data
    $request->session()->forget(['stepOneData', 'stepTwoData']);

    return redirect()->route('step.one')->with('success', 'Form submitted successfully!');
}
}
