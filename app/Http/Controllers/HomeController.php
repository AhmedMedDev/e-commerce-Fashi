<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = DB::table('categories')
        ->join('products','categories.id','products.category_id')
        ->get();


        return view('home',
        [
            'products'      => $products,
            'offers'        => DB::table('offers')->get(),
            'posts'         => DB::table('posts')->limit(3)->get(),
        ]);
    }
}
