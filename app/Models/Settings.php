<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_switch',
        'avatar',
        'logo',
        'short_info',
        'about_me_image',
        'about_me',
        'email',
        'site_name',
        'resume',
        'show_projects'
    ];

}
