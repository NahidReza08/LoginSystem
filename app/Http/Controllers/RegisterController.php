<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    //
    public function registerPage()
    {
        return view('auth/register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => new Captcha(),
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=password_hash($request->password, PASSWORD_DEFAULT);
        
        //return response()->json($data);
        $user = DB::table('users')->insert($data);
        if($user){
            return redirect('./login_page');
        }else{
            return Redirect()->back()->with('error','Something Went Wrong!!!');
        }
    }

}
