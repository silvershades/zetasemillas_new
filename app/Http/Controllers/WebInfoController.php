<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WebInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g = Product::where("tipo", "GIRASOL")->get();
        $g_count = Product::where("tipo", "GIRASOL")->count();
        $s = Product::where("tipo", "SORGO")->get();
        $s_count = Product::where("tipo", "SORGO")->count();
        $m = Product::where("tipo", "MAIZ")->get();

        $m_count = Product::where("tipo", "MAIZ")->count();

        $prods = Product::where("active", "1")->get();
        $textos = DB::table('web_infos')->first();
        return view("public.index", compact(
            'g',
            'g_count',
            's',
            's_count',
            'm',
            'm_count',
        'prods',
            "textos"
        ));
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
     * @param \App\Models\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function show(WebInfo $webInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(WebInfo $webInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebInfo $webInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\WebInfo $webInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebInfo $webInfo)
    {
        //
    }
}
