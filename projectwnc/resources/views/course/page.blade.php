

@extends('layouts.app') 

@section('content')

<div class="main-layout"> 

    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Trang chủ Admin</h2>
        </div>
        
        <div class="card-grid">
        <a href="{{ route('course.page') }}" class="dashboard-card">
            <svg class="icon-hover" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#0e8700" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg>

            <span>Trang chủ</span>
        </a>
        <a href="{{ route('course.index') }}" class="dashboard-card">
            <svg class="icon-hover" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#cc6a01" viewBox="0 0 256 256"><path d="M231.65,194.55,198.46,36.75a16,16,0,0,0-19-12.39L132.65,34.42a16.08,16.08,0,0,0-12.3,19l33.19,157.8A16,16,0,0,0,169.16,224a16.25,16.25,0,0,0,3.38-.36l46.81-10.06A16.09,16.09,0,0,0,231.65,194.55ZM136,50.15c0-.06,0-.09,0-.09l46.8-10,3.33,15.87L139.33,66Zm6.62,31.47,46.82-10.05,3.34,15.9L146,97.53Zm6.64,31.57,46.82-10.06,13.3,63.24-46.82,10.06ZM216,197.94l-46.8,10-3.33-15.87L212.67,182,216,197.85C216,197.91,216,197.94,216,197.94ZM104,32H56A16,16,0,0,0,40,48V208a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V48A16,16,0,0,0,104,32ZM56,48h48V64H56Zm0,32h48v96H56Zm48,128H56V192h48v16Z"></path></svg>

            <span>Quản lý sách</span>
        </a>
        <a href="{{ route('course.manauser') }}" class="dashboard-card">
            <svg class="icon-hover" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#006eff" viewBox="0 0 256 256"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>


            <span>Quản lý người dùng</span>
        </a>
        <a href="{{ route('course.manaorder') }}" class="dashboard-card">
            <svg class="icon-hover"class="icon-hover" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#ffb700" class="bi bi-truck" viewBox="0 0 16 16">
            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
            </svg>

            <span>Quản lý đơn hàng</span>
        </a>
        <a href="{{ route('course.report') }}" class="dashboard-card">
            
            <svg class="icon-hover" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#ff0000" class="bi bi-bar-chart" viewBox="0 0 16 16">
            <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"/>
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
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 190px;
    height: 190px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 2px 5px rgba(6, 14, 161, 0.27);
    text-decoration: none;
    color:rgb(26, 26, 26);
    padding: 16px;
    border-bottom: 6px solid rgb(24, 19, 166);
    transition: all 0.3s ease;
}


.dashboard-card span {
    font-size: 18px;
    font-weight: 600;
}

.dashboard-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(2, 25, 153, 0.64);
    background-color: rgb(232, 236, 243);
}


.icon-hover:hover {
    transform: scale(1.05); 
    transition: all 0.3s ease;
}

</style>
@endsection
