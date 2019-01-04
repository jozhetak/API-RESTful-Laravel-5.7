<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\usersRequest;
use App\User;

class UserController extends Controller
{
    //MUESTRA TODOS LOS REGISTROS PAGINADOS
    public function index()
    {
         $items =  User::orderBy('id','DESC')->paginate(10);
         return response()->json($items);
    }
    //CREA LOS USUARIOS
    public function store(usersRequest $request)
    {
        $create = User::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
            'telefono' => $request['telefono'],
            'password' => bcrypt($request['password']),
        ]);
        return response()->json($create);
    }
    //ACTUALIZA LOS REGISTROS
    public function update(Request $request, $id)
    {
        $edit = User::find($id)->update($request->all());
        return response()->json($edit);
    }
    //ELIMINA USUARIOS
    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['Eliminado']);
    }
}
