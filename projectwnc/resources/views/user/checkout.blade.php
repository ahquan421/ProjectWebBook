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
                <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid mb-3" style="max-height: 300px;">
            </div>
            <div class="col-md-8">
                <h4>{{ $book->tensach }}</h4>
                <p><strong>Tác giả:</strong> {{ $book->tacgia }}</p>
                <p><strong>Giá:</strong> <span class="text-primary">{{ number_format($book->giatien) }}₫</span></p>
                <p><strong>Số lượng còn:</strong> {{ $book->soluong }}</p>

                <form method="POST" action="{{ route('checkout.process', $book->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-success mt-3">✅ Thanh toán</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
