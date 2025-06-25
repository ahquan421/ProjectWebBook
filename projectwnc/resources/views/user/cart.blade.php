@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-primary">🛒 GIỎ HÀNG ({{ count($cartItems) }} sản phẩm)</h2>

    @if ($cartItems->isEmpty())
        <div class="alert alert-info">Chưa có sách nào trong giỏ hàng.</div>
    @else
        <div class="row row-cols-1 g-4">
            @foreach ($cartItems as $item)
                <div class="col">
                    <div class="card p-3 shadow-sm">
                        <div class="d-flex justify-content-between align-items-center">
                            
                            {{-- Bên trái: ảnh, tên sách, giá --}}
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/' . $item->course->anhminhhoa) }}"
                                     class="rounded me-3"
                                     alt="{{ $item->course->tensach }}"
                                     style="width: 100px; height: 140px; object-fit: cover;">
                                <div>
                                    <h5 class="mb-1">{{ $item->course->tensach }}</h5>
                                    <p class="mb-0 text-danger fw-bold fs-5">
                                        {{ number_format($item->course->giatien) }} ₫
                                    </p>
                                </div>
                            </div>

                            {{-- Bên phải: nút ngang hàng --}}
                            <div class="d-flex flex-row gap-2">
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
            @endforeach
        </div>
    @endif
</div>
@endsection
