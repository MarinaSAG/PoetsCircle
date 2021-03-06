<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
     
    public function index()
    {
        $poet = DB::table('poetas')
            ->orderBy('poeta')
            ->get();
            
        return view ('crud.showPoets',[
            'poetas' => $poet
        ]);
        
    }


    public function create()
    {
        return view('crud.altaPoet');
    }

    
    public function store(Request $request)
    {
        $poet = DB::table('poetas')
            ->insert([
                'poet_code' => $request->input('poet_code'),
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'adress' => $request->input('adress'),
                'postcode' => $request->input('postcode'),
                'telephone_number' => $request->input('telephone_number')
            ]);
            return redirect()->action('Poets@index')
            ->with('status', 'Registro creado exitosamente');

    }

    
    public function show($id)
    {
        $poet = DB::table('poetas')
            ->where('poet_code', '=', $id)
            ->first();
            return view('crud.altaPoet', ['poet' => $poet]);
    }

    
    public function update(Request $request)
    {
        $poet = DB::table('poetas')
            ->where('poet_code', '=', $request->input('code'))
            ->update([
                'poet_code' => $request->input('poet_code'),
                'first_name' => $request->input('first_name'),
                'surname' => $request->input('surname'),
                'adress' => $request->input('adress'),
                'postcode' => $request->input('postcode'),
                'telephone_number' => $request->input('telephone_number')
            ]);
            return redirect()->action('Poets@index')
            ->with('status', 'Registro modificado exitosamente');
    }

    
    public function destroy($id)
    {
        $poet = DB::table('poetas')
            ->where('poet_code', '=', $id)
            ->delete();

            return redirect()->action('Poets@index')
            ->with('status', 'Registro eliminado exitosamente');
    }
}
