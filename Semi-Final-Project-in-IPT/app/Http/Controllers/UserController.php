<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::latest()->paginate(10);
        return view('users.index', ['users'=>$users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'lname' => $request['lname'],
            'fname' => $request['fname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),

        ]);

        return redirect('/users')->with('info', 'A new user has been created.');

    }
    public function edit($id) {
        $user = User::find($id);

        return view('users.edit', ['user'=>$user]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);

        $user->update($request->all());

        return redirect('/users')->with('info', "The record of $user->fname $user->lname has been updated. ");
    }

    public function delete(Request $request) {
        $userId = $request['user_id'];
        $user = User::find($userId);
        $name = $user->lname . ", " .  $user->fname;

        $user->delete();

        return redirect('/users')->with('info', "The user $name has ben delated");
    }
}
