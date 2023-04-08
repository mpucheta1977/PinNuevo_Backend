<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion de datos del form
        $request->validate([
            'name' => ['required','max:50'],
            'email' => ['required','email'],
            'phone' => ['required','max:20'],
            'message' => ['required','max:500'],
        ]);
                
        $persona = Contacto::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message' => $request['message'],
        ]);
                
         //enviar mails
         $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        Mail::to('m.pucheta@hotmail.com')->send(new \App\Mail\Contactanos($details));

        //Mail::to('mpucheta1977@gmail.com')->send(new \App\Mail\Contactanos($details));
        
        //mensaje cuando se graba y se envia el mail
        return response()->json([
            'mensaje' => 'Se cargaron correctamente los datos del Contacto y se envio el mail',
            'data' => $persona,
        ]);
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     * 
     */

     
     
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contacto  $contacto
     *@return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\contacto  $contacto
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
