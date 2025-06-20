<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function handleLogin(Request $request)
    {
        $role = $request->role;
        $username = $request->username;
        $password = $request->password;

        if ($role === 'admin') {
            // Đăng nhập admin cố định
            if ($username === 'admin' && $password === '123456') {
                return redirect()->route('course.page');
            } else {
                return back()->with('error', 'Sai thông tin Admin');
            }
        }

        if ($role === 'user') {
            // Đăng nhập user từ database
            $user = User::where('username', $username)->first();

            if ($user && Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect('/home');
            } else {
                return back()->with('error', 'Sai thông tin người dùng');
            }
        }

        return back()->with('error', 'Vai trò không hợp lệ');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $validated['username'],
            'fullname' => $validated['fullname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');
    }
}
