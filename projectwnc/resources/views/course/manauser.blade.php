@extends('layouts.app')

@section('content')

<div class="main-layout">
    <div class="sidebar">
        @include('course.header')
    </div>
    <div class="main-content">
        <div class="tieudechinh">
            <h2 class="tieude">Quản lý người dùng</h2>
        </div>
        
        <table id="trangqly" class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Năm sinh</th>
                    <th>Tài khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['fullname'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['birthyear'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>
                        <input type="password" value="{{ $user['password'] }}" readonly class="pass">
                        <button type="button" class="nut" onclick="togglePassword(this)">👁</button>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('users.delete', ['username' => $user['username']]) }}" onsubmit="return confirm('Bạn có chắc muốn xoá người dùng này?');">
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
    cursor: pointer;  /* Khi hover thì hiện bàn tay chỉ (dễ nhận biết có thể click) */
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

@endsection
