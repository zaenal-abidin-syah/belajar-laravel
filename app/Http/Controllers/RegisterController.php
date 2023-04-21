<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title'=>'Register',
            'active'=>'register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users', 
            'email'=>'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255'
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // session()->flash('success', 'Registration Successfull! please login');
        // $request->session()->flash('success', 'Registration Successfull! please login');
        
        return redirect('/login')->with('success', 'Registration Successfull! please login');
    }
}
