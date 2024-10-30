<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/')->with(['error' => 'anda sedang login']);
        }else{
            return view('login');
        }
    }
    public function actionLogin(Request $request )
    {
        $data =[
            'email' =>$request->email,
            'password' =>$request->password,
        ];
        if(Auth::Attempt($data)) {
            return redirect('/')->with(['success' => 'Login Berhasil']);
        }else{
            return redirect('/login')->with(['error' => 'Email atau Password salah !!']);
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/login')->with(['success' => 'anda berhasil logout']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
