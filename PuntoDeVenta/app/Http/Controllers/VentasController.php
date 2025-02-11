<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;

class VentasController extends Controller
{
    //
    public function index(){
        $ventas = Ventas::all();
        return view('ventas',compact('ventas'));
    }
    public function create(){
        return view('ventas.create');
    }
    public function store(Request $request){
        $venta = new Ventas();
        $venta->producto_id = $request->input('producto_id');
        $venta->cantidad = $request->input('cantidad');
        $venta->precio = $request->input('precio');
        $venta->save();
        return redirect()->route('ventas.index');
    }
    public function edit($id){
        $venta = Ventas::find($id);
        return view('ventas.edit',compact('venta'));
    }
    public function update(Request $request,$id){
        $venta = Ventas::find($id);
        $venta->producto_id = $request->input('producto_id');
        $venta->cantidad = $request->input('cantidad');
        $venta->precio = $request->input('precio');
        $venta->save();
        return redirect()->route('ventas.index');
    }
    public function show($id){
        $venta = Ventas::find($id);
        return view('ventas.show',compact('venta'));
    }
    public function destroy($id){
        $venta = Ventas::find($id);
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
