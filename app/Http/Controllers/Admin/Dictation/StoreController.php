<?php

namespace App\Http\Controllers\Admin\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ListOfDictation\StoreRequest;
use App\ListOfDictation;
use App\User;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, ListOfDictation $dict)
    {
        // $users = User::all();
        // foreach ($users as $user) {
        //     # code...
        // }
        $data = $request->validated();
        $this->service->store($data);
       
        return redirect()->route('admin.dictations.index');
    }
}
