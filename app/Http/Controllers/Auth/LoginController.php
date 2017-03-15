<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct () {
        
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function authenticate (Request $request) {

        $credentials = $request->only('email', 'password');

        //dd($credentials);
        dd(response()->json(['email' => $credentials]));

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return $this->response->error(['error' => 'User credentials are not correct!'], 401);
            }
            
        } catch (JWTException $ex) {
            dd('ola');
            return $this->response()->json(['error' => 'Something wnet wrong!'], 500);
        }

        return $this->response->array(compact('token'))->setStatusCode(200);
    }
}
