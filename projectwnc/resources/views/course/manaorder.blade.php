@extends('layouts.app')

@section('content')

<div class="main-layout">
    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Quản lý đơn hàng</h2>
            <div class="search-container">
                <input class="searchInput" type="text" id="searchInput" placeholder="Tìm kiếm...">
            </div>
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
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody id="orderTable">
                    @foreach($orders as $index => $order)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order->username }}</td>
                            <td>{{ $order->masach }}</td>
                            <td>{{ $order->tensach }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ number_format($order->total_price) }} VNĐ</td>
                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('H:i d/m/Y') }}</td>
                            <td>
                                <button class="status-button" data-index="{{ $index }}" id="status-button-{{ $index }}">
                                    @if (isset($order->status) && $order->status == 'Hoàn tất')
                                        Hoàn tất
                                    @elseif (isset($order->status) && $order->status == 'Đang giao hàng')
                                        Đang giao hàng
                                    @else
                                        Đang xử lý
                                    @endif
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll("#orderTable tr");

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });


    const buttons = document.querySelectorAll('.status-button');

    buttons.forEach(button => {
        const index = button.getAttribute('data-index');
        const savedStatus = localStorage.getItem('buttonStatus_' + index);
        
        if (savedStatus) {
            button.innerText = savedStatus;
            if (savedStatus === "Hoàn tất") {
                button.disabled = true;
            }
        }

        button.addEventListener('click', function () {
            if (this.innerText === "Đang xử lý") {
                this.innerText = "Đang giao hàng";
            } else if (this.innerText === "Đang giao hàng") {
                this.innerText = "Hoàn tất";
                this.disabled = true;
            }

            localStorage.setItem('buttonStatus_' + index, this.innerText);
        });
    });
</script>