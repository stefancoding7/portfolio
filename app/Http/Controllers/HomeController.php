<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = Settings::find(1);
        return view('index', ['settings' => $settings] );
    }

    public function admin()
    {
        return view('auth/login');
    }
}
 //gg 