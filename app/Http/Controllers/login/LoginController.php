<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

use Auth;
use App\User;

class LoginController extends Controller {
    
    public function index () {
        return view('login');
    }

    public function signIn(Request $request) {
        
        $this->validaterFields($request);
        //dd('estou aqui');
        try {
            $user = User::where('login', $request->login)->firstOrFail();
        } catch (Exception $e) {
            return redirect()->route('signIn')->withErrors('error', 'Login não econtrado!');
        }
        
        if (!empty($user)) {
            return redirect()->route('produto');
        }
    }

    public function toRegister () {
        return view('register');
    }

    public function create(Request $request) {
        $data = [];

        $data['name']       = $request->name;
        $data['login']      = $request->login;
        $data['password']   = $request->password;

        if (empty($data['name']) || empty($data['login']) || empty($data['password'])) {
            return redirect()->route('register');
        }


        $user = new User();

        $user->name = $data['name'];
        $user->login = $data['login'];
        $user->password = $data['password'];

        $user->save();

        return redirect()->route('signIn');
    }

    protected function validaterFields ($request) {
        $login = $request->login;
        $password = $request->password;

        $inputs = [
            'login' => 'required',
            'password' => 'required'
        ];

        $messages = [
            'login:requerid' => 'Login invalido!',
            'password:required' => 'Senha invalida!'
        ];

        $validator = Validator::make($request->all(), $inputs, $messages);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
    }
}
