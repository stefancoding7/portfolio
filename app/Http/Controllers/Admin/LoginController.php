<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    function index()
    {
        return view('admin.login.index');
    }

    



   function login(Request $request) 
   {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('auth/admin')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
   }

   // use for while

   public function registration()
   {
       return view('admin.login.registration');
   }

   public function customRegistration(Request $request)
   {  
       $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:6',
       ]);
          
       $data = $request->all();
       $check = $this->create($data);


       Settings::create([
           'site_switch' => true
       ]);
        
       return redirect("auth/admin")->withSuccess('You have signed-in');
   }


   public function create(array $data)
   {
     return User::create([
       'name' => $data['name'],
       'email' => $data['email'],
       'password' => Hash::make($data['password'])
     ]);
   }   



   
}
