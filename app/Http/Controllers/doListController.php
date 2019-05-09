<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doListController extends Controller
{
    public function index(){

        return view('dolist.index');

    }
}
