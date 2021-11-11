<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

use App\Models\Skill;
use App\Models\Social;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = Settings::find(1);
        return response()->json($profile);
    }

    public function skills()
    {
        $skills = Skill::all();
        return response()->json($skills);
    }

    public function socials()
    {
        $socials = Social::all();
        return response()->json($socials);
    }
}
