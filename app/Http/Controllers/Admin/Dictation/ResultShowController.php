<?php

namespace App\Http\Controllers\Admin\Dictation;

use App\Dictation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ResultShowController extends Controller
{
    public function __invoke(User $user)
    {
        $dicts = Dictation::where('user_id', $user->id)->get();
        return view('admin.ShowResult', compact('dicts', 'user'));
    }
}
