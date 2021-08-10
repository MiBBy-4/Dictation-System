<?php

namespace App\Http\Controllers\Admin\Dictation;

use App\Http\Controllers\Controller;
use App\Http\Services\ListOfDictation\Service;
class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}