<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class SessionController extends Controller
{

    use ThrottlesLogins;

    public function __construct()
    {
      //  $this->middleware('auth');
    }

    public function login()
    {
        request()->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', request(['email']))->first();

        if(!$user){
            session()->flash('warning','Aucun compte ne correspond à cet utilisateur. Veuillez contacter l\'administrateur');
            return back();
        }
        $data = request(['email', 'password']);

        if(!auth()->attempt($data)){
            session()->flash('warning','Votre adresse électronique ou votre mot de passe est incorrecte');
            return back();
        }


        session()->flash('success','Bienvenue');

        return redirect()->home();
    }

    public function destroy()
    {
        $this->guard()->logout();

        request()->session()->flush();
        request()->session()->regenerate();

        return redirect()->login();
    }

    public function recovery()
    {
        return view('session.recovery');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
