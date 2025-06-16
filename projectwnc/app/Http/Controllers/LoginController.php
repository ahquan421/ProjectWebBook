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

    public function home()
    {
        $newBooks = Course::orderBy('created_at', 'desc')->take(8)->get();
        $discountedBooks = Course::orderBy('giatien', 'asc')->take(8)->get();
        $almostOutBooks = Course::where('soluong', '<=', 10)->orderBy('soluong')->take(8)->get();
        $featuredBooks = Course::inRandomOrder()->take(8)->get();

        return view('user.home', compact('newBooks', 'discountedBooks', 'almostOutBooks', 'featuredBooks'));
    }
    public function search(Request $request){
        $publishers = Course::select('nxb')->distinct()->pluck('nxb');
        $genres = Course::select('theloai')->distinct()->pluck('theloai');
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
        return view('user.search', [
            'courses' => $results,
            'publishers' => $publishers,
            'genres' => $genres,
        ]);
    }
}

