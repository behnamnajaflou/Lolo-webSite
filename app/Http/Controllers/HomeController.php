<?php

namespace App\Http\Controllers;

use App\Models\Products;


class HomeController extends Controller
{
    public function index()
    {
        //$allProducts = ['Server', 'Database', 'Network', 'Automation', 'Analytics', 'Storage'];
        $allProducts = Products::all();
        return view('index', ['producs' => $allProducts]);
    }
}
