<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
     
    public function index()
    {
        $user = DB::table('usuarios')
            ->orderBy('Usuario')
            ->get();
            
        return view ('crud.showUsuarios',[
            'usuarios' => $user
        ]);
        
    }


    public function create()
    {
        return view('crud.altaUsuario');
    }

    
    public function store(Request $request)
    {
        $user = DB::table('usuarios')
            ->insert([
                'Usuario' => $request->input('user'),
                'pasword' => $request->input('password'),
                'key' => $request->input('key')
            ]);
            return redirect()->action('Crud@index');
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
