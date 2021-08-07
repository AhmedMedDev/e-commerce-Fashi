<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('categories')
        ->join('products','categories.id','products.category_id')
        ->get();

        return view('theme.shop',
        [
            'products'      => $products,
            'offers'        => DB::table('offers')->get(),
            // 'categories'    => DB::table('categories')->get(),
        ]);
    }

}
