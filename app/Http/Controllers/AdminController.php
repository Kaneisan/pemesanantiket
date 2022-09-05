<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class AdminController extends Controller
{
    public function index()
    {
        $tikets = Tiket::all();
        return view('home', compact('tikets'));
        // return $tikets;
        
    }

    public function update(){

    }

    public function delete(){

    }

}
