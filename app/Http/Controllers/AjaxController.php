<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
    public function findAddress()
    {
      return view('ajax.address')->render();
   }
}
