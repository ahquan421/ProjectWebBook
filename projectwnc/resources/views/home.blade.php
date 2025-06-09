@extends('layout')

@section('content')
<div style="padding: 30px;">

    {{-- 📚 Sách mới --}}
    <h2 style="margin-bottom: 20px;">📚 Sách mới</h2>
    <div style="display: flex; gap: 25px; flex-wrap: wrap;">
        <div style="width: 200px; text-align: center;">
            <img src="{{ asset('images/25xuhuong.jpg') }}" alt="Sách mới 1" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <p style="margin: 10px 0 5px; font-weight: bold;">25 xu hướng công nghệ</p>
            <p style="color: #555;">Tác giả A</p>
            <p style="color: #1c87c9;">198,000₫</p>
        </div>

        <div style="width: 200px; text-align: center;">
            <img src="{{ asset('images/mang6g.jpeg') }}" alt="Sách mới 2" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <p style="margin: 10px 0 5px; font-weight: bold;">Mạng 6G và tương lai</p>
            <p style="color: #555;">Tác giả B</p>
            <p style="color: #1c87c9;">385,000₫</p>
        </div>
        <div style="width: 200px; text-align: center;">
            <img src="{{ asset('images/3_nguoi_thay_vi_dai.webp') }}" alt="Sách mới 3" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <p style="margin: 10px 0 5px; font-weight: bold;">3 Người thầy vĩ đại</p>
            <p style="color: #555;">Tác giả B</p>
            <p style="color: #1c87c9;">385,000₫</p>
        </div>
        <div style="width: 200px; text-align: center;">
            <img src="{{ asset('images/camhoa.webp') }}" alt="Sách mới 4" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <p style="margin: 10px 0 5px; font-weight: bold;">Đất nước cấm hoa</p>
            <p style="color: #555;">Tác giả B</p>
            <p style="color: #1c87c9;">385,000₫</p>
        </div>
        <div style="width: 200px; text-align: center;">
            <img src="{{ asset('images/conan.webp') }}" alt="Sách mới 5" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <p style="margin: 10px 0 5px; font-weight: bold;">Thám tử lừng danh Conan tập 105</p>
            <p style="color: #555;">Tác giả B</p>
            <p style="color: #1c87c9;">385,000₫</p>
        </div>
        <div style="width: 200px; text-align: center;">
            <img src="{{ asset('images/quyenluc.jpg') }}" alt="Sách mới 6" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <p style="margin: 10px 0 5px; font-weight: bold;">Quyền lực biển</p>
            <p style="color: #555;">Tác giả B</p>
            <p style="color: #1c87c9;">385,000₫</p>
        </div>

        <!-- Bạn có thể thêm nhiều sách mới khác tương tự -->
    </div>

    <hr style="margin: 40px 0;">

    {{-- ⚡ Sách giảm giá --}}
    <h2 style="margin-bottom: 20px;">⚡ Sách giảm giá</h2>
    <div style="display: flex; gap: 25px; flex-wrap: wrap;">
        <div style="width: 200px; text-align: center; position: relative;">
            <img src="{{ asset('images/khonggiadinh.WEBP') }}" alt="Không gia đình" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <div style="position: absolute; top: 10px; right: 10px; background-color: yellow; padding: 5px; font-size: 12px; font-weight: bold; border-radius: 5px;">
                -15%
            </div>
            <p style="margin: 10px 0 5px; font-weight: bold;">Không gia đình</p>
            <p style="color: #555;">Tác giả C</p>
            <p style="text-decoration: line-through;">150,000₫</p>
            <p style="color: #e53935; font-weight: bold;">127,500₫</p>
        </div>

        <div style="width: 200px; text-align: center; position: relative;">
            <img src="{{ asset('images/bupsenxanh.webp') }}" alt="Sách giảm giá 2" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <div style="position: absolute; top: 10px; right: 10px; background-color: yellow; padding: 5px; font-size: 12px; font-weight: bold; border-radius: 5px;">
                -20%
            </div>
            <p style="margin: 10px 0 5px; font-weight: bold;">Búp sen xanh</p>
            <p style="color: #555;">Tác giả D</p>
            <p style="text-decoration: line-through;">200,000₫</p>
            <p style="color: #e53935; font-weight: bold;">160,000₫</p>
        </div>
        <div style="width: 200px; text-align: center; position: relative;">
            <img src="{{ asset('images/bongsenvang.webp') }}" alt="Sách giảm giá 3" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <div style="position: absolute; top: 10px; right: 10px; background-color: yellow; padding: 5px; font-size: 12px; font-weight: bold; border-radius: 5px;">
                -20%
            </div>
            <p style="margin: 10px 0 5px; font-weight: bold;">Bông sen vàng</p>
            <p style="color: #555;">Tác giả D</p>
            <p style="text-decoration: line-through;">200,000₫</p>
            <p style="color: #e53935; font-weight: bold;">160,000₫</p>
        </div>
        <div style="width: 200px; text-align: center; position: relative;">
            <img src="{{ asset('images/gietconchimnhai.webp') }}" alt="Sách giảm giá 4" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <div style="position: absolute; top: 10px; right: 10px; background-color: yellow; padding: 5px; font-size: 12px; font-weight: bold; border-radius: 5px;">
                -20%
            </div>
            <p style="margin: 10px 0 5px; font-weight: bold;">Giết con chim nhại</p>
            <p style="color: #555;">Tác giả D</p>
            <p style="text-decoration: line-through;">200,000₫</p>
            <p style="color: #e53935; font-weight: bold;">160,000₫</p>
        </div>
        <div style="width: 200px; text-align: center; position: relative;">
            <img src="{{ asset('images/daiviet.jpg') }}" alt="Sách giảm giá 4" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <div style="position: absolute; top: 10px; right: 10px; background-color: yellow; padding: 5px; font-size: 12px; font-weight: bold; border-radius: 5px;">
                -20%
            </div>
            <p style="margin: 10px 0 5px; font-weight: bold;">Đại Việt Sử Kí Toàn Thư</p>
            <p style="color: #555;">Tác giả D</p>
            <p style="text-decoration: line-through;">200,000₫</p>
            <p style="color: #e53935; font-weight: bold;">160,000₫</p>
        </div>
        <div style="width: 200px; text-align: center; position: relative;">
            <img src="{{ asset('images/giaungheo.jpg') }}" alt="Sách giảm giá 4" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">
            <div style="position: absolute; top: 10px; right: 10px; background-color: yellow; padding: 5px; font-size: 12px; font-weight: bold; border-radius: 5px;">
                -20%
            </div>
            <p style="margin: 10px 0 5px; font-weight: bold;">Cha giàu cha nghèo</p>
            <p style="color: #555;">Tác giả D</p>
            <p style="text-decoration: line-through;">200,000₫</p>
            <p style="color: #e53935; font-weight: bold;">160,000₫</p>
        </div>

        <!-- Thêm sách giảm giá khác nếu cần -->
    </div>

</div>
@endsection
