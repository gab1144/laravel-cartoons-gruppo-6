<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartoonRequest;
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
        // $cartoons = Cartoon::all();

        return view('cartoons.index', compact('cartoons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cartoons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartoonRequest $request)
    {
        $form_data=$request->all();
        $new_cartoon=new Cartoon();
        // $new_cartoon->title=$form_data['title'];
        $new_cartoon->slug=Cartoon::generateSlug($new_cartoon->title);
        // $new_cartoon->year = $form_data['year'];;
        // $new_cartoon->creator = $form_data['creator'];;
        // $new_cartoon->rating = $form_data['rating'];;
        // $new_cartoon->genre = $form_data['genre'];;
        // $new_cartoon->runtime_in_minutes = $form_data['runtime_in_minutes'];
        // $new_cartoon->episodes = $form_data['episodes'];
        // $new_cartoon->image = $form_data['image'];
        $new_cartoon->fill($form_data);
        $new_cartoon->save();

        return redirect()->route('cartoons.show', $new_cartoon);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function show(Cartoon $cartoon)
    {
        return view('cartoons.show', compact('cartoon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartoon $cartoon)
    {
        return view('cartoons.edit', compact('cartoon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartoon  $cartoon
     * @return \Illuminate\Http\Response
     */
    public function update(CartoonRequest $request, Cartoon $cartoon)
    {

        $form_data=$request->all();

        if($form_data['title'] != $cartoon->title){
            $form_data['slug']=Cartoon::generateSlug($form_data['title']);
        } else {
            $form_data['slug'] = $cartoon->slug;
        }

        $cartoon->update($form_data);

        return redirect()->route('cartoons.show',$cartoon);

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
