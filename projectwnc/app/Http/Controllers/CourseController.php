<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class CourseController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        //list all
        $courses = Course::all(); // có thể tải all các khóa học 
        return view('course.index',compact('courses'));//thiết lập bộ điều khiển và có thể xem được 
    }
    public function create(){
        //Định tuyến đến trang/giao diện sẽ chứa biểu mẫu tạo mới
        return view('course.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'masach' => 'required|string',
            'tensach' => 'required|string',
            'tacgia' => 'required|string',
            'nxb' => 'required|string',
            'theloai' => 'required|string',
            'giatien' => 'required|numeric',
            'soluong' => 'required|integer',
            'trongluong' => 'required|integer',
            'sotrang' => 'required|integer',
            'ngonngu' => 'required|string',
            'anhminhhoa' => 'required|image|mimes:jpeg,png,jpg,gif,webp,bmp,svg|max:2048',
            'mota' => 'required|string',
        ]);

    // Xử lý upload ảnh
        if ($request->hasFile('anhminhhoa')) {
            $image = $request->file('anhminhhoa');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('images'), $imageName); 
            $validated['anhminhhoa'] = $imageName; 
        }

        
        Course::create($validated);

        return redirect()->route('course.index')->with('success', 'Thêm sách thành công');
    }
    public function show($id){
        //Truy xuất data từ database
        $course = Course::find($id);
        return view('course.show',compact('course'));

    }
    public function edit($id){
        //Edit data
        $course = Course::find($id);
        return view('course.edit',compact('course'));
    }
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'masach' => 'required|string',
            'tensach' => 'required|string',
            'tacgia' => 'required|string',
            'nxb' => 'required|string',
            'theloai' => 'required|string',
            'giatien' => 'required|numeric',
            'soluong' => 'required|integer',
            'trongluong' => 'required|integer',
            'sotrang' => 'required|integer',
            'ngonngu' => 'required|string',
            'mota' => 'required|string',
            'anhminhhoa' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,bmp,svg|max:2048',
        ]);

        // Nếu người dùng chọn ảnh mới, lưu ảnh mới
        if ($request->hasFile('anhminhhoa')) {
            $image = $request->file('anhminhhoa');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validated['anhminhhoa'] = $imageName;
        }

        // Nếu không chọn ảnh mới, giữ ảnh cũ
        else {
            unset($validated['anhminhhoa']);
        }

        $course->update($validated);

        return redirect()->route('course.show', $course->id)->with('success', 'Cập nhật sách thành công');
    }

    public function destroy($id){
        //Delete the entry from the database
        //xac thua yeu cau csdl dua tren dl ma ban dươc cung cap
        Course::find($id)->delete();
        return redirect()->route('course.index');
    }
    public function page(){
        return view('course.page');
    }
    public function manaorder(){
        return view('course.manaorder');
    }
    public function report(){
        return view('course.report');
    }


    public function manauser() {
    $users = User::all(); // Lấy tất cả user từ bảng users trong DB
    return view('course.manauser', compact('users'));

}



    public function deleteUser($username)
    {
        // Tìm user theo username
        $user = User::where('username', $username)->first();

        // Nếu không tìm thấy user thì thông báo lỗi
        if (!$user) {
            return redirect()->route('course.manauser')->with('error', 'Không tìm thấy người dùng.');
        }

        // Xoá user
        $user->delete();

        return redirect()->route('course.manauser')->with('success', 'Đã xoá người dùng.');
    }


}
