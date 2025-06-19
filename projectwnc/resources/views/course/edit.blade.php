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
        
        <form method="post" action="{{ route('course.update', $course->id) }}" enctype="multipart/form-data" class="main-show">
            @csrf
            @method('PUT')

            <div class="ttct">
                <div class="left-column">
                    <div class="img">
                        <div>
                            <p>
                                <img src="{{ asset('images/' . $course->anhminhhoa) }}" alt="Ảnh minh họa" width="80" height="auto">
                            </p>
                            <input type="file" name="anhminhhoa" >
                        </div>
                        <div class="tacvu">
                            <div class="mt-4 text-end">
                                <a href="{{ route('course.show', $course->id) }}" class="button-link">
                                    Quay lại
                                </a>
                            </div>
                            <button type="submit" class="confirm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14">
                                    <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.751.751 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0Z"/>
                                </svg>
                                Xác nhận
                            </button>
                        </div>
                    </div>
                </div>

                <div class="right-column">
                    <div class="book-details">
                        <div class="detail-left">
                            <div>
                                <label for="masach">Mã sách: </label>
                                <input type="text" name="masach" value="{{ $course->masach }}" readonly>
                            </div>
                            <div>
                                <label for="tacgia">Tác giả: </label>
                                <input type="text" name="tacgia" value="{{ $course->tacgia }}" required>
                            </div>
                            <div>
                                <label for="nxb">Nhà xuất bản: </label>
                                <input type="text" name="nxb" value="{{ $course->nxb }}" required>
                            </div>
                            <div>
                                <label for="theloai">Thể loại: </label>
                                <input type="text" name="theloai" value="{{ $course->theloai }}" required>
                            </div>
                            <div>
                                <label for="soluong">Số lượng: </label>
                                <input type="text" name="soluong" value="{{ $course->soluong }}" required>
                            </div>
                            <div>
                                <label for="trongluong">Trọng lượng: </label>
                                <input type="text" name="trongluong" value="{{ $course->trongluong }}" required>
                            </div>
                            <div>
                                <label for="sotrang">Số trang: </label>
                                <input type="text" name="sotrang" value="{{ $course->sotrang }}" required>
                            </div>
                            <div>
                                <label for="ngonngu">Ngôn ngữ: </label>
                                <input type="text" name="ngonngu" value="{{ $course->ngonngu }}" required>
                            </div>
                        </div>

                        <div class="detail-right">
                            <div>
                                <label for="tensach">Tên sách: </label>
                                <input type="text" name="tensach" value="{{ $course->tensach }}" required>
                            </div>
                            <div>
                                <label for="giatien">Giá tiền: </label>
                                <input type="text" name="giatien" value="{{ $course->giatien }}" required>
                            </div>
                            <div>
                                <label for="mota">Mô tả sản phẩm: </label>
                                <textarea class="mota" name="mota" required>{{ $course->mota }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection