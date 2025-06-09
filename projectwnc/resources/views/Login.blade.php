@extends('layout')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 70vh;">
    <div style="border: 1px solid #ccc; border-radius: 10px; padding: 30px 40px; box-shadow: 0 0 15px rgba(0,0,0,0.1); width: 350px; background-color: #fff;">
        <h2 style="text-align: center; margin-bottom: 20px;">Đăng nhập</h2>

        <form onsubmit="event.preventDefault(); redirectUser();">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="role">Chọn vai trò:</label><br>
                <select id="role" name="role" style="width: 100%; padding: 8px; margin-top: 5px;">
                    <option value="admin">Admin</option>
                    <option value="user">Người dùng</option>
                </select>
            </div>

            <button type="submit" style="width: 100%; padding: 10px; background-color: #1c87c9; color: white; border: none; border-radius: 5px;">
                Đăng nhập
            </button>
        </form>
    </div>
</div>

<script>
    function redirectUser() {
        const role = document.getElementById('role').value;
        if (role === 'admin') {
            window.location.href = "{{route('course.index')}}"; // sau này thay bằng route admin
        } else {
            window.location.href = "{{route('home')}}"; // sau này thay bằng route user
        }
    }
</script>
@endsection
