<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Seo;
use MetaTag;
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
        $seo = Seo::find(1);
        $settings = Settings::find(1);
        MetaTag::set('title', $seo->basic_title);
        
        MetaTag::set('description', $seo->basic_description);
        

        MetaTag::set('card', 'fdsa');
        
        return view('index', ['settings' => $settings, 'seo' => $seo] );
    }

    public function admin()
    {
        return view('auth/login');
    }
}
 //gg 