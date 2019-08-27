<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::all();
        return view('listado', [
            'items'  =>  $form,
        ]);

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
      $form = new Form;
      $form->nombre = $request->nombre;
      $form->telefono = $request->telefono;
      $form->correo = $request->correo;
      $form->asunto = $request->asunto;
      $form->mensaje = $request->mensaje;
      if( $form->save() )
      {

        return redirect()->route('home')
                         ->with('info','form creado');
      }
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $form = Form::find($id);
        return view('editar', [
            'item'  =>  $form,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::find( $id );
        return view('editar', [
            'item'  =>  $form,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->nombre = $request->nombre;
        $form->telefono = $request->telefono;
        $form->correo = $request->correo;
        $form->asunto = $request->asunto;
        $form->mensaje = $request->mensaje;
        $form->save();

        //return $form;

        $all = Form::all();
        return view('listado', [
            'items'  =>  $all,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
