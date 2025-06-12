@extends('layouts.app') {{-- mở rộng file--}}

@section('content')
{{-- ✅ BẮT ĐẦU layout mới: container tổng chia 2 cột --}}
<div class="main-layout"> {{-- ✅ THÊM lớp bọc chia cột --}}

    @include('course.header')
    
    <!-- ✅ CỘT PHẢI: Nội dung chính -->
    <div class="main-content"> {{-- ✅ THÊM div bọc nội dung phải --}}
        <div class="vien"></div>
        <h2 class="tieude">Quản lý sách trong kho</h2>
        <table id="trangqly" class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Tên sách</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Thể loại</th>
                    <th>Giá tiền</th>
                    <th>Số lượng</th>
                    <th>Ảnh minh họa</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $index => $course)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $course->tensach }}</td>
                    <td>{{ $course->tacgia }}</td>
                    <td>{{ $course->nxb }}</td>
                    <td>{{ $course->theloai }}</td>
                    <td>{{ $course->giatien }} VNĐ</td>
                    <td>{{ $course->soluong }}</td>
                    <td>
                        <img src="{{ $course->anhminhhoa }}" alt="Ảnh minh họa" width="80">
                    </td>

                    <td>
                        <a href="{{ route('course.show', $course->id) }}" class="button-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                <path d="M8 2c1.981 0 3.671.992 4.933 2.078 1.27 1.091 2.187 2.345 2.637 3.023a1.62 1.62 0 0 1 0 1.798c-.45.678-1.367 1.932-2.637 3.023C11.67 13.008 9.981 14 8 14c-1.981 0-3.671-.992-4.933-2.078C1.797 10.83.88 9.576.43 8.898a1.62 1.62 0 0 1 0-1.798c.45-.677 1.367-1.931 2.637-3.022C4.33 2.992 6.019 2 8 2ZM1.679 7.932a.12.12 0 0 0 0 .136c.411.622 1.241 1.75 2.366 2.717C5.176 11.758 6.527 12.5 8 12.5c1.473 0 2.825-.742 3.955-1.715 1.124-.967 1.954-2.096 2.366-2.717a.12.12 0 0 0 0-.136c-.412-.621-1.242-1.75-2.366-2.717C10.824 4.242 9.473 3.5 8 3.5c-1.473 0-2.825.742-3.955 1.715-1.124.967-1.954 2.096-2.366 2.717ZM8 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 8 10Z"></path>
                        </svg>
                        </a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Nút thêm sách mới -->
        <div >
            <a href="{{ route('course.create') }}" class="button-add">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                    <path d="M7.75 2a.75.75 0 0 1 .75.75V7h4.25a.75.75 0 0 1 0 1.5H8.5v4.25a.75.75 0 0 1-1.5 0V8.5H2.75a.75.75 0 0 1 0-1.5H7V2.75A.75.75 0 0 1 7.75 2Z"></path>
            </svg>
                Thêm sách mới
            </a>
        </div>
    </div>
</div> {{-- ✅ KẾT THÚC layout --}}
@endsection
