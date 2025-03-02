<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {

    // Create Contact Form
    public function index(Request $request) {
        return view('frontend.content.pages.index');
    }

    // Store Contact Form data
    public function store(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->only("name",'email','phone','subject','message'));

        session()->flash('success', 'We have received your message and would like to thank you for writing to us.');
//        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}
