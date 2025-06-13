@extends('layout')

@section('content')
<div class="container">
    <h2>Tìm kiếm sách</h2>

    <form action="{{ route('search') }}" method="GET">
        {{-- Tìm theo tên sách --}}
        <div>
            <input type="text" name="tensach" placeholder="Tìm tên sách..." value="{{ request('tensach') }}">
        </div>

        {{-- Bộ lọc nhà xuất bản --}}
        <div>
            <label for="nxb">Nhà xuất bản:</label>
            <select name="nxb" id="nxb">
                <option value="">-- Chọn nhà xuất bản --</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher }}" {{ request('nxb') == $publisher ? 'selected' : '' }}>{{ $publisher }}</option>
                @endforeach
            </select>
        </div>

        {{-- Bộ lọc thể loại --}}
        <div>
            <label for="theloai">Thể loại:</label>
            <select name="theloai" id="theloai">
                <option value="">-- Chọn thể loại --</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre }}" {{ request('theloai') == $genre ? 'selected' : '' }}>{{ $genre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Tìm kiếm</button>
    </form>

    <hr>

    <h3>Kết quả tìm kiếm</h3>
    @if($courses->isEmpty())
        <p>Không tìm thấy sách phù hợp.</p>
    @else
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            @foreach($courses as $book)
                <div style="border: 1px solid #ccc; padding: 10px; width: 200px;">
                    <img src="{{ asset('images/' . $book->anhminhhoa) }}" style="width: 100%; height: auto;">
                    <h4>{{ $book->tensach }}</h4>
                    <p><strong>Tác giả:</strong> {{ $book->tacgia }}</p>
                    <p><strong>Thể loại:</strong> {{ $book->theloai }}</p>
                    <p><strong>NXB:</strong> {{ $book->nxb }}</p>
                    <p><strong>Giá:</strong> {{ number_format($book->giatien) }}₫</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
