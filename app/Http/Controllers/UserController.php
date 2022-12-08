<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|min:8',
            'password' => 'required'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        session()->flash('message', 'Gebruiker toegevoegd');
        return redirect(route("users.index"));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view("users.edit", ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
           'name' => 'required',
           'email' => 'required|min:8'
        ]);
        $user = User::find($id);
        $user->update($request->all());
        session()->flash('message', 'Profiel bewerkt.');
        return redirect(route("users.show", ["user"=>$user->id]));
    }

    public function destroy($id)
    {
        User::destroy($id);
        session()->flash('danger', 'Gebruiker verwijderd.');
        return redirect(route("users.index"));
    }
}
