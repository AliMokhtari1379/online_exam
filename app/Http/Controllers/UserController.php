<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
//namespace App\Http\;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.Users',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rule' => 'required',
            'is_status' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'family' => $request->family,
            'username' => $request->username,
            'email' => $request->email,
            'password'=>$request->password,
            'rule' => $request->rule,
            'is_status' => $request->is_status,
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return view('Admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'username' => 'required',
            'email' => 'required | email',
            'rule' => 'required',
            'is_status' => 'required',

        ]);

        $user->update([
            'name' => $request->name,
            'family' => $request->family,
            'username' => $request->username,
            'email' => $request->email,
            'rule' => $request->rule,
            'is_status' => $request->is_status,
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
