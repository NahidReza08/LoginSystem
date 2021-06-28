<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();
        //$user = (array)$user;

        $verify = password_verify($request->password, $user->password);

        if($verify){
            $user = (array)$user;
            //return $user;
            return view('lander.successful_login')->with('user',$user);
        }
        else{
            return view('lander.unsuccessful_login');
        }

    }


    public function logout(){
        //return "Logout";
        return redirect('./');
    }

}
