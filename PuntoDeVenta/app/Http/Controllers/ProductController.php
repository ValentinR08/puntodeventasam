<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use App\Models\inventario;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $productos = inventario::where('activo', true)->get();
        $categorias = catalogo::where('activo', true)->get();
        return view('productos', compact('productos','categorias'));
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);
        $product = new inventario();
        $product->nombre = $request->nombre;
        $product->precio = $request->precio;
        $product->cantidad = $request->cantidad;
        $product->descripcion = $request->descripcion;
        $product->categoria = $request->categoria;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Producto guardado correctamente.');
    }
    
    public function update(Request $request, $id)
    {
        
        $request->validate(['nombre' => 'required']);
        $product = inventario::find($id);
        $product->nombre = $request->nombre;
       
        $product->update();
        return redirect()->route('products.index')->with('success', 'Producto editado correctamente.');
    }
    public function destroy($id)
    {
        $product = inventario::findOrFail($id);
        $product->active = false;
    
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
    }
}
