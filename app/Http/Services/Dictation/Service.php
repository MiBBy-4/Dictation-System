<?php

namespace App\Http\Services\Dictation;

use App\Dictation;
use App\ListOfDictation;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Service
{
   public function store($data)
   {
         $date = Carbon::now();
         $userId = Auth::user()->id;
         $dict = Dictation::create($data);
         $dict->user_id = $userId;
         $user = User::find(Auth::id());
         $user->isWritted = 1;
         $var = ListOfDictation::where('status', '1')->where('date_of_start', '<', $date)->where('date_of_end', '>', $date)->get();
         $dict->title = $var->last()->title;
         $user->save();
         $dict->save();
   }

   public function update($dict, $data)
   {

      $dict->update($data);
   }

}
