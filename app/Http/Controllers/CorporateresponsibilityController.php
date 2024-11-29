<?php

namespace App\Http\Controllers;

use App\Models\CorporateResponsibility;
use Illuminate\Http\Request;

class CorporateresponsibilityController extends Controller
{
    public function corporateresponsibilities()
    {
        $corp = CorporateResponsibility::orderBy('id', 'asc')->get();
        return view('corporateresponsibilities', ['corp' => $corp]);
    }
}
