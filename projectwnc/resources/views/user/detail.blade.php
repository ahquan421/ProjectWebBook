@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row">
        {{-- Cột trái: ảnh sách --}}
        <div class="col-md-4">
            <img src="{{ asset('images/' . $book->anhminhhoa) }}" 
                 class="img-fluid shadow rounded mb-3" 
                 alt="{{ $book->tensach }}" 
                 style="height: 350px; object-fit: cover;">
        </div>

        {{-- Cột phải: thông tin sách --}}
        <div class="col-md-8">
            <h2 class="mb-3 text-primary">{{ $book->tensach }}</h2>
            <p><strong>📚 Nhà xuất bản:</strong> {{ $book->nxb }}</p>
            <p><strong>✍️ Tác giả:</strong> {{ $book->tacgia }}</p>
            <p><strong>🏷️ Thể loại:</strong> {{ $book->theloai }}</p>

            <h4 class="text-danger mt-3">💰 {{ number_format($book->giatien) }} ₫</h4>
            <p><strong>📦 Số lượng còn:</strong> {{ $book->soluong }}</p>

            <div class="d-flex gap-3 mt-4">
                {{-- Nút mua ngay --}}
                <form action="{{ route('checkout.show', $book->id) }}" method="GET">
                    <button class="btn btn-danger btn-lg">🛒 Mua ngay</button>
                </form>

                {{-- Nút thêm vào giỏ hàng --}}
                <form method="POST" action="{{ route('cart.add', $book->id) }}">
                    @csrf
                    <button class="btn btn-warning btn-lg">➕ Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Thông tin chi tiết --}}
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="text-secondary">📘 Thông tin chi tiết</h4>
            <table class="table table-bordered mt-3">
                <tr><th>Tên sách</th><td>{{ $book->tensach }}</td></tr>
                <tr><th>Tác giả</th><td>{{ $book->tacgia }}</td></tr>
                <tr><th>Thể loại</th><td>{{ $book->theloai }}</td></tr>
                <tr><th>Nhà xuất bản</th><td>{{ $book->nxb }}</td></tr>
                <tr><th>Giá bán</th><td>{{ number_format($book->giatien) }} ₫</td></tr>
                <tr><th>Số lượng còn lại</th><td>{{ $book->soluong }}</td></tr>
                <tr><th>Ngôn ngữ</th><td>{{ $book->ngonngu }}</td></tr>
                <tr><th>Trọng lượng</th><td>{{ $book->trongluong }} g</td></tr>
                <tr><th>Số trang</th><td>{{ $book->sotrang }}</td></tr>
                <tr><th>Mô tả</th><td>{{ $book->mota }}</td></tr>
            </table>
        </div>
    </div>
</div>
@endsection
