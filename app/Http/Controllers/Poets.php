<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Poets extends Controller
{
     
    public function index()
    {
        $poet = DB::table('poets')
            ->orderBy('poet_code')
            ->get();
            
        return view ('crud.showPoets',[
            'poets' => $poet
        ]);
        
    }


    public function create()
    {
        return view('crud.altaPoet');
    }

    
    public function store(Request $request)
    {
        $poet = DB::table('poets')
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

    
    public function show($code)
    {
        $poet = DB::table('poets')
            ->where('poet_code', '=', $code)
            ->first();
            return view('crud.altaPoet', ['poet' => $poet]);
    }

    
    public function update(Request $request)
    {
        $poet = DB::table('poets')
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

    
    public function destroy($code)
    {
        $poet = DB::table('poets')
            ->where('poet_code', '=', $code)
            ->delete();

            return redirect()->action('Poets@index')
            ->with('status', 'Registro eliminado exitosamente');
    }
}
