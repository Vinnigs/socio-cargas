<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){

        return view('login.entrar');
    }


    public function auth(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else{
            return redirect()->back()->with('msgErro', 'E-mail ou senha incorretos.');
        }
    }


    public function create(){
        return view('login.cadastro');
    }

    public function store(Request $request){
        $usuario = $request->all();
        $usuario['password'] = bcrypt($request->password);

        if(User::where('email', '=', $request->email)->first() != NULL){
            // E-mail já cadastrado no sistema.
            return redirect(route('login.cadastro'))->with('msgErro', 'E-mail já cadastrado no sistema.');
        }

        $usuario = User::create($usuario);
        Auth::login($usuario);

        return redirect()->intended('/');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
