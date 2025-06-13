<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $role = $request->role;
        $username = $request->username;
        $password = $request->password;

        if ($role === 'admin') {
            // Dữ liệu admin có thể cứng hoặc từ DB
            if ($username === 'admin' && $password === '123456') {
                return redirect()->route('course.page');
            } else {
                return back()->with('error', 'Sai thông tin Admin');
            }
        }

        if ($role === 'user') {
            $path = storage_path('app/users.json');
            if (File::exists($path)) {
                $users = json_decode(File::get($path), true);
                foreach ($users as $user) {
                    if ($user['username'] === $username && $user['password'] === $password) {
                        return redirect('/home');
                    }
                }
            }
            return back()->with('error', 'Sai thông tin người dùng');
        }

        return back()->with('error', 'Lỗi hệ thống');
    }

    public function showRegister() {
        return view('register');
    }

    public function handleRegister(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:4',
            'fullname' => 'required|string|max:255',
            'birthyear' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
        ]);

        $user = [
            'fullname' => $request->fullname,
            'birthyear' => $request->birthyear,
            'username' => $request->username,
            'password' => $request->password,
            
        ];

        $path = storage_path('app/users.json');
        $users = File::exists($path) ? json_decode(File::get($path), true) : [];
        $users[] = $user;

        File::put($path, json_encode($users, JSON_PRETTY_PRINT));

        return redirect()->route('login')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');
    }
}