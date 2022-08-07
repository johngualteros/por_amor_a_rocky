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
        $adoptions = Adoption::all();
        return view('adoptions.listAdoptions')->with('adoptions', $adoptions);
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
        $optionsZone=[1,2,3,4,5,6,7,8,9,10,11];
        return view('adoptions.form')->with('optionsZone', $optionsZone);
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
            "numeroDocumento"=>'required|alpha_num',
            "nombre"=>'required|string|max:45|min:3',
            "apellidos"=>'required|string|max:45',
            "fechaNacimiento"=>'required|date',
            "numeroPersonasReside"=>'required|alpha_num',
            "contactoEmpresa"=>'required|alpha_num',
            "celular"=>'required|alpha_num',
            "correo"=>'required|email',
            "direccion"=>'required|max:45',
            "empresaTrabaja"=>'required|string',
            "sueldo"=>'required',
            "zonaVivienda"=>'required|numeric|min:1|max:20',
        ];
        // 2 objeto validador
        $v=Validator::make($request->all(),$rules,$message=[
            'required' => 'el campo :attribute es requerido',
            'alpha_num' => 'el campo :attribute debe ser numerico',
            'string' => 'el campo :attribute debe ser alfabetico',
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
            $archivo=$request->documento;
            $nombre_archivo=$archivo->getClientOriginalName();
            // Mover el archivo a la carpeta public/images
            $ruta=public_path();
            $archivo->move("$ruta/images/",$nombre_archivo);
            // Registrar producto
            $adoption=new Adoption();
            $adoption->documento=$nombre_archivo;
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
            $adoption->estado="pendiente";
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
        $adoption=Adoption::find($id);
        return view('adoptions.show')->with('adoption', $adoption);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adoption=Adoption::find($id);
        $adoption->estado="aprobado";
        $adoption->save();
        return redirect('/solicitarAdopcion');
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
