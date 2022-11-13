<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UrdanController extends Controller
{

    public function index()
    {
        return view('front.home.index');
    }


}
