@extends('layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">🔍 Tìm kiếm sách</h2>

    <form action="{{ route('search') }}" method="GET" class="row g-3 align-items-end">
        {{-- Tìm theo tên sách --}}
        <div class="col-md-4">
            <label for="tensach" class="form-label">Tên sách</label>
            <input type="text" class="form-control" name="tensach" id="tensach" placeholder="Nhập tên sách..." value="{{ request('tensach') }}">
        </div>

        {{-- Bộ lọc NXB --}}
        <div class="col-md-3">
            <label for="nxb" class="form-label">Nhà xuất bản</label>
            <select name="nxb" id="nxb" class="form-select">
                <option value="">-- Tất cả --</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher }}" {{ request('nxb') == $publisher ? 'selected' : '' }}>{{ $publisher }}</option>
                @endforeach
            </select>
        </div>

        {{-- Bộ lọc thể loại --}}
        <div class="col-md-3">
            <label for="theloai" class="form-label">Thể loại</label>
            <select name="theloai" id="theloai" class="form-select">
                <option value="">-- Tất cả --</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre }}" {{ request('theloai') == $genre ? 'selected' : '' }}>{{ $genre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
    </form>

    <hr class="my-4">

    <h3>Kết quả tìm kiếm</h3>

    @if($courses->isEmpty())
        <div class="alert alert-warning mt-3">Không tìm thấy sách phù hợp.</div>
    @else
        <div class="row mt-3">
            @foreach($courses as $book)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ route('user.detail', $book->id) }}">
                            <img src="{{ asset('images/' . $book->anhminhhoa) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->tensach }}</h5>
                            <p class="card-text">
                                <strong>Tác giả:</strong> {{ $book->tacgia }}<br>
                                <strong>Thể loại:</strong> {{ $book->theloai }}<br>
                                <strong>NXB:</strong> {{ $book->nxb }}<br>
                                <strong>Giá:</strong> {{ number_format($book->giatien) }}₫
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
