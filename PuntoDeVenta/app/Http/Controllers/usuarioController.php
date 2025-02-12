<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usuarioController extends Controller
{
    //
    public function index()
    {
        return view('usuarios');
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
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $usuario = new User();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->genero = $request->genero;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect('/usuarios');
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
            'password' => 'required|min:6',
        ]);
        $usuario = User::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect('/usuarios');
    }
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
