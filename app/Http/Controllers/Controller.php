<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hello ()
    {
        return view('hello');
    }
    public function view ()
    {
        return view('view');
    }

    public function postView ()
    {
        dd(request()->input('vampire_name'));
        return view('view');
    }
}
