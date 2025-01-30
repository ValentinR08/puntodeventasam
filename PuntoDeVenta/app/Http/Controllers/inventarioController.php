<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use Illuminate\Http\Request;

class inventarioController extends Controller
{
    //
    public function index()
    {
        return view('inventario');
    }
    public function create()
    {
        return view('inventario.create');
    }
    public function store(Request $request)
    {
        $inventario = new inventario;
        $inventario->catalogo_id = $request->input('catalogo_id');
        $inventario->nombre = $request->input('nombre');
        $inventario->precio = $request->input('precio');
        $inventario->stock = $request->input('stock');
        $inventario->save();
        return redirect('/inventario');
    }
    public function show($id)
    {
        $inventario = inventario::find($id);
        return view('inventario.show',compact('inventario'));
    }
    public function edit($id)
    {
        $inventario = inventario::find($id);
        return view('inventario.edit',compact('inventario'));
    }
    public function update(Request $request,$id)
    {
        $inventario = inventario::find($id);
        $inventario->catalogo_id = $request->input('catalogo_id');
        $inventario->nombre = $request->input('nombre');
        $inventario->precio = $request->input('precio');
        $inventario->stock = $request->input('stock');
        $inventario->save();
        return redirect('/inventario');
    }
    public function destroy($id)
    {
        $inventario = inventario::find($id);
        $inventario->delete();
        return redirect('/inventario');
    }
}
