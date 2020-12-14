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
                'password' => $request->input('password'),
                'key' => $request->input('key')
            ]);
            return redirect()->action('Crud@index')
            ->with('status', 'Usuario creado exitosamente');

    }

    
    public function show($id)
    {
        $user = DB::table('usuarios')
            ->where('idUsuario', '=', $id)
            ->first();
            return view('crud.altaUsuario', ['user' => $user]);
    }

    
    public function update(Request $request)
    {
        $user = DB::table('usuarios')
            ->where('idUsuario', '=', $request->input('id'))
            ->update([
                'Usuario' => $request->input('user'),
                'password' => $request->input('password'),
                'key' => $request->input('key')
            ]);
            return redirect()->action('Crud@index')
            ->with('status', 'Usuario modificado exitosamente');
    }

    
    public function destroy($id)
    {
        $user = DB::table('usuarios')
            ->where('idUsuario', '=', $id)
            ->delete();

            return redirect()->action('Crud@index')
            ->with('status', 'Usuario eliminado exitosamente');
    }
}
