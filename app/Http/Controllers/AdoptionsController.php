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
            "documento"=>'required|mimes:pdf|max:1000',
            "numeroDocumento"=>'required|numeric|min:11|max:12',
            "nombre"=>'required|alpha|max:45|min:3',
            "apellidos"=>'required|alpha|max:45',
            "fechaNacimiento"=>'required|date',
            "numeroPersonasReside"=>'required|numeric',
            "contactoEmpresa"=>'required|email|max:45',
            "celularEmpresa"=>'required|numeric',
            "correo"=>'required|email',
            "direccion"=>'required|max:45',
            "empresaTrabaja"=>'required|alpha|max:45',
            "sueldo"=>'required',
            "zonaVivienda"=>'required|numeric|min:1|max:20',
        ];
        // 2 objeto validador
        $v=Validator::make($request->all(),$rules,$message=[
            'required' => 'el campo :attribute es requerido',
            'numeric' => 'el campo :attribute debe ser numerico',
            'alpha' => 'el campo :attribute debe ser alfabetico',
            'min' => 'el campo :attribute debe tener minimo :min caracteres',
            'max' => 'el campo :attribute debe tener maximo :max caracteres',
            'email' => 'el campo :attribute debe ser un correo valido',
            'date' => 'el campo :attribute debe ser una fecha valida',
            'mimes' => 'el campo :attribute debe ser un archivo pdf',
        ]);
        // 3 Validar
        // fails return si la validacion falla y un false si no
        if($v->fails()){
            // Mostrar la vista new pero llevando los errores
            return redirect('solicitarAdopcion/create')->withErrors($v);
        }else{
            // Registrar producto
            $adoption=new Adoption();
            $adoption->documento=$request->documento;
            $adoption->numeroDocumento=$request->numeroDocumento;
            $adoption->nombre=$request->nombre;
            $adoption->apellidos=$request->apellidos;
            $adoption->fechaNacimiento=$request->fechaNacimiento;
            $adoption->numeroPersonasReside=$request->numeroPersonasReside;
            $adoption->contactoEmpresa=$request->contactoEmpresa;
            $adoption->celular=$request->celular;
            $adoption->correo=$request->correo;
            $adoption->direccion=$request->direccion;
            $adoption->empresaTrabaja=$request->empresaTrabaja;
            $adoption->sueldo=$request->sueldo;
            $adoption->zonaVivienda=$request->zonaVivienda;
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
