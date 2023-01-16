<?php

namespace App\Http\Controllers;

use App\Models\Cartoon;
use Illuminate\Http\Request;

class CartoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartoons = Cartoon::paginate(10);

        return view('cartoons.index', compact('cartoons'));
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
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function show(Cartoon $cartoon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartoon $cartoon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartoon $cartoon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartoon $cartoon)
    {
        $cartoon->delete();

        return redirect()->route('cartoons.index')->with('deleted', "$cartoon->title è stato eliminato correttamente");
    }
}
