<?php

namespace App\Http\Services\ListOfDictation;

use App\Dictation;
use App\ListOfDictation;
use App\User;
use Illuminate\Support\Facades\Auth;

class Service
{
   public function store($data)
   {
            $dict = ListOfDictation::create($data);
            $dict->save();
            $users = User::all();
            foreach ($users as $user) {
                  $user->isWritted = 0;
                  $user->save();
                  
            }
            
   }


}
