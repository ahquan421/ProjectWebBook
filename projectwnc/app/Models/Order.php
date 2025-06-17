<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'course_id', 'quantity', 'total_price'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
