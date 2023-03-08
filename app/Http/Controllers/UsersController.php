<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){

        User::create($request->all());
        return redirect()->route('usuarios')->with('success','Se ha creado correctamente un nuevo usuario :)');
    }
    public function destroy($id){
       User::find($id)->delete();
       // delete from users where id  = ?
       return redirect()->route('usuarios')->with('warning','Se ha eliminado un usuario :_(');
       
    }
    public function show($id){
        $user = User::find($id);
        // select * from users where id  = ? 
        return view('users.show',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }
    // 1 = info a actualizar
    // 2 = a quien
    public function update(Request $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect()->route('usuarios')->with('success','Se ha actualizado correctamente el usuario :)');
    }
}
