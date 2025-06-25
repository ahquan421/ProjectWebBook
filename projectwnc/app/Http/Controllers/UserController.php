<?php
namespace App\Http\Controllers;
use App\Models\Cart;
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
    public function processCheckout(Request $request, $id){
        $book = Course::findOrFail($id);

    // Lấy số lượng và mã giảm giá từ form
        $quantity = (int) $request->input('quantity', 1);
        $coupon = strtoupper(trim($request->input('coupon')));
        if ($quantity < 1 || $quantity > $book->soluong) {
            return back()->with('error', 'Số lượng không hợp lệ hoặc vượt quá tồn kho!');
    }
        $price = $book->giatien;
        $total = $price * $quantity;
    // Giảm giá nếu có mã hợp lệ
        if ($coupon === 'COLIEN') {
             $total *= 0.9; 
        }
        $book->decrement('soluong', $quantity);
        if (Auth::check()) {
             Order::create([
                'user_id'     => Auth::id(),
                'course_id'   => $book->id,
                'quantity'    => $quantity,
                'total_price' => $total,
            ]);
        }

        session()->flash('success_book_name', $book->tensach);
        session()->flash('back_url', url()->previous());

        return view('user.success');
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
    public function addToCart($id){
        $userId = Auth::id();

    // Kiểm tra 
        $exists = Cart::where('user_id', $userId)->where('course_id', $id)->exists();

         if (!$exists) {
            Cart::create([
                'user_id' => $userId,
                'course_id' => $id,
            ]);
        }
        return back()->with('success', 'Đã thêm vào giỏ hàng!');
    }
    public function showCart()
    {   
        $cartItems = Cart::with('course')->where('user_id', Auth::id())->get();

     return view('user.cart', compact('cartItems'));
    }
    public function removeFromCart($id)
    {
        $cart = Cart::where('id', $id)->where('user_id', Auth::id())->first();
        if ($cart) {
            $cart->delete();
        }

        return redirect()->route('cart.show')->with('success', 'Đã xóa khỏi giỏ hàng');
    }
}
