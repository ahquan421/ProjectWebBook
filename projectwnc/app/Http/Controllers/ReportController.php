<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

public function report()
{
    $totalSold = DB::table('orders')->sum('quantity');
    $totalIncome = DB::table('orders')->sum('total_price');
    $commission = $totalIncome * 0.2;

    $topBuyers = DB::table('orders')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->select('users.username', DB::raw('SUM(orders.quantity) as total'))
        ->groupBy('users.username')
        ->orderByDesc('total')
        ->limit(5)
        ->get();

    $topBooks = DB::table('orders')
        ->join('courses', 'orders.course_id', '=', 'courses.id')
        ->select('courses.masach', DB::raw('SUM(orders.quantity) as total'))
        ->groupBy('courses.masach')
        ->orderByDesc('total')
        ->limit(5)
        ->get();

    return view('course.report', compact('totalSold', 'totalIncome', 'commission', 'topBuyers', 'topBooks'));
}


}
