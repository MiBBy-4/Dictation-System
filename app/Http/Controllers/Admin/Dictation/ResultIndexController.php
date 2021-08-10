<?php

namespace App\Http\Controllers\Admin\Dictation;

use App\Dictation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Filters\DictationFilter;
use App\Http\Filters\QueryFilter;
use App\Http\Filters\ResultFilter;
use App\Http\Filters\UserFilter;
use App\Http\Requests\Post\FilterRequest;
use App\ListOfDictation;
use App\User;

class ResultIndexController extends Controller
{
    public function __invoke(UserFilter $userRequest, ResultFilter $resultFilter)
    {
        $users = User::filter($userRequest)->paginate(5);
        if(!$users->isEmpty()){
            $dicts = Dictation::all();
        }else{
            $dicts = Dictation::filter($resultFilter)->paginate(5);
            $users = User::all();
            $users = User::paginate(5);
        }
        
        $lists = ListOfDictation::all();
        return view('admin.resultIndex', compact('users', 'dicts', 'lists'));
    }
}
