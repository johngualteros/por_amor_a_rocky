<?php

namespace App\Http\Controllers;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class VaccineController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $vacs= Vaccine::all();
        return view('vaccines.list',compact('vacs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function store(Request $request)
{
        $reglas = [
            "nombre" => 'required|alpha',


        ];

        $mensajes=
        [
            "required" => "Este campo es oligatorio",
            "alpha" => "El campo solo acepta caracteres alfabeticos"


        ];


        //Objeto Validador    
        $v = Validator::make($request->all(), $reglas, $mensajes);

        //Validar
        if ($v->fails()){
            return redirect('formvac')
            ->withErrors($v);
        }
        else{
            $vaccine = new vaccine;
            $vaccine->nombreVacuna=$request->nombre;

            $vaccine->save();
            return redirect('vaccine');

           
        }
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
        $vacs=vaccine::findorFail($id);
        return view('vaccines.edit', compact('vacs'));
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

        $reglas = [
            "nombre" => 'required|alpha',


        ];

        $mensajes=
        [
            "required" => "Este campo es oligatorio",
            "alpha" => "El campo solo acepta caracteres alfabeticos"


        ];


        //Objeto Validador    
        $v = Validator::make($request->all(), $reglas, $mensajes);

        //Validar
        if ($v->fails()){
            return redirect('vaccine/'. $id .'/edit')
            ->withErrors($v);
        }
        else{
        $vacs=vaccine::findorFail($id);
        $vacs->nombreVacuna=$request->nombre;

        $vacs->save();
        return redirect('vaccine');
        }
        
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