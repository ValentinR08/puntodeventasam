<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    //
    public function index()
    {
        $catalogos = catalogo::where('activo', true)->get();
        return view('catalogo', compact('catalogos'));
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'TipoProducto' => 'required',
            
        ]);
        $catalogo = new catalogo();
        $catalogo->TipoProducto = $request->TipoProducto;
        $catalogo->save();
        return redirect()->route('catalogo.index')->with('success', 'Producto guardado correctamente.');
    }
    
    public function update(Request $request, $id)
    {
        
        $request->validate(['TipoProducto' => 'required']);
        $catalogo = catalogo::find($id);
        $catalogo->TipoProducto = $request->TipoProducto;
       
        $catalogo->update();
        return redirect()->route('catalogo.index')->with('success', 'Producto editado correctamente.');
    }
    public function destroy($id)
    {
        $catalogo = catalogo::findOrFail($id);
        $catalogo->active = false;
    
        return redirect()->route('catalogo.index')->with('success', 'Producto eliminado correctamente.');
    }
}
