<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data['title'] = 'Register';
        return view('login.register', $data);
    }
}
