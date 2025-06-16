@extends('layout')

@section('content')
<div class="container">

    <!-- 📚 Sách mới -->
    <h2>📚 Sách mới</h2>
    <div class="row">
        @foreach ($newBooks as $book)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="{{ route('checkout.show', $book->id) }}">
                        <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->tensach }}</h5>
                        <p class="card-text">
                            <strong>Tác giả:</strong> {{ $book->tacgia }}<br>
                            <strong>Giá:</strong> {{ number_format($book->giatien) }}đ
                        </p>
                        <a href="{{ route('checkout.show', $book->id) }}" class="btn btn-primary">🛒 Mua ngay</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- ⚡ Sách giảm giá -->
    <h2 class="mt-5">⚡ Sách giảm giá</h2>
    <div class="row">
        @foreach ($discountedBooks as $book)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="{{ route('checkout.show', $book->id) }}">
                        <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->tensach }}</h5>
                        <p class="card-text">
                            <strong>Tác giả:</strong> {{ $book->tacgia }}<br>
                            <strong>Giá:</strong> <span class="text-danger">{{ number_format($book->giatien) }}đ</span>
                        </p>
                        <a href="{{ route('checkout.show', $book->id) }}" class="btn btn-primary">🛒 Mua ngay</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 🧨 Sách sắp hết hàng -->
    <h2 class="mt-5">🧨 Sách sắp hết hàng</h2>
    <div class="row">
        @foreach ($almostOutBooks as $book)
            <div class="col-md-3 mb-4 position-relative">
                <div class="card h-100 shadow-sm">
                    <a href="{{ route('checkout.show', $book->id) }}">
                        <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    </a>
                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">Còn {{ $book->soluong }}</span>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->tensach }}</h5>
                        <p class="card-text">
                            <strong>Tác giả:</strong> {{ $book->tacgia }}<br>
                            <strong>Giá:</strong> {{ number_format($book->giatien) }}đ
                        </p>
                        <a href="{{ route('checkout.show', $book->id) }}" class="btn btn-primary">🛒 Mua ngay</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 🌟 Sách nổi bật -->
    <h2 class="mt-5">🌟 Sách nổi bật</h2>
    <div class="row">
        @foreach ($featuredBooks as $book)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="{{ route('checkout.show', $book->id) }}">
                        <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->tensach }}</h5>
                        <p class="card-text">
                            <strong>Tác giả:</strong> {{ $book->tacgia }}<br>
                            <strong>Giá:</strong> {{ number_format($book->giatien) }}đ
                        </p>
                        <a href="{{ route('checkout.show', $book->id) }}" class="btn btn-primary">🛒 Mua ngay</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
