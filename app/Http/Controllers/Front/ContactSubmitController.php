<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class ContactSubmitController extends Controller
{
    public function addContact(Request $request){
        if($request->ajax()){
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'phone' => 'required|max:20',
                'email' => 'required|email|max:255',
                'subject' => 'required|max:255',
                'message' => 'required',
            ]);

            $contact = ContactSubmit::create($validatedData);

            return response()->json(['status' => 'success']);
        }
    }
}
