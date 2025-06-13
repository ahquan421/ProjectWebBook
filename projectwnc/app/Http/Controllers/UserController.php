<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function showcheckout($id)
    {
        $book = Course::findOrFail($id);
        return view('user.checkout', compact('book'));
    }
    public function processcheckout(Request $request, $id)
    {
        $book = Course::findOrFail($id);

        if ($book->soluong > 0) {
            $book->soluong -= 1;

            if ($book->soluong == 0) {
                $book->delete(); // Xóa sách khi hết hàng
            } else {
                $book->save();
            }

            return redirect()->route('search')->with('success', 'Thanh toán thành công!');
        }

        return redirect()->back()->with('error', 'Sách đã hết hàng!');
    }
}
