<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Requirement;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Requirements                                
        $requirements = Requirement::where('status', '1')
                        ->orderBy('title', 'asc')
                        ->get();

        return view('requirement', compact('requirements'));
    }
}
