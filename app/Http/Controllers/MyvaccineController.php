<?php

namespace App\Http\Controllers;
use App\Models\Myvaccine;
use App\Models\Pet;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MyvaccineController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $myvacs= Myvaccine::all();

        return view('myvaccines.list')
        ->with('myvacs', $myvacs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $pets = Pet::all();
        $vacs = Vaccine::all();

        return view('myvaccines.form')
        ->with('pets' , $pets)
        ->with('vacs' , $vacs);
    }

    public function store(Request $request)
{
        $reglas = [
            "fecha" => 'required',
            "pet" => 'required',
            "vaccine" => 'required',


        ];

        $mensajes=
        [
            "required" => "Este campo es oligatorio"
        ];


        //Objeto Validador    
        $v = Validator::make($request->all(), $reglas, $mensajes);

        //Validar
        if ($v->fails()){
            return redirect('formmyvac')
            ->withErrors($v);
        }
        else{
            $myvaccine = new myvaccine;
            $myvaccine->fechaVacuna=$request->fecha;
            $myvaccine->pets_id=$request->pet;
            $myvaccine->vaccines_id=$request->vaccine;

            $myvaccine->save();
            return redirect('myvaccine');

           
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
        $myvacs=Myvaccine::findorFail($id);
        return view('myvaccines.edit')
        ->with('myvacs' , $myvacs);
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
            "fecha" => 'required',
            "pet" => 'required',
            "vaccine" => 'required',


        ];

        $mensajes=
        [
            "required" => "Este campo es oligatorio"
        ];


        //Objeto Validador    
        $v = Validator::make($request->all(), $reglas, $mensajes);

        //Validar
        if ($v->fails()){
            return redirect('myvaccine/'. $id .'/edit')
            ->withErrors($v);
        }
        else{
            $myvacs=Myvaccine::findorFail($id);
            $myvacs->fechaVacuna=$request->fecha;
            $myvacs->pets_id=$request->pet;
            $myvacs->vaccines_id=$request->vaccine;
    
            $myvacs->save();
            return redirect('myvaccine');

           
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