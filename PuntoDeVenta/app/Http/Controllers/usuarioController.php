<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //
    public function index()
    {
        $usuarios = User::where('activo', true)->get();
        return view('usuarios', compact('usuarios'));
    }
    public function create()
    {
        return view('createUsuario');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'genero' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->genero = $request->genero;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect()->route('usuarios.index')->with('success', 'Usuario guardado correctamente.');
    }
    public function show($id)
    {
        $usuario = User::find($id);
        return view('showUsuario',compact('usuario'));
    }
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('editUsuario',compact('usuario'));
    }
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6',
        ]);
        $usuario = User::find($id);
        $usuario->name = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        if ($request->password) {
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();
        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente.');
    }
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->active = false;
    
        return response()->json(['message' => 'Usuario eliminado correctamente']);
    }    
}
