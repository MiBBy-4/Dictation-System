<?php

namespace App\Http\Controllers;

use App\Http\Services\SocialService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function index()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('vkontakte')->user();
        $objSocial = new SocialService;
        if($user = $objSocial->saveSocialData($user)){
            Auth::login($user);
            return redirect()->route('dict.index');    
        }

        return back(400);
        
    }
}
