<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class SAController extends Controller
{
    function index(){
        Alert::alert('title', 'Message', 'Type');
        return view('sweetalert');

    }
}
