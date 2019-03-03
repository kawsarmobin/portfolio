<?php

namespace App\Http\Controllers\Admin\User;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('admin.user.index')
        ->with('users', User::all());
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6|max:50',
            'status' => 'required'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;



        if ($user->save()) {
            Session::flash('success', 'Successfully created user.');
        }

        return redirect()->back();

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        return view('admin.user.edit')
        ->with('user', User::find($id));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email,'. $user->id,
            'status' => 'required'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;


        if ($user->save()) {
            Session::flash('success', 'Successfully updated user.');
        }

        return redirect()->route('user.index');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {

        if (Auth::id() == $id) {
            Session::flash('info', 'You can not delete yourself.');
            return redirect()->back();
        }

        $user = User::find($id);

        if ($user->delete()) {
            Session::flash('success', 'Successfully deleted user.');
        }

        return redirect()->route('user.index');
    }

    public function active($id)
    {
        $user = User::find($id);

        $user->status = User::ACTIVE;

        if ($user->save()) {
            Session::flash('success', 'User activated.');
        }

        return redirect()->route('user.index');
    }

    public function deactive($id)
    {
        $user = User::find($id);

        $user->status = User::DEACTIVE;

        if ($user->save()) {
            Session::flash('success', 'User deactivated.');
        }

        return redirect()->route('user.index');
    }

    public function admin($id)
    {
        $user = User::find($id);

        $user->is_admin = User::ADMIN_USER;

        if ($user->save()) {
            Session::flash('success', 'Admin User.');
        }

        return redirect()->route('user.index');
    }

    public function regular($id)
    {
        $user = User::find($id);

        $user->is_admin = User::REGULAR_USER;

        if ($user->save()) {
            Session::flash('success', 'Regular User.');
        }

        return redirect()->route('user.index');
    }
}
