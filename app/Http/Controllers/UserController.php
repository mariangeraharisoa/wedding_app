<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        // retrieve all users
        $users = User::all();
        
        return view('users.index', compact('users'));
    }

    function add(){
        $isAdd = true;
        $user_types = UserType::all();
        return view('users.add', compact('isAdd', 'user_types'));
    }

    function doAdd() {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->lastname = request('lastname');
        $user->address = request('address');
        $user->contact = request('contact');
        $user->type_id = request('type_id');
        $user->save();

        return redirect()->route('users.index');
    }

    function edit($id){
        $user = User::find($id);
        $user_types = UserType::all();
        
        return view('users.edit', compact('user', 'user_types'));
    }

    function doEdit($id){
        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        // $user->password = Hash::make(request('password'));
        $user->lastname = request('lastname');
        $user->address = request('address');
        $user->contact = request('contact');
        $user->type_id = request('type_id');
        $user->save();

        return redirect()->route('users.index');
    }

    function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
