<?php

namespace App\Http\Controllers\Dictation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Dictation\Service;

class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
