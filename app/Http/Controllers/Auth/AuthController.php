<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function register(Request $request) {
        try{
            $user = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        }catch(Exception $e){
            echo $e->getMessage();
        }

        User::create($user);

        if(Auth::user()){
            return redirect()->route('getlogin');
        }
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       if(Auth::attempt($credentials)){
        return view('dashboard');
       };
    }
}
