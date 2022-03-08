<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    public function show(Study $study)
    {
        return view('studies/show')->with(['study' => $study]);
    }
}
