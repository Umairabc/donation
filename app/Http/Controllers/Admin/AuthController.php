<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\Auth\AuthRepository;
use Auth;
use Hash;
use validated;
use App\Models\User;

class AuthController extends Controller
{
    private $repo;

    public function __construct(AuthRepository $repo)
    {
        $this->repo = $repo;
    }


    public function login_view()
    {
        try {
            return view('auth.login');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $user = $this->repo->login($request->validated());
            if ($user) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid credentials.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();
            return redirect()->route('login_view');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    public function register()
    {
        return view('auth.userregister');
    }
    public function store(Request $request)
    {
        try {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            return redirect()->route('user.login')->with('success','user Register successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    public function userlogin()
    {
        return view('auth.userlogin');
    }

    public function User_Login(LoginRequest $request)
    {
        try {
            $user = $this->repo->login($request->validated());
            if ($user) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid credentials.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }
}
