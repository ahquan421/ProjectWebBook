@extends('layouts.app')

@section('content')

<div class="main-layout">
    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Quản lý người dùng</h2>
            <div class="search-container">
                <select id="sortSelect" class="sortSelect">
                    <option value="">Sắp xếp</option>
                    <option value="name-asc">Tên người dùng A → Z </option>
                    <option value="name-desc">Tên người dùng Z → A </option>
                </select>
                <input class="searchInput" type="text" id="searchInput" placeholder="Tìm kiếm...">
            </div>
        </div>
        
        <table id="trangqly" class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Tài khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="userTable">
                @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->username }}</td>
                    <td>
                        <input type="password" value="{{ $user->password }}" readonly class="pass">
                        <button type="button" class="nut" onclick="togglePassword(this)">👁</button>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('users.delete', ['username' => $user->username]) }}" onsubmit="return confirm('Bạn có chắc muốn xoá người dùng này?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="nut">🗑</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .nut {
        font-size: 16px;
        background-color:rgb(255, 255, 255);
        border: none; 
        border-radius: 50%;
        padding: 6px 10px; 
        cursor: pointer;
        margin-left: 8px;
        transition: background-color 0.5s ease;
    }

    .nut:hover {
        background-color: #dce0e4;
    }

    .pass {
        border: none;
        background: transparent;
        font-family: monospace;
        font-size: 14px;
        width: 120px; 
    }
</style>

<script>
    function togglePassword(btn) {
        const input = btn.previousElementSibling;
        if (input.type === "password") {
            input.type = "text";
            btn.textContent = "👁";
        } else {
            input.type = "password";
            btn.textContent = "👁";
        }
    }
</script>
    <script>
        document.getElementById("searchInput").addEventListener("keyup", function () {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll("#userTable tr");

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
        const rows = Array.from(document.querySelectorAll('#userTable tr'));

        let column = -1;
        let type = 'text';
        let asc = true;

        if (value === 'name-asc') {
            column = 1; type = 'text'; asc = true;
        } else if (value === 'name-desc') {
            column = 1; type = 'text'; asc = false;
        }
        if (column >= 0) {
            rows.sort((a, b) => {
                let cellA = a.children[column].textContent.trim();
                let cellB = b.children[column].textContent.trim();

                if (type === 'number') {
                    cellA = parseInt(cellA);
                    cellB = parseInt(cellB);
                    return asc ? cellA - cellB : cellB - cellA;
                } else {
                    return asc ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
                }
            });

            const tableBody = document.querySelector('#userTable');
            rows.forEach(row => tableBody.appendChild(row));
        }
    });

</script>

@endsection
