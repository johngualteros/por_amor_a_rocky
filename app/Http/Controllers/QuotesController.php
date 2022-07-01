<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuotesController extends Controller
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
        //
        return view('quotes.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            "enlace"=>'required|alpha',
            "fecha"=>'required|date',
            "hora"=>'required|time',
        ];

        // 2 objeto validador
        $v = Validator::make( $request -> all(), $rules, $message = [
            'required' => 'el campo :attribute es requerido',
            'alpha' => 'el campo :attribute debe ser alfabetico',
            'date' => 'el campo :attribute debe ser una fecha valida',
            'time' => 'el campo :attribute debe ser una hora valida',
        ]);

        // 3 Validar
        // fails return si la validacion falla y un false si no
        if( $v -> fails() ){
            // Mostrar la vista new pero llevando los errores
            return redirect('solicitarCita/create')->withErrors( $v );
        }else{
            // Registrar producto
            $quote = new Quote();
            $quote -> enlace = $request -> enlace;
            $quote -> fecha = $request -> fecha;
            $quote -> hora = $request -> hora;
            $quote -> save();
            return redirect('/solicitarCita');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
