<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        return view('users.formRegister');
    }

    public function login(Request $request){
        if (Auth::attempt($request->only('correo','clave')) == false) {
           return back()->withErrors([
            'message' => 'El correo o la contraseña son incorrectos, por favor vuelva a interntarlo'
           ]);
        }
        // return $request->only('email','password');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = [];
        $reglas=[
            "nombre" => 'required|string',
            "apellido" => 'required|string',
            "numeroDocumento"=> 'required|numeric:unique:User,numeroDocumento',
            "telefono" => 'required|string',
            "clave" => 'required|min:8',
            "foto"=>'required|image',
            "tipoUsuario"=>'required|numeric',
        ];
           // 2. crear el objeto validador
        $v = Validator::make($request->all(), $reglas, $msg=[
            'required' =>'Este campo :attribute es requerido',
            'min' => 'El campo debe tener minimo :min y maximo :max caracteres',
            'numeric' => 'El campo :attribute debe ser numerico',
            'unique' =>'El dato ingresado en el campo :attribute ya existe'
        ]);
        if ($v->fails()) {
            //Validación incorrecta
            // mostrar la vista new, pero llevando los errrores
            return redirect('productos/create')->withErrors($v);
            var_dump($v->errors());
       } else {
        $archivo= $request->foto;
        $nombre_archivo=$archivo->getClientOriginalName();
        $ruta = public_path();
        $archivo->move("$ruta/photoUser/",$nombre_archivo);
        $usuario = new User();
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->correo=$request->correo;
        $usuario->clave=$request->clave;
        $usuario->foto=$nombre_archivo;
        $usuario->tipoUsuario=$request->tipoUsuario;
        $usuario->numeroDocumento=$request->numeroDocumento;
        $usuario->telefono=$request->telefono;
        $usuario->save();
        return redirect('users/formRegister');
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
