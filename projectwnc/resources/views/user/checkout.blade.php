@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Thanh toán sách</h2>

    <div class="card p-4 shadow-sm">
        <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="img-fluid mb-3" style="max-height: 300px;">
        <h4>{{ $book->tensach }}</h4>
        <p><strong>Tác giả:</strong> {{ $book->tacgia }}</p>
        <p><strong>Giá:</strong> {{ number_format($book->giatien) }}₫</p>
        <p><strong>Còn lại:</strong> {{ $book->soluong }}</p>

        <form method="POST" action="{{ route('checkout.process', $book->id) }}">
            @csrf
            <button type="submit" class="btn btn-success">Thanh toán</button>
        </form>
    </div>
</div>
@endsection
