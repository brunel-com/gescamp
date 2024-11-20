<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    public function login_view()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('users/login', $data);
    }

}