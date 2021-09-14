<?php

namespace App\Http\Controllers;

use App\Models\NewsHeader;
use Illuminate\Http\Request;

class NewsHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novedades = NewsHeader::where("active",1)->get();
        return view("novedades.index",compact("novedades"));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsHeader  $newsHeader
     * @return \Illuminate\Http\Response
     */
    public function show(NewsHeader $newsHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsHeader  $newsHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsHeader $newsHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsHeader  $newsHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsHeader $newsHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsHeader  $newsHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsHeader $newsHeader)
    {
        //
    }
}
