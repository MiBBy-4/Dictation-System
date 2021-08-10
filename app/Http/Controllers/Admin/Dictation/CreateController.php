<?php

namespace App\Http\Controllers\Admin\Dictation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\ListOfDictation;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(ListOfDictation $dict, FilterRequest $request)
    {
        $data = $request->validated();
        return view('admin.create');
    }
}
