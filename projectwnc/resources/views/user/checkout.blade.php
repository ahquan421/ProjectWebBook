@extends('layout')

@section('content')
<div class="container mt-4">

    <!-- Nút quay lại -->
    <div class="mb-3">
        <a href="{{ session('back_book', route('home')) }}" class="btn btn-outline-secondary">🔙 Quay lại</a>
    </div>

    <h2 class="mb-4">🛒 Thanh toán sách</h2>

    <div class="card p-4 shadow-sm">
        <div class="row">
            <div class="col-md-4 text-center">
                <!-- Ảnh sách -->
                <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid mb-3" style="max-height: 300px; object-fit: cover;">
            </div>

            <div class="col-md-8">
                <!-- Thông tin sách -->
                <h4>{{ $book->tensach }}</h4>
                <p><strong>Tác giả:</strong> {{ $book->tacgia }}</p>
                <p><strong>Giá:</strong> <span class="text-primary" id="gia">{{ $book->giatien }}</span>₫</p>
                <p><strong>Số lượng còn:</strong> {{ $book->soluong }}</p>

                <!-- Form Thanh toán -->
                <form method="POST" action="{{ route('checkout.process', $book->id) }}">
                    @csrf

                    <!-- Số lượng mua -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label"><strong>Số lượng muốn mua:</strong></label>
                        <input type="number" name="quantity" id="quantity" class="form-control" min="1" max="{{ $book->soluong }}" value="1" required>
                    </div>

                    <!-- Mã giảm giá -->
                    <div class="mb-3">
                        <label for="coupon" class="form-label"><strong>Mã giảm giá:</strong></label>
                        <input type="text" name="coupon" id="coupon" class="form-control" placeholder="Nhập mã">
                    </div>

                    <!-- Thành tiền -->
                    <div class="mb-3">
                        <label class="form-label"><strong>Thành tiền:</strong></label>
                        <p class="fs-5"><span id="thanhTien"></span> ₫</p>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">✅ Thanh toán</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const gia = {{ $book->giatien }};
    const quantityInput = document.getElementById('quantity');
    const couponInput = document.getElementById('coupon');
    const thanhTienElement = document.getElementById('thanhTien');

    function updateThanhTien() {
        let qty = parseInt(quantityInput.value) || 1;
        let total = gia * qty;

        if (couponInput.value.trim().toUpperCase() === 'WNC') {
            total = total * 0.9; // Giảm 10%
        }

        thanhTienElement.textContent = total.toLocaleString();
    }

    quantityInput.addEventListener('input', updateThanhTien);
    couponInput.addEventListener('input', updateThanhTien);

    window.addEventListener('DOMContentLoaded', updateThanhTien);
</script>
@endsection
