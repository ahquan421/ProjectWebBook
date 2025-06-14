@extends('layouts.app')

@section('content')

<div class="main-layout">
    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Chỉnh sửa chi tiết sách</h2>
        </div>
        
        {{-- Day la phuong phap them csdl 
        <form method="post" action="{{ 'course.store' }}"></form>
        --}}
        <form method="post" action="{{ route('course.update',$course->id) }}" class="thongtin-table">
            @csrf
            @method('PUT') {{-- -Đưa dữ liệu vào máy chủ --}}
            <div>
                <label for="tensach">Tên sách: </label>
                <input type="text" name="tensach" value="{{$course->tensach}}" required/>
            </div>
            <div>
                <label for="tacgia">Tác giả: </label>
            <input type="text" name="tacgia" value="{{$course->tacgia}}" required/>
            </div>
            <div>
                <label for="nxb">Nhà xuất bản: </label>
            <input type="text" name="nxb" value="{{$course->nxb}}" required/>
            </div>
            <div>
                <label for="theloai">Thể loại: </label>
            <input type="text" name="theloai" value="{{$course->theloai}}" required/>
            </div>
            <div>
                <label for="giatien">Giá tiền: </label>
            <input type="text" name="giatien" value="{{$course->giatien}}" required/>
            </div>
            <div>
                <label for="soluong">Số lượng: </label>
            <input type="text" name="soluong" value="{{$course->soluong}}" required/>
            </div>
            <div>
                <label for="anhminhhoa">Ảnh minh họa: </label>
            <input type="file" name="anhminhhoa" value="{{$course->anhminhhoa}}" required/>
            </div>
            
            <div class="mt-4 text-end">
                
                <a href="{{ route('course.show', $course->id) }}" class="button-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12">
                        <path d="M3.587 6.025c0 .2.1.4.2.5l3.3 3.3c.3.3.8.3 1.1 0 .3-.3.3-.8 0-1.1l-2.7-2.7 2.7-2.7c.3-.3.3-.8 0-1.1-.3-.3-.8-.3-1.1 0l-3.2 3.2c-.2.2-.3.4-.3.6Z"></path>
                    </svg> 
                    Quay lại
                </a>
                <a href="#">
                    <button type="submit" class="confirm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0Z"></path></svg>
                        Xác nhận
                    </button>
                </a>
                
            </div>
        </form>
    </div>
</div>

@endsection