<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    public function create()
    {
        $data = [
            'name'      => 'Tamal',
            'email'     => 'tamal@gmail.com',
            'password'  => '1234'
        ];

        $user = User::create($data);
        return "User Create Successfully";
    }


    
}
