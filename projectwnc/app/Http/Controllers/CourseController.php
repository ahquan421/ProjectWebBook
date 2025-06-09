<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
        //Điều này sẽ tạo mục nhập cho khóa học
        Course::create($request->all());
        return redirect()->route("course.index");

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
}
