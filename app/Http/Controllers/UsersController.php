<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;
use App\Http\Requests\Category;
use App\Ads;

class UsersController extends Controller
{
 public function page_adduser(){
     return view ('admin_adduser');
 }
 public function profile() {
    $users = Auth::user()->get();
    $id = Auth::id();
    $ads = ads::where('user_id', "=", $id)->get();
    return view('profile', compact('users', 'ads', 'id'));
 }
 public function edit_profile() {
    $users = Auth::user()->take(1)->get();
     return view('edit_profile', compact('users'));
 }
 public function update_profile (Request $request) {
    $data=Auth::user($request->id);
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'nickname' => ['required', 'string', 'max:255' ],
        'email' => ['required', 'string', 'email', 'max:255'],
        'phone_num'=>['required'],
    ]);
    $data->name=$request->name;
    $data->nickname=$request->nickname;
    $data->email=$request->email;
    $data->phone_num=$request->phone_num;
    
    $data->save();
    
        return redirect()->route('profile')->with ('success', 'User Successfull Updated !');
 }
 public function admin_adduserbutton (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'nickname' => ['required', 'string', 'max:255', 'unique:users' ],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone_num'=>['required'],
        'password' => ['required', 'confirmed'],
        'password_confirmation'=>['required'],
        'admin'=>['required', 'between:0,1'],
    
    ]);

    $user = Users::create([
        'name' => $request->name,
        'nickname' => $request->nickname,
        'email' => $request->email,
        'phone_num' => $request->phone_num,
        'password' =>bcrypt($request->password),
        'admin' => $request->admin,
    ]);
    return redirect()->route('crud')->with ('success', 'User Successfull Created !');
}
public function see_users() {
    $users = users::All();
    return view('admin_crud_users', compact('users'));
}
public function check_user($id) {
    $user = users::where('id', '=', $id)->take(1)->get();
    return view('admin_seeuser', compact('user'));
}
public function edit_user($id) {
    $user = users::where('id', '=', $id)->take(1)->get();
    return view('admin_edituser', compact('user'));
}
public function edit_user_validate(Request $request) {
    $data=users::find($request->id);
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'nickname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'phone_num'=>['required'],
        'admin'=>['required', 'between:0,1'],
    
    ]);
    $data->name=$request->name;
    $data->nickname=$request->nickname;
    $data->email=$request->email;
    $data->phone_num=$request->phone_num;
    $data->admin=$request->admin;
    $data->save();
    return redirect()->route('crud')->with ('success', 'User Successfull Updated !');
}
public function delete_user($id){
    $data=users::find($id);
    $data->delete();
    return redirect()->route('crud')->with ('success', 'User Successfull Deleted !');
}
}