<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('item.create');
    }

    public function store()
    {
        
    }
}
