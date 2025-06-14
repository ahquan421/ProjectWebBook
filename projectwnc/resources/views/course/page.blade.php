<!-- resources/views/home.blade.php -->

@extends('layouts.app') <!-- hoặc layout bạn đang dùng -->

@section('content')

<div class="main-layout"> {{-- ✅ THÊM lớp bọc chia cột --}}

    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Trang chủ Admin</h2>
        </div>
        
        <div class="card-grid">
        <a href="{{ route('course.page') }}" class="dashboard-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="green"><path d="M12.5812 2.68627C12.2335 2.43791 11.7664 2.43791 11.4187 2.68627L1.9187 9.47198L3.08118 11.0994L11.9999 4.7289L20.9187 11.0994L22.0812 9.47198L12.5812 2.68627ZM19.5812 12.6863L12.5812 7.68627C12.2335 7.43791 11.7664 7.43791 11.4187 7.68627L4.4187 12.6863C4.15591 12.874 3.99994 13.177 3.99994 13.5V20C3.99994 20.5523 4.44765 21 4.99994 21H18.9999C19.5522 21 19.9999 20.5523 19.9999 20V13.5C19.9999 13.177 19.844 12.874 19.5812 12.6863Z"></path>
            </svg>

            <span>Trang chủ</span>
        </a>
        <a href="{{ route('course.index') }}" class="dashboard-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue"><path d="M21 18H6C5.44772 18 5 18.4477 5 19C5 19.5523 5.44772 20 6 20H21V22H6C4.34315 22 3 20.6569 3 19V4C3 2.89543 3.89543 2 5 2H21V18ZM16 9V7H8V9H16Z"></path>
            </svg>

            <span>Quản lý sách</span>
        </a>
        <a href="{{ route('course.manauser') }}" class="dashboard-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="purple"><path d="M5.23379 7.72989C6.65303 5.48625 9.15342 4 12.0002 4C14.847 4 17.3474 5.48625 18.7667 7.72989L20.4569 6.66071C18.6865 3.86199 15.5612 2 12.0002 2C8.43928 2 5.31393 3.86199 3.54356 6.66071L5.23379 7.72989ZM12.0002 20C9.15342 20 6.65303 18.5138 5.23379 16.2701L3.54356 17.3393C5.31393 20.138 8.43928 22 12.0002 22C15.5612 22 18.6865 20.138 20.4569 17.3393L18.7667 16.2701C17.3474 18.5138 14.847 20 12.0002 20ZM12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12ZM12 13C14.2091 13 16 14.7909 16 17H8C8 14.7909 9.79086 13 12 13ZM6 12C6 13.6569 4.65685 15 3 15C1.34315 15 0 13.6569 0 12C0 10.3431 1.34315 9 3 9C4.65685 9 6 10.3431 6 12ZM21 15C22.6569 15 24 13.6569 24 12C24 10.3431 22.6569 9 21 9C19.3431 9 18 10.3431 18 12C18 13.6569 19.3431 15 21 15Z"></path>
            </svg>

            <span>Quản lý người dùng</span>
        </a>
        <a href="{{ route('course.manaorder') }}" class="dashboard-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="orange"><path d="M8.96456 18C8.72194 19.6961 7.26324 21 5.5 21C3.73676 21 2.27806 19.6961 2.03544 18H1V6C1 5.44772 1.44772 5 2 5H16C16.5523 5 17 5.44772 17 6V8H20L23 12.0557V18H20.9646C20.7219 19.6961 19.2632 21 17.5 21C15.7368 21 14.2781 19.6961 14.0354 18H8.96456ZM15 7H3V15.0505C3.63526 14.4022 4.52066 14 5.5 14C6.8962 14 8.10145 14.8175 8.66318 16H14.3368C14.5045 15.647 14.7296 15.3264 15 15.0505V7ZM17 13H21V12.715L18.9917 10H17V13ZM17.5 19C18.1531 19 18.7087 18.5826 18.9146 18C18.9699 17.8436 19 17.6753 19 17.5C19 16.6716 18.3284 16 17.5 16C16.6716 16 16 16.6716 16 17.5C16 17.6753 16.0301 17.8436 16.0854 18C16.2913 18.5826 16.8469 19 17.5 19ZM7 17.5C7 16.6716 6.32843 16 5.5 16C4.67157 16 4 16.6716 4 17.5C4 17.6753 4.03008 17.8436 4.08535 18C4.29127 18.5826 4.84689 19 5.5 19C6.15311 19 6.70873 18.5826 6.91465 18C6.96992 17.8436 7 17.6753 7 17.5Z"></path>
            </svg>

            <span>Quản lý đơn hàng</span>
        </a>
        <a href="{{ route('course.report') }}" class="dashboard-card">
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red"><path d="M2 12H4V21H2V12ZM5 14H7V21H5V14ZM16 8H18V21H16V8ZM19 10H21V21H19V10ZM9 2H11V21H9V2ZM12 4H14V21H12V4Z"></path>
            </svg>

            <span>Thống kê & Báo cáo</span>
        </a>
    </div>
</div> 
<style>
.card-grid {
    margin-top: 62px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
    width: 90%;
    
}

.dashboard-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 190px;
    height: 190px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    text-decoration: none;
    color:rgb(26, 26, 26);
    padding: 16px;
    transition: all 0.3s ease;
}

.dashboard-card img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 12px;
}

.dashboard-card span {
    font-size: 16px;
    font-weight: 600;
}

.dashboard-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 16px rgba(55, 44, 248, 0.2);
    background-color: rgb(232, 236, 243);
}

</style>
@endsection
