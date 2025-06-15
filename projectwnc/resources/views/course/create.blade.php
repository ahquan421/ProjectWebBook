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
        <div class="tieudechinh">
            <h2 class="tieude">Thêm sách mới</h2>
        </div>
        
        <form method="post" action="{{ route('course.store') }}" enctype="multipart/form-data" class="main-show">
            @csrf
            <div class="ttct">
                <div class="left-column">
                    <div class="img">
                        <div>
                            <input type="file" name="anhminhhoa" required>
                        </div>
                        <div class="tacvu">
                            <div class="mt-4 text-end">
                                <a href="{{ route('course.index') }}" class="button-link">
                                    Quay lại
                                </a>
                            </div>
                            <a href="#">
                                <button type="submit" class="confirm">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0Z"></path></svg>
                                    Xác nhận
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="right-column">
                    <div class="book-details">
                        <div class="detail-left">
                            
                            <div>
                                <label for="masach">Mã sách: </label>
                                <input type="text" name="masach" required>
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
                                <label for="soluong">Số lượng: </label>
                                <input type="text" name="soluong" required>
                            </div>
                            <div>
                                <label for="trongluong">Trọng lượng: </label>
                                <input type="text" name="trongluong" required>
                            </div>
                            <div>
                                <label for="sotrang">Số trang: </label>
                                <input type="text" name="sotrang" required>
                            </div>
                            <div>
                                <label for="ngonngu">Ngôn ngữ: </label>
                                <input type="text" name="ngonngu" required>
                            </div>
                        </div>
                        <div class="detail-right">
                            <div>
                                <label for="tensach">Tên sách: </label>
                                <input type="text" name="tensach" required>
                            </div>
                            <div>
                                <label for="giatien">Giá tiền: </label>
                                <input type="text" name="giatien" required>
                            </div>
                            <div>
                                <label for="mota">Mô tả sản phẩm: </label>
                                <textarea class="mota" type="text" name="mota" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection