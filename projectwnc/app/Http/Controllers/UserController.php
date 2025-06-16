<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function showcheckout($id)
    {
        session(['back_book' => url()->previous()]);
        $book = Course::findOrFail($id);
        return view('user.checkout', compact('book'));
    }
    public function processCheckout(Request $request, $id){
        $book = Course::findOrFail($id);
         if ($book->soluong > 0) {
            $book->decrement('soluong');
            session()->flash('success_book_name', $book->tensach);
            session()->flash('back_url', url()->previous());

            return view('user.success');
        }

        return back()->with('error', 'Sách đã hết hàng!');
}
}
