<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        return view('home');
    }
    public function search(Request $request){
    // Lấy dữ liệu duy nhất từ database để đổ vào dropdown
        $publishers = Course::select('nxb')->distinct()->pluck('nxb');
        $genres = Course::select('theloai')->distinct()->pluck('theloai');

    // Truy vấn tìm kiếm
        $query = Course::query();

         if ($request->filled('tensach')) {
            $query->where('tensach', 'like', '%' . $request->tensach . '%');
        }

         if ($request->filled('nxb')) {
        $query->where('nxb', $request->nxb);
        }

        if ($request->filled('theloai')) {
        $query->where('theloai', $request->theloai);
        }
        $results = $query->get();

    // Trả về view search.blade.php và truyền dữ liệu
        return view('search', [
            'courses' => $results,
            'publishers' => $publishers,
            'genres' => $genres,
        ]);
    }
}

