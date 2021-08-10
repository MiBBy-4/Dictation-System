<?php

namespace App\Http\Controllers\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ListOfDictation;
use Carbon\Carbon;

class ActiveShowController extends BaseController
{
    public function __invoke()
    {
        
        $date = Carbon::now();
        $dict = ListOfDictation::where('status', '1')->where('date_of_start', '<', $date)->where('date_of_end', '>', $date)->get()->last();
        return view('dict.activeshow', compact('dict', 'date'));
    }
}
