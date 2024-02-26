<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // contact form submission 

    public function save_submission(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'body' => 'required|email|max:255' 
        ]);

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $body = $request->input('body');

        $math_one = $request->input('math_one');
        $math_two = $request->input('math_two');
        
        $solution = $request->input('solution');

        $answer = $math_one + $math_two; 

        if(intval($answer) !== intval($solution)){
            return back()->with(['error'=>"Sorry answer to equation is not correct"]);
        }
        
        $save_contact = Contact::create([
            'fullname' => $fullname,
            'email' => $email,
            'body' => $body
        ]);

        if(!$save_contact){
            return back()->with(['error'=>"Sorry message could not be sent"]);
        }

        return back()->with(['success'=>"Message sent successfully"]);
    }
}
