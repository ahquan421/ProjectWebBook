@extends('layouts.app') {{-- mở rộng file--}}

@section('content')
{{-- ✅ BẮT ĐẦU layout mới: container tổng chia 2 cột --}}
<div class="main-layout"> {{-- ✅ THÊM lớp bọc chia cột --}}
    <div class="sidebar">
        @include('course.header')
    </div>
    
    
    <!-- ✅ CỘT PHẢI: Nội dung chính -->
    <div class="main-content"> {{-- ✅ THÊM div bọc nội dung phải --}}
        <div class="tieudechinh">
            <h2 class="tieude">Quản lý sách trong kho</h2>
            <div class="search-container">
                <div >
                    <a href="{{ route('course.create') }}" class="button-add">
                        Thêm sách mới
                    </a>
                </div>
                <select id="sortSelect" class="sortSelect">
                    <option value="">Sắp xếp</option>
                    <option value="name-asc">Tên sách A → Z .</option>
                    <option value="name-desc">Tên sách Z → A .</option>
                    <option value="soluong-asc">Số lượng tăng .</option>
                    <option value="soluong-desc">Số lượng giảm .</option>
                </select>
                <input class="searchInput" type="text" id="searchInput" placeholder="Tìm kiếm...">
            </div>
        </div>
        
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
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody id="bookTable">
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
                        <a href="{{ route('course.show', $course->id) }}" class="button-link ">
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
        
    </div>

    <script>
        document.getElementById("searchInput").addEventListener("keyup", function () {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll("#bookTable tr");

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
        document.getElementById('sortSelect').addEventListener('change', function () {
    const value = this.value;
    const rows = Array.from(document.querySelectorAll('#bookTable tr'));

    let column = -1;
    let type = 'text';
    let asc = true;

    if (value === 'name-asc') {
        column = 1; type = 'text'; asc = true;
    } else if (value === 'name-desc') {
        column = 1; type = 'text'; asc = false;
    } else if (value === 'soluong-asc') {
        column = 6; type = 'number'; asc = true;
    } else if (value === 'soluong-desc') {
        column = 6; type = 'number'; asc = false;
    }

    if (column >= 0) {
        rows.sort((a, b) => {
            const cellA = a.children[column].textContent.trim();
            const cellB = b.children[column].textContent.trim();

            if (type === 'number') {
                return asc ? cellA - cellB : cellB - cellA;
            } else {
                return asc ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
            }
        });

        const table = document.getElementById('bookTable');
        rows.forEach(row => table.appendChild(row));
    }
});
    </script>

</div> {{-- ✅ KẾT THÚC layout --}}
@endsection
