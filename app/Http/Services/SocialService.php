<?php

namespace App\Http\Services;

use App\User;
use Illuminate\Support\Facades\Hash;

class SocialService
{
    public function saveSocialData($user)
    {
        $email = $user->getEmail();
        $name = $user->getName();
        $password = Hash::make('12345678');
        $data = ['email' => $email, 'password' => $password, 'name' => $name];
        $update = User::where('email',$email)->first();

        if($update){

            return $update->fill(['name' => $name]);

        }

        return User::create($data);
    }
}