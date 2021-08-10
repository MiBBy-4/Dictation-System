<?php

namespace App\Http\Controllers\Admin\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.showUser', compact('user'));
    }
}
