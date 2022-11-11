<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
        ]);
        $user = new User;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
       
        $response = [
            'message'=>'Successfully created ',
            'alert-type'=>'success'
        ];
        return redirect()->back()->with($response);
    }

    public function update(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $user->email;
        $user->update();
        $response = [
            'message'=>'Successfully updated',
            'alert-type'=>'success'
        ];
        return redirect()->back()->with($response);
    }

    public function delete(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
        $response = [
            'message'=>'Successfully deleted',
            'alert-type'=>'success'
        ];
        return redirect()->back()->with($response);

    }
}
