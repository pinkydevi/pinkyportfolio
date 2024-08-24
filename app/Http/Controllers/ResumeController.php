<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    //
    function page(Request $request)
    {
        return view('pages.resume');

    }
    function resumeLink(Request $request)
    {
     
        return DB::table('resume')->first();
    }
    function experienceData(Request $request)
    {
        return DB::table('experience')->get();
        
    }
    function educationData(Request $request)
    {
        return DB::table('education')->get(); 
    }
    function skillsData(Request $request)
    {
        return DB::table('skills')->get();
    }
    function languagesData(Request $request)
    {
        return DB::table('languages')->get();
    }
}
