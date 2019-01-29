<?php

namespace App\Http\Controllers;

use App\Control;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.Control.addteam');
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
    public function manage(){
        $control = Control::orderBy('created_at', 'desc')->first();
        return view ('layouts.Control.addscore')->with('control',$control);
    }

    public function store(Request $request)
    {
        $control= new Control();

        Control::create([
            'team_a_name' => $request->team_a_name,
            'team_b_name' => $request->team_b_name,
            'team_a_score' => $request->team_a_score,
            'team_b_score' => $request->team_b_score,
        ]);
        return redirect(route('control.index'))->with('message','Team Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        $control=Control::findOrFail($request->id);

        $control->update([
            'team_a_name'=>$request->team_a_name,
            'team_b_name'=>$request->team_b_name,
            'team_a_score'=>$request->team_a_score,
            'team_b_score'=>$request->team_b_score
            ]);
        return redirect(route('control.manage'))->with('message','Score Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
