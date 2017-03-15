<?php

namespace Controllers;

//use TestCase;
use EstoqueApi\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthControllerTest extends \TestCase {

    use DatabaseTransactions;

    public function testLogin () {

        //Sets
        $data = [
            'username'  =>  'test',
            'password'  =>  'test123'
        ];

        $user = $data;

        $user['password']   = bcrypt($user['password']);
        $user['email']      = 'test@test.com';

        factory(User::class)->create($user);

        $this->post('auth/login', $data);

        //Asserts
        $this->seeStatusCode(200);
        $this->seeJson([
            'username'  =>  'test'
        ]);
    }

    public function testLoginWithEmail () {

        //Login
        $data = [
            'username'  =>  'michael@neves.com',
            'password'  =>  'test123'
        ];

        //Criando este usuario no DB
        $user = [
            'username'  =>  'michael',
            'password'  =>  bcrypt($data['password']),
            'email'     =>  'michael@neves.com'
        ];

        factory(User::class)->create($user);

        //Fazendo a autenticação
        $this->post('auth/login', $data);

        //dd($this->response->getContent());

        //Asserts
        $this->seeStatusCode(200);
        $this->seeJson([
            'username'  =>  'michael'
        ]);   
    }
}