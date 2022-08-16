<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
        $reglas = [
            "nombre" => 'required|alpha',
            "edad" => 'required|numeric',
            "foto" => 'required|image',
            "user" => 'required|numeric',
            "desc" => 'required',
            "est" => 'required',
            "raza" => 'required|alpha',
            "zona" => 'required',


        ];

        $mensajes=
        [
            "required" => "Este campo es oligatorio",
            "alpha" => "El campo solo acepta caracteres alfabeticos",
            "image" => "El archivo debe ser una imagen",
            "numeric" => "El campo solo acepta caracteres numericos"


        ];


        //Objeto Validador    
        $v = Validator::make($request->all(), $reglas, $mensajes);

        //Validar
        if ($v->fails()){
            return redirect('formpet')
            ->withErrors($v);
        }
        else{
            $archivo= $request->foto;
            $nombre_archivo=$archivo->getClientOriginalName();
            $ruta = public_path();
            $archivo->move("$ruta/photoPet/",$nombre_archivo);
            $pet = new pet;
            $pet->nombrePeludo=$request->nombre;
            $pet->edad=$request->edad;
            $pet->user_id=$request->user;
            $pet->descripcionSalud=$request->desc;
            $pet->raza=$request->raza;
            $pet->foto=$nombre_archivo;
            $pet->zonaVivienda=$request->zona;
            $pet->estadoPeludo=$request->est;

            $pet->save();

            return redirect('pets/form');
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
    public function update(Request $request, $id)
    {
        //
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