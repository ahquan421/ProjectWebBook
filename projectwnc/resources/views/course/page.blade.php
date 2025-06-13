<!-- resources/views/home.blade.php -->

@extends('layouts.app') <!-- hoặc layout bạn đang dùng -->

@section('content')

<div class="main-layout"> {{-- ✅ THÊM lớp bọc chia cột --}}

    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <h2 class="tieude">Trang chủ Admin</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <a href="{{ route('course.index') }}">
                    Quản lý sách
                </a>
            </div>
            
        </div>        
    </div>

    
</div> {{-- ✅ KẾT THÚC layout --}}
@endsection
