<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->orderBy('id', 'desc')->paginate(5);
        return view('users.index',['users'=>$users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->save();
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = DB::table('users')->where([
            ['id', '=', $id],
        ])->first();
        return view('users.show',['user'=>$user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = DB::table('users')->where([
            ['id', '=' , $id],
        ])->delete();
        return redirect()->route('users.index');;
    }
}
