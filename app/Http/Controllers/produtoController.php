<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        return view("home", $data);
    }
    public function categoria(Request $request)
    {
        $data = [];
        return view("Categoria", $data);
    }
}
