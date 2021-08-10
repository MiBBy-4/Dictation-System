<?php

namespace App\Http\Controllers\Admin\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ListOfDictation;

class EditController extends Controller
{
    public function __invoke(ListOfDictation $dict)
    {
        return view('admin.edit', compact('dict'));
    }
}
