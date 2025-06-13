@extends('layouts.app')

@section('content')

{{-- Day la phuong phap them csdl 
<form method="post" action="{{ 'course.store' }}"></form>
--}}
<div class="main-layout">

    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <h2 class="tieude">Thêm sách mới</h2>
        <form method="post" action="{{ route('course.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="tensach">Tên sách: </label>
                <input type="text" name="tensach" required>
            </div>
            <div>
                <label for="tacgia">Tác giả: </label>
            <input type="text" name="tacgia" required>
            </div>
            <div>
                <label for="nxb">Nhà xuất bản: </label>
            <input type="text" name="nxb" required>
            </div>
            <div>
                <label for="theloai">Thể loại: </label>
            <input type="text" name="theloai" required>
            </div>
            <div>
                <label for="giatien">Giá tiền: </label>
            <input type="text" name="giatien" required>
            </div>
            <div>
                <label for="soluong">Số lượng: </label>
            <input type="text" name="soluong" required>
            </div>
            <div>
                <label for="anhminhhoa">Ảnh minh họa: </label>
            <input type="file" name="anhminhhoa" required>
            </div>
            <div class="mt-4 text-end">
                <a href="{{ route('course.index') }}" class="button-link">
                    Quay lại
                </a>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>


@endsection