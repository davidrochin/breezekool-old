<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $message = $request->input('message');

        $email = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'city' => $city,
            'message' => $message
        ];

        Mail::send(new ContactMail($email));

        return redirect('/');

        /*dd([$name, $email, $phone, $city, $message]);

    	return view('auth.nopermission', [
    		'permissionMessage' => 'Esta página está pendiente.',
    	]);*/
    }
}
