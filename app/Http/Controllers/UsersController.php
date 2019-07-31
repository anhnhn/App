<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Config;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
        $users= User::orderBy('id', 'desc')->paginate(Config::get('constants.userPaginate'));
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $path = null;
        $input = $request->except('avatar');
        $user = $request->all();
        if ($request->hasFile('avatar')) {
            $input['avatar'] = $request->file('avatar')->store('images', ['disk' => 'public']);
        }
        $user = User::create($input);
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $url_avatar = url('/').Config::get('constants.url').$user->avatar;
        $data = [
            'user'=>$user,
            'url_avatar'=>$url_avatar
        ];
        return view('users.show', $data );
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->except('avatar');
        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete('/'.$user->avatar);
            $input['avatar'] = $request->file('avatar')->store('images', ['disk' => 'public']);
        }
        $user->update($input);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
