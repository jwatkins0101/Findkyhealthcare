<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\physicians_primary_updated;

class MainController extends Controller
{
    Public Function search()
    {
        $spec_des_1 = physicians_primary_updated::lists('spec_des_1')->unique();
        return view('search', compact('spec_des_1'));
    }
    Public Function listings()
    {
        $zipcode = \Request::input('zipcode');
        $spec_des_1 = physicians_primary_updated::lists('spec_des_1')->unique();
        $physicians = physicians_primary_updated::where('zip_1',$zipcode)->get();
        return view('listings', compact('physicians','spec_des_1'));
    }
    Public Function physician($id)
    {

        $spec_des_1 = physicians_primary_updated::lists('spec_des_1')->unique();
        $physician = physicians_primary_updated::where('License_1',$id)->first();
        return view('details', compact('physician','spec_des_1'));
    }
}
