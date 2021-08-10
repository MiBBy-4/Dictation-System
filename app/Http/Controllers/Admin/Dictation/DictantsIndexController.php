<?php

namespace App\Http\Controllers\Admin\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Filters\DictationFilter;
use App\Http\Requests\Post\FilterRequest;
use App\ListOfDictation;

class DictantsIndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(DictationFilter::class, ['queryParams' => array_filter($data)]);
        $dicts = ListOfDictation::filter($filter)->paginate(5);
        return view('admin.dictIndex', compact('dicts'));
    }
}
