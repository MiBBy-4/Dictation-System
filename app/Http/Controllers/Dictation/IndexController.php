<?php

namespace App\Http\Controllers\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Filters\ListOfDictationFilter;
use App\ListOfDictation;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $date = Carbon::now();
        // $year = $date->year();
        // $day = $date->day();
        // $moth = $date->month();
        $date = date('Y M d');
        $now = Carbon::now();
        $dict = ListOfDictation::where('status', '1')->where('date_of_start', '<', $now)->where('date_of_end', '>', $now)->get()->last();
        
        $url = ListOfDictation::where('status', 1)->get()->last()->url;
        
        return view('dict.index', compact('date', 'url', 'dict'));
        
    }
}
