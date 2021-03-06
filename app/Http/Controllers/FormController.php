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
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);
        Form::create($request->all());
        return redirect()->route('home')->with('success','Created successfully.');
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
    public function update(Request $request, Form $form)
    {
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
         $form->delete();
  
        return redirect()->route('listado')
                        ->with('success','deleted successfully');
    }
}
