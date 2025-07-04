@extends('layouts.app')

@section('content')
<div class="main-layout">
        <div class="sidebar">
        @include('course.header')
        </div>
        <div class="main-content">
                <div class="tieudechinh">
                        <h2 class="tieude">Thông tin chi tiết sách</h2>
                </div>
                
                <div class="main-show">
                        <div class="ttct">
                                <div class="left-column">
                                        <div class="img">
                                                <p>
                                                        <img src="{{ asset('images/' . $course->anhminhhoa) }}" alt="Ảnh minh họa" width="80" height="auto">
                                                        
                                                </p>
                                                                        
                                        </div>
                                        <div class="tacvu">
                                                <div >
                                                        <a href="{{ route('course.index') }}" class="button-link">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12">
                                                                        <path d="M3.587 6.025c0 .2.1.4.2.5l3.3 3.3c.3.3.8.3 1.1 0 .3-.3.3-.8 0-1.1l-2.7-2.7 2.7-2.7c.3-.3.3-.8 0-1.1-.3-.3-.8-.3-1.1 0l-3.2 3.2c-.2.2-.3.4-.3.6Z"></path>
                                                                </svg> 
                                                                Quay lại
                                                        </a>
                                                </div>
                                                <a href="{{ route('course.edit', $course->id) }}" class="button-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12">
                                                                <path d="M17.263 2.177a1.75 1.75 0 0 1 2.474 0l2.586 2.586a1.75 1.75 0 0 1 0 2.474L19.53 10.03l-.012.013L8.69 20.378a1.753 1.753 0 0 1-.699.409l-5.523 1.68a.748.748 0 0 1-.747-.188.748.748 0 0 1-.188-.747l1.673-5.5a1.75 1.75 0 0 1 .466-.756L14.476 4.963ZM4.708 16.361a.26.26 0 0 0-.067.108l-1.264 4.154 4.177-1.271a.253.253 0 0 0 .1-.059l10.273-9.806-2.94-2.939-10.279 9.813ZM19 8.44l2.263-2.262a.25.25 0 0 0 0-.354l-2.586-2.586a.25.25 0 0 0-.354 0L16.061 5.5Z"></path>
                                                        </svg>
                                                        Chỉnh sửa
                                                </a>
                                                <form method="POST" action="{{ route('course.destroy', $course->id) }}" >
                                                @csrf
                                                @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12">
                                                                <path d="M16 1.75V3h5.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75Zm-6.5 0V3h5V1.75a.25.25 0 0 0-.25-.25h-4.5a.25.25 0 0 0-.25.25ZM4.997 6.178a.75.75 0 1 0-1.493.144L4.916 20.92a1.75 1.75 0 0 0 1.742 1.58h10.684a1.75 1.75 0 0 0 1.742-1.581l1.413-14.597a.75.75 0 0 0-1.494-.144l-1.412 14.596a.25.25 0 0 1-.249.226H6.658a.25.25 0 0 1-.249-.226L4.997 6.178Z"></path><path d="M9.206 7.501a.75.75 0 0 1 .793.705l.5 8.5A.75.75 0 1 1 9 16.794l-.5-8.5a.75.75 0 0 1 .705-.793Zm6.293.793A.75.75 0 1 0 14 8.206l-.5 8.5a.75.75 0 0 0 1.498.088l.5-8.5Z"></path>
                                                        </svg>
                                                        Xóa
                                                        </button>
                                                </form>

                                        </div>
                                </div>
                                        
                                <div class="right-column">
                                        <div class="book-header">
                                                <p><b>{{ $course->tensach }}</b></p>
                                                <div class="book-price">
                                                        <p><b>{{ number_format($course->giatien, 0, ',', '.') }} VND</b></p>
                                                </div>
                                        </div>
                                        <div class="book-details">
                                                <div class="detail-left">
                                                        <p><b>Mã sách: </b>{{ $course->masach }}</p>
                                                        <p><b>Tác giả: </b>{{ $course->tacgia }}</p>
                                                        <p><b>Nhà xuất bản: </b>{{ $course->nxb }}</p>
                                                        <p><b>Thể loại: </b>{{ $course->theloai }}</p>
                                                        <p><b>Số lượng: </b>{{ $course->soluong }}</p>
                                                        <p><b>Trọng lượng: </b>{{ $course->trongluong }}</p>
                                                        <p><b>Số trang: </b>{{ $course->sotrang }}</p>
                                                        <p><b>Ngôn ngữ: </b>{{ $course->ngonngu }}</p>
                                                </div>
                                                <div class="detail-right">
                                                        <p><b>Mô tả sản phẩm: </b><br>
                                                        {{ $course->mota }}
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                        </div>        

                        
                </div>
        </div>
</div>

@endsection
