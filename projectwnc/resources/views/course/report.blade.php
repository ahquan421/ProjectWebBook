@extends('layouts.app')

@section('content')

<div class="main-layout">
    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Thống kê & Báo cáo</h2>
        </div>
        <div class="thongtinchung">
            <a href="{{ route('course.manaorder') }}" class="soluong">
                <div class="fw-bold">Số lượng bán</div>
                <h3>{{ number_format($totalSold) }}</h3>
            </a>
            <div class="tongthu">
                <div class="fw-bold">Tổng thu</div>
                <h3>{{ number_format($totalIncome) }} VNĐ</h3>
            </div>
            <div class="doanhthu">
                <div class="fw-bold">Doanh thu (20%)</div>
                <h3>{{ number_format($commission) }} VNĐ</h3>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <div class="bieudo">
            <div class="khtn">
                <h5 class="text-center">Khách hàng tiềm năng</h5>
                <canvas id="topBuyersChart" height="280"></canvas>
                <ul class="mt-3">
                    @foreach ($topBuyers as $buyer)
                        <li>{{ $loop->iteration }}. {{ $buyer->username }} - {{ $buyer->total }} cuốn</li>
                    @endforeach
                </ul>
            </div>
            <div class="sbcn">
                <h5 class="text-center">Sách bán chạy nhất</h5>
                <canvas id="topBooksChart" height="280"></canvas>
                <ul class="mt-3">
                    @foreach ($topBooks as $book)
                        <li>{{ $loop->iteration }}. {{ $book->masach }} - {{ $book->total }} lượt mua</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <script>
            const topBuyersLabels = <?php echo json_encode($topBuyers->pluck('username')->toArray()); ?>;
            const topBuyersData = <?php echo json_encode($topBuyers->pluck('total')->toArray()); ?>;

            const topBooksLabels = <?php echo json_encode($topBooks->pluck('masach')->toArray()); ?>;
            const topBooksData = <?php echo json_encode($topBooks->pluck('total')->toArray()); ?>;

            const buyersCtx = document.getElementById('topBuyersChart').getContext('2d');
            const booksCtx = document.getElementById('topBooksChart').getContext('2d');

            new Chart(buyersCtx, {
                type: 'bar',
                data: {
                    labels: topBuyersLabels,
                    datasets: [{
                        label: 'Số cuốn đã mua',
                        data: topBuyersData,
                        backgroundColor: 'rgba(4, 21, 170, 0.79)'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { display: false }},
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            new Chart(booksCtx, {
                type: 'bar',
                data: {
                    labels: topBooksLabels,
                    datasets: [{
                        label: 'Số lượt mua',
                        data: topBooksData,
                        backgroundColor: 'rgba(7, 191, 28, 0.82)'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { display: false }},
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        
    </div>
</div>

<style>
    .fw-bold{
        color: black;
        font-size: 17px;
    }
    .soluong{
        border-radius: 10px;
        background-color: #ffffff; 
        box-shadow: 0 2px 5px rgba(0.15,0.15,0.15,0.15);
        text-align: center;
        font-size: 30px;
        color: black;
        text-decoration: none;
        padding-top: 15px;
        transition: all 0.3s ease;
        border-bottom: 4px solid rgb(1, 0, 40);

    }
    .soluong:hover {
        box-shadow: 0 2px 2px rgba(1, 6, 35, 0.35);
        background-color: rgb(246, 247, 249);
    }
    .tongthu{
        border-radius: 10px;
        background-color: #ffffff; 
        box-shadow: 0 2px 5px rgba(0.15,0.15,0.15,0.15);
        text-align: center;
        color: blue;
        padding-top: 15px;
        font-size: 30px;
        transition: all 0.3s ease;
        border-bottom: 4px solid rgb(24, 19, 166);
    }
    .tongthu:hover {
        box-shadow: 0 2px 2px rgba(1, 6, 35, 0.35);
        background-color: rgb(246, 247, 249);
    }
    .doanhthu{
        border-radius: 10px;
        background-color: #ffffff; 
        box-shadow: 0 2px 5px rgba(0.15,0.15,0.15,0.15);
        text-align: center;
        padding-top: 15px;
        color: green;
        font-size: 30px;
        transition: all 0.3s ease;
        border-bottom: 4px solid rgb(0, 125, 0);
    }
    .doanhthu:hover {
        box-shadow: 0 2px 2px rgba(1, 6, 35, 0.35);
        background-color: rgb(246, 247, 249);
    }


    .thongtinchung {
        margin-top: 68px;
        display: grid;
        margin-left: 15px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        width: 90%;
        font-weight: bold;
    }

    .text-center{
        font-size: 15px;
    }
    .bieudo{
        display: flex;
        gap: 10px;
        padding: 0px 0px 0px 20px;
        width: 90%;
        margin-left: 10px;
        box-sizing: border-box;
        justify-content: space-between;
    }
    .chart-container {
        width: 100%;
        max-width: 100%;
        height: 300px;
    }
    .khtn{
        width: 50%;
    }
    .sbcn{
        width: 50%;
    }

    canvas {
        max-height: 400px !important;
        max-width: 100% !important;
    }
</style>