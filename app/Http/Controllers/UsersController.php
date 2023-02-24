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
        return redirect()->route('usuarios');
    }
}
