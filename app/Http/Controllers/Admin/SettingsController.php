<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::find(1);
        $skills = Skill::all();
        $socials = Social::all();
        return view('admin.settings', [
        'settings' => $settings, 
        'skills' => $skills,
        'socials' => $socials
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasFile('profilepicture')) {
            $settings = Settings::find(1);
            $filename =  $request->profilepicture->getClientOriginalName();

           
            
            
            if($settings->avatar) {
               Storage::delete('/public/images/'.$settings->avatar);
            }
            $request->profilepicture->storeAs('images', $filename, 'public');
            $settings->update(['avatar' => $filename]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changelogo(Request $request)
    {
        if($request->hasFile('logo')) {
            $settings = Settings::find(1);
            $filename =  $request->logo->getClientOriginalName();

            if($settings->logo) {
               Storage::delete('/public/images/'.$settings->logo);
            }
            $request->logo->storeAs('images', $filename, 'public');
            $settings->update(['logo' => $filename]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function shortinfo(Request $request) 
    {
        $settings = Settings::find(1);
        $settings->update(['short_info' => $request->short_info]);
        return redirect()->back();
    }

    public function changeAboutMeImage(Request $request)
    {
        
        if($request->hasFile('aboutmeimage')) {
            $settings = Settings::find(1);
            $filename =  $request->aboutmeimage->getClientOriginalName();

            if($settings->about_me_image) {
               Storage::delete('/public/images/'.$settings->about_me_image);
            }
            $request->aboutmeimage->storeAs('images', $filename, 'public');
            $settings->update(['about_me_image' => $filename]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function aboutMe(Request $request)
    {
        $settings = Settings::find(1);
        $settings->update(['about_me' => $request->about_me]);
        return redirect()->back();
    }

    public function email(Request $request)
    {
        $settings = Settings::find(1);
        $settings->update(['email' => $request->email]);
        return redirect()->back();
    }

    public function skill(Request $request)
    {
        $skills = new Skill;



        if($request->hasFile('skill_image')) {
            

            $filename =  $request->skill_image->getClientOriginalName();

            // if($skills->skill_image) {
            //    Storage::delete('/public/images/'.$skills->skill_image);
            // }
            $request->skill_image->storeAs('images', $filename, 'public');
            $skills->create([
                'skill_image' => $filename,
                'skill' => $request->skill
            ]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


    public function deleteSkill(Request $request, $id)
    {
        $skill = Skill::find($id);

        if($skill->skill_image) {
               Storage::delete('/public/images/'.$skill->skill_image);
            }

        $skill->delete();

        return redirect()->back();
    }

    public function social(Request $request)
    {
        $social = new Social;

        $social->create([
            'name' => $request->name,
            'url' => $request->url,
            'icon' => $request->icon
        ]);

        return redirect()->back();
    }

    public function deleteSocial(Request $request, $id)
    {
        $social = Social::find($id);

        // if($skill->skill_image) {
        //        Storage::delete('/public/images/'.$skill->skill_image);
        //     }

        $social->delete();

        return redirect()->back();
    }

    public function siteName(Request $request)
    {
        $settings = Settings::find(1);
        $settings->update(['site_name' => $request->site_name]);
        return redirect()->back();
    }

    public function resume(Request $request)
    {
        $settings = Settings::find(1);
        $settings->update(['resume' => $request->resume]);
        return redirect()->back();
    }


}
