<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Golds;
use View;

class GoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $golds = Golds::all();

        return View::make('golds.index')->with('golds', $golds);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('golds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $gold = new Golds([
          'value' => $request->get('value'),
        ]);

        $gold->save();
        return Redirect::to('golds');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // get the gold
        $gold = Golds::find($id);

        // show the view and pass the gold to it
        return View::make('golds.show')
            ->with('gold', $gold);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // get the gold
        $gold = Golds::find($id);

        // show the edit form and pass the gold
        return View::make('golds.edit')->with('gold', $gold);
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $gold = Golds::find($id);
        $gold->value = $request->get('value');
        $gold->save();
        return Redirect::to('golds');
        
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // delete
        $gold = Golds::find($id);
        $gold->delete();

        // redirect
        return Redirect::to('golds');
        
    }
}
