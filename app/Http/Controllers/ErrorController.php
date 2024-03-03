<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    // go to error 404 not found page 
    public function notfoundpage(){
        return view('pages.errors.notfound');
    }

    // go to error 500 server error page 
    public function servererrorpage(){
        return view('pages.errors.servererror');
    }

    // go to error 403 unauthorised page 
    public function unauthorisedpage(){
        return view('pages.errors.unauthorised');
    }
}
