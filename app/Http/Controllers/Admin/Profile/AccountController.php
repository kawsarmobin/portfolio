<?php

namespace App\Http\Controllers\Admin\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use Session;

class AccountController extends Controller
{

    public function edit()
    {
        return view('admin.profile.change_pass');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
          'old_password' => 'required|min:6|max:50',
          'password' => 'required|min:6|max:50|confirmed',
        ],[
          'password.required' => 'The new password field is required.',
        ]);

        $old_password = $request->old_password;
        $new_password = $request->password;

        // $user = User::find(Auth::id());
        //
        // if (!Hash::check($old_password, $user->password)) {
        //   Session::flash('info', 'Old password does not match.');
        //   return redirect()->back();
        // }else{
        //   $user->password = bcrypt($new_password);
        //   $user->save();
        //   Session::flash('success','Password Updated');
        //   Auth::logout();
        //   return redirect('login');
        // }

        $user = User::find(Auth::id());

        if (!Hash::check($old_password, $user->password)) {
          Session::flash('info', 'Password does not match.');
          return redirect()->back();
        }else {
          $user->password = bcrypt($new_password);
          $user->save();
          Auth::logout();
          return redirect('login');
        }


    }
}
