<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('user/index');
    }
    // public function register(): string
    // {
    //     return view('auth/register');
    // }
    // public function index(): string
    // {
    //     return view('user/index');
    // }
}
