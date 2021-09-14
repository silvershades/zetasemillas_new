<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $girasoles = Product::where("tipo", "GIRASOL")->where("active",1)->get();
        $sorgos = Product::where("tipo", "SORGO")->where("active",1)->get();
        $maices = Product::where("tipo", "MAIZ")->where("active",1)->get();
        return view("productos.index", compact('girasoles', 'sorgos', 'maices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("productos.show", compact('product'));
    }

    public function showcase(Request $request)
    {
        $productos = '';
        $tipo = request("tipo");
        if ($tipo != '') {
            switch ($tipo) {
                case 1:
                {
                    $productos = Product::where("tipo", "GIRASOL")->where("active",1)->get();
                    return view("productos.showcase_girasol", compact('productos'));
                    break;
                }
                case 2:
                {
                    $productos = Product::where("tipo", "SORGO")->where("active",1)->get();
                    return view("productos.showcase_sorgo", compact('productos'));
                    break;
                }
                case 3:
                {
                    $productos = Product::where("tipo", "MAIZ")->where("active",1)->get();
                    return view("productos.showcase_maiz", compact('productos'));
                    break;
                }
                default:
                {
                    $productos = Product::where("tipo", "GIRASOL")->where("active",1)->get();
                    return view("productos.showcase_girasol", compact('productos'));
                }
            }
        }else{
            return redirect()->back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
