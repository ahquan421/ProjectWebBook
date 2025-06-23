<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class Cart extends Model
{
    protected $fillable = ['user_id', 'course_id'];

    // Quan hệ với người dùng
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với sách
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
