<?php

namespace App\Http\Controllers;

use Session;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.message.index')
                ->with('messages', Message::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'message' => 'required|min:3|max:100',
        ]);

        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        if ($request->phone) {
            $message->phone = $request->phone;
        }else {
            $message->phone = '';
        }
        $message->message = $request->message;

        if ($message->save()) {
            Session::flash('success', 'Successfully Message Sent');
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $message = Message::find($id);

        if ($message->delete()) {
            Session::flash('success', 'Successfully Message Delete');
        }

        return redirect()->back();
    }
}
