<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = Settings::find(1);
        return response()->json($profile);
    }
}
