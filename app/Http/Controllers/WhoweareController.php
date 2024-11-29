<?php

namespace App\Http\Controllers;

use App\Models\WhoWeAre;
use App\Models\Mission;
use App\Models\WhatSetsUsApart;
use App\Models\Expertise;
use Illuminate\Http\Request;

class WhoweareController extends Controller
{
    public function whoweare()
    {
        $whoweare = WhoWeAre::orderBy('id', 'asc')->get();
        $mission = Mission::orderBy('id', 'asc')->get();
        $what = WhatSetsUsApart::orderBy('id', 'asc')->get();
        $expertise = Expertise::orderBy('id', 'asc')->get();

        return view('whoweare', ['mission' => $mission, 'whoweare' => $whoweare, 'what' => $what, 'expertise' => $expertise]);
    }
}
