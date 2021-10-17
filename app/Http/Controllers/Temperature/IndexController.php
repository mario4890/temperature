<?php

namespace App\Http\Controllers\Temperature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showForm()
    {
        return view('Temperature.form');
    }
}
