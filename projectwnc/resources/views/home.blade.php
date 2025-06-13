@extends('layout')

@section('content')
<div class="container">

    <!-- 📚 Sách mới -->
    <h2>📚 Sách mới</h2>
    <div class="row">
        @foreach ($newBooks as $book)
            <div class="col-md-2 text-center mb-4">
                <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid" style="height: 250px; object-fit: cover;">
                <h6 class="mt-2">{{ $book->tensach }}</h6>
                <small>Tác giả: {{ $book->tacgia }}</small><br>
                <strong class="text-primary">{{ number_format($book->giatien) }}đ</strong>
            </div>
        @endforeach
    </div>

    <!-- ⚡ Sách giảm giá -->
    <h2 class="mt-5">⚡ Sách giảm giá</h2>
    <div class="row">
        @foreach ($discountedBooks as $book)
            <div class="col-md-2 text-center mb-4">
                <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid" style="height: 250px; object-fit: cover;">
                <h6 class="mt-2">{{ $book->tensach }}</h6>
                <small>Tác giả: {{ $book->tacgia }}</small><br>
                <strong class="text-danger">{{ number_format($book->giatien) }}đ</strong>
            </div>
        @endforeach
    </div>

    <!-- 🧨 Sách sắp hết hàng -->
    <h2 class="mt-5">🧨 Sách sắp hết hàng</h2>
    <div class="row">
        @foreach ($almostOutBooks as $book)
            <div class="col-md-2 text-center mb-4">
                <span class="badge bg-danger position-absolute">Còn {{ $book->soluong }}</span>
                <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid" style="height: 250px; object-fit: cover;">
                <h6 class="mt-2">{{ $book->tensach }}</h6>
                <small>Tác giả: {{ $book->tacgia }}</small><br>
                <strong>{{ number_format($book->giatien) }}đ</strong>
            </div>
        @endforeach
    </div>

    <!-- 🌟 Sách nổi bật -->
    <h2 class="mt-5">🌟 Sách nổi bật</h2>
    <div class="row">
        @foreach ($featuredBooks as $book)
            <div class="col-md-2 text-center mb-4">
                <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid" style="height: 250px; object-fit: cover;">
                <h6 class="mt-2">{{ $book->tensach }}</h6>
                <small>Tác giả: {{ $book->tacgia }}</small><br>
                <strong>{{ number_format($book->giatien) }}đ</strong>
            </div>
        @endforeach
    </div>

</div>
@endsection
