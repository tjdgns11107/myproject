<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordsController extends Controller
{
    // public function __construct() {
    //     $this->middleware('guest');
    // }

    // public function getRemind() {
    //     return view('passwords.remind');
    // }

    // public function postRemind(Request $request) {
    //     $this->validator($request, ['email'=>'request|email|exists:users']);

    //     $email = $request->get('email');
    //     $token = str_random(64);

    //     \DB::table('password_resets')->insert([
    //         'email' => $email,
    //         'token' => $token,
    //         'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    //     ]);
        
    //     return redirect('/');

    // }
}
