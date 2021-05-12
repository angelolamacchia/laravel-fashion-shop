<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function products() {
        $products = Dress::all();

        $data = [
            'products'=>$products
        ];

        return view('pages.products', $data);
    }

}
