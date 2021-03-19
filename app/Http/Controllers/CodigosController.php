<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codigo;

class CodigosController extends Controller
{
    
    public function index() {
        $codigos = Codigo::all(); //DB::table('notas')->get();
        return view('codigos', ['codigos' => $codigos]);
    }

    public function agregar() {
        return view('crear');
    }

    public function editar($id) {
        $codigo = Codigo::find($id); 
        return view('editar', ['codigo' => $codigo]);
    }

    public function crear(Request $request) {
        $request->validate([
            'codigo' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
          ]);
          
        Codigo::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/codigos');
    }


    public function update(Codigo $codigo, Request $request) {
        
        $codigo->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);

        return redirect('/codigos');
    }

    public function destroy($id) {
        
        $codigo = Codigo::find($id);

        $codigo->delete();

        return redirect('/codigos');
    }
}
