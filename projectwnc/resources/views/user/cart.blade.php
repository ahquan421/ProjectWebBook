@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-primary">🛒 GIỎ HÀNG ({{ count($cartItems) }} sản phẩm)</h2>

    @if ($cartItems->isEmpty())
        <div class="alert alert-info">Chưa có sách nào trong giỏ hàng.</div>
    @else
        <div class="row row-cols-1 row-cols-md-1 g-4">
            @foreach ($cartItems as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            {{-- Ảnh minh họa --}}
                            <div class="me-4">
                                <img src="{{ asset('images/' . $item->course->anhminhhoa) }}" 
                                     class="img-thumbnail"
                                     alt="{{ $item->course->tensach }}"
                                     style="width: 120px; height: 160px; object-fit: cover;">
                            </div>

                            {{-- Thông tin sách --}}
                            <div class="flex-grow-1">
                                <h5 class="mb-1">{{ $item->course->tensach }}</h5>
                                <p class="mb-2 text-danger fw-bold" style="font-size: 1.2rem;">
                                    {{ number_format($item->course->giatien) }} ₫
                                </p>

                                {{-- Nút xóa và thanh toán --}}
                                <div class="d-flex gap-2">
                                    <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm">🗑 Xóa</button>
                                    </form>

                                    <form method="GET" action="{{ route('checkout.show', $item->course->id) }}">
                                        <button class="btn btn-success btn-sm">💳 Thanh toán</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
