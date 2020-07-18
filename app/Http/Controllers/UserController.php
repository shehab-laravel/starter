<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public  function  getIndex()
{
    $obj=new \stdClass();
    $obj->name='shehap';
   // return view('about',compact('obj') );
    return view('about' )-> with('name','shehap');
}
}
