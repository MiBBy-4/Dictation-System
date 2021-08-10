<?php

namespace App\Http\Controllers\Dictation;

use App\Dictation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Support\Facades\Auth;

class ShowController extends BaseController
{
    public function __invoke()
    {
        $dictations = Dictation::all();
        $dict = $dictations->where('user_id',' =' ,Auth::user()->id);
        return view('dict.show', compact('dict'));
    }
}
