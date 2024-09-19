<?php

namespace App\Repositories\Auth;

use App\Models\{User};
use App\Enums\UserRolesEnum;
use Auth;
use Hash;


class AuthRepository
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function login($data)
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return Auth::user();
        }
        return false; 
    }

}