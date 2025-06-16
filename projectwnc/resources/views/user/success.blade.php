@extends('layout')

@section('content')
<div class="container text-center mt-5">
    <div class="alert alert-success p-5">
        <h2 class="mb-3">🎉 Thanh toán thành công!</h2>

        @if (session('success_book_name'))
            <p class="lead">Bạn đã mua sách: <strong>{{ session('success_book_name') }}</strong></p>
        @endif

        <p class="text-muted">Cảm ơn bạn đã mua sách. Mời bạn tiếp tục mua sắm!</p>

        <div class="mt-4">
            <a href="{{ session('back_url', route('home')) }}" class="btn btn-primary me-2">🔙 Quay lại trang trước</a>
            <a href="{{ route('home') }}" class="btn btn-outline-secondary">🏠 Về trang chủ</a>
        </div>
    </div>
</div>
@endsection
