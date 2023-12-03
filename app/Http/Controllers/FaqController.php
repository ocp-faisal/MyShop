<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use view;
class FaqController extends Controller
{
    public function groupIndex()
    {
        return view('group.index');
    }
}
