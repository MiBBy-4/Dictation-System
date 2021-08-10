<?php

namespace App\Http\Controllers\Admin\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Filters\UserFilter;
use App\Http\Requests\Post\FilterRequest;
use App\User;

class IndexController extends Controller
{
    public function __invoke(UserFilter $request)
    {
        $users = User::filter($request)->paginate(5);
        return view('admin.index', compact('users'));
    }
}
