<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Courses;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['course_id', 'name', 'email', 'status', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Courses', 'course_id', 'id');
    }
}
