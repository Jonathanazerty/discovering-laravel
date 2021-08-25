<?php

namespace App\Http\Controllers;

use App\Models\vampire;
use Illuminate\Http\Request;
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
        // TODO: model --> DONE
        // TODO: query
        $vampires = vampire::get();
        // dd($vampires);

        return view('view');
    }

    public function postView (Request $request)
    {
        // Validate the request...

        $vampire = new Vampire;

        $vampire->name = $request->vampire_name;

        $vampire->save();

        return view('view');
    }


    // public function store(Request $request)
    // {
    //     // Validate the request...

    //     $vampire = new Vampire;

    //     $vampire->name = $request->vampire_name;

    //     $vampire->save();
    // }
}
