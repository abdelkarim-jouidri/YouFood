<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Affichage sign up form
    public function create(){
        return view('users.register');
    }

    //handle registration
    public function store(Request $request){
        
        $formFields = $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed'
        ]);
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/');
        }
        else {
            return back()->withErrors(['email'=>'invalid username or password'])->onlyInput('email');
        }
    }

    public function edit(User $user){
        return view('users.edit',['user'=>$user]);
    }

    public function update(Request $request , User $user){
        $formFields = $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed'
        ]);
        $formFields['password'] = bcrypt($formFields['password']);

        $user->update($formFields);
        return back();
    }
}
