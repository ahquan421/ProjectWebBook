@extends('layout')

@section('content')
<h2>🧾 Danh sách đơn hàng của bạn</h2>

@foreach ($orders as $order)
    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $order->course->tensach }}</h5>
            <p><strong>Tác giả:</strong> {{ $order->course->tacgia }}</p>
            <p><strong>Số lượng:</strong> {{ $order->quantity }}</p>
            <p><strong>Tổng tiền:</strong> {{ number_format($order->total_price) }}đ</p>
            <p><strong>Thời gian:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>
@endforeach
@endsection
