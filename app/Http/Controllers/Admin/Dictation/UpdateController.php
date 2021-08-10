<?php

namespace App\Http\Controllers\Admin\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dictation\BaseController;
use App\Http\Requests\ListOfDictation\UpdateRequest;
use App\ListOfDictation;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, ListOfDictation $dict)
    {
        $data = $request->validated();
        $this->service->update($dict, $data);
        return redirect()->route('admin.dictation.show', $dict->id);
    }
}
