<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::latest()->get();
        $res = [
            'data' => $produk,
            'message' => 'List all posts',
            'success' => true
        ];

        return response()->json($res, 200);
    }

    public function store(){
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

        
    }
}
