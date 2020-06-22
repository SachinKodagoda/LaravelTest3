<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;

class UserController extends Controller
{
    public function addUser(){
        return view('add_user');
    }

    public function updateUser($userId){
        // return "userId:" . $userId;
        $user = Users::find($userId);
        return view('update_user',['user' => $user]);  
    }

    public function searchUser(){
        $users = Users::all();
        $test = 'hi';
        // return var_dump($users);
        return view('search_user', ['test' => $test, 'users' => $users]);
    }

    public function loginUser(){
        return view('login_user');
    }

    public function registerUser(){
        return view('register_user');
    }

    public function addUserPost(Request $request){
        // var_dump($request -> all());
        // $request -> input('user_name'); or $name = $request['name']
        $user = new Users();
        $user->name =  $request->user_name;
        $user->email =  $request->user_email;
        $user->password =  $request->user_password;

        $user->save();
        return redirect(route('searchUser'));
    }

    public function addUserPut(Request $request){
        $user = Users::find($request->user_id);
        $user->name =  $request->user_name;
        $user->password =  $request->user_password;
        $user->save();
        // var_dump($user);
        return redirect(route('searchUser'));
    }

    public function deleteUser(Request $request){
        $user = Users::find($request['id']);
        $user->delete();
        return redirect(route('searchUser'));
    }
}
