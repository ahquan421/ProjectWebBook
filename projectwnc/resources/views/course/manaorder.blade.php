@extends('layouts.app')

@section('content')

<div class="main-layout">
    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Quản lý đơn hàng</h2>
        </div>
        
        <div class="noidung">
            <table id="trangqly" class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>STT</th>
                        <th>Người mua</th>
                        <th>Mã sách</th>
                        <th>Tên sách</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th>
                        <th>Thời gian đặt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index => $order)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order->username }}</td>
                            <td>{{ $order->masach }}</td>
                            <td>{{ $order->tensach }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ number_format($order->total_price) }} VNĐ</td>
                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('H:i d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
