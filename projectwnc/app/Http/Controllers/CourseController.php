<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    //
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
            'tensach' => 'required|string',
            'tacgia' => 'required|string',
            'nxb' => 'required|string',
            'theloai' => 'required|string',
            'giatien' => 'required|numeric',
            'soluong' => 'required|integer',
            'anhminhhoa' => 'required|image|mimes:jpeg,png,jpg,gif,webp,bmp,svg|max:2048',
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
    public function update(Request $request, $id){
        //Logic để cập nhật bản ghi trong cơ sở dữ liệu và thực hiện một hành động sau đó
        //vui long xac thuc yeu cau truoc khi cap nhat
        Course::find($id)->update($request->all());
        return redirect()->route('course.index');
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


    public function manauser(){
    $path = storage_path('app/users.json');
    if (file_exists($path)) {
        $json = file_get_contents($path);
        $users = json_decode($json, true);
    } else {
        $users = [];
    }

    return view('course.manauser', compact('users'));
    }



    public function deleteUser($username){
    $path = storage_path('app/users.json');

    $json = file_get_contents($path);
    $users = json_decode($json, true);

    // Lọc bỏ user có username cần xoá
    $filteredUsers = array_filter($users, function ($user) use ($username) {
        return $user['username'] !== $username;
    });

    // Ghi đè lại file
    file_put_contents($path, json_encode(array_values($filteredUsers), JSON_PRETTY_PRINT));

    return redirect()->route('course.manauser')->with('success', 'Đã xoá người dùng.');
    }


}
