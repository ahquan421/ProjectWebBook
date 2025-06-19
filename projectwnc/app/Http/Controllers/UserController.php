<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order; // nếu bạn lưu đơn hàng

class UserController extends Controller
{
    // Giao diện thanh toán
    public function showcheckout($id)
    {
        // Lưu trang trước khi đến checkout
        session(['back_book' => url()->previous()]);

        $book = Course::findOrFail($id);
        return view('user.checkout', compact('book'));
    }
    public function showBookDetail($id){
        $book = Course::findOrFail($id);
        return view('user.detail', compact('book'));
    }

    // Xử lý thanh toán
    public function processCheckout(Request $request, $id)
    {
        $book = Course::findOrFail($id);

        if ($book->soluong > 0) {
            $book->decrement('soluong');
            if (Auth::check()) {
                Order::create([
                    'user_id' => Auth::id(),
                    'course_id' => $book->id,
                    'quantity' => 1,
                    'total_price' => $book->giatien,
                ]);
            }
            // Lưu tên sách và đường quay lại
            session()->flash('success_book_name', $book->tensach);
            session()->flash('back_url', url()->previous());

            return view('user.success');
        }

        return back()->with('error', 'Sách đã hết hàng!');
    }

    // Giao diện sau khi thanh toán thành công
    public function success()
    {
        return view('user.success');
    }
    public function order()
    {
        $orders = Order::with('course') // eager load sách
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user.order', compact('orders'));
    }
}
