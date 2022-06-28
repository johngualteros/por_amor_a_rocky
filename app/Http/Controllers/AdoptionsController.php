<?php

namespace App\Http\Controllers;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;

class AdoptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adoptions.success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Nos falta el nombre del perro
        //$mascota=Mascota::all();
        //return view('adoptions.form')->with('mascota', $mascota);
        return view('adoptions.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            "nombre"=>'required|alpha|unique:productos,nombre',
            "descripcion"=>'required|min:10|max:100',
            "precio"=>'required|numeric',
            "imagen"=>'required|image',
            "marca"=>'required',
            "categoria"=>'required',
        ];
        // 2 objeto validador
        $v=Validator::make($request->all(),$rules,$message=[
            'required' => 'el campo :attribute es requerido',
            'min' => 'El campo debe tener un minimo de :min caracteres',
            'max' => 'El campo debe tener un maximo de :max caracteres',
            'numeric' => 'El campo solo debe tener numeros',
            'image' => 'El campo debe tener una imagen',
            'unique' =>'El campo ya tiene un registro en la base de datos'
        ]);
        // 3 Validar
        // fails return si la validacion falla y un false si no
        if($v->fails()){
            // Mostrar la vista new pero llevando los errores
            return redirect('solicitarAdopcion/create')->withErrors($v);
        }else{
            $archivo=$request->imagen;
            $nombre_archivo=$archivo->getClientOriginalName();
            // Mover el arvhivo a la carpeta public
            $ruta=public_path();
            var_dump($ruta);
            $archivo->move("$ruta/img/",$nombre_archivo);
            // Registrar producto
            $adoption=new Adoption();
            
            $adoption->save();
            return redirect('/solicitarAdopcion');
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
