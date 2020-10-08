<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['course_id', 'image', 'mentor'];

    public function course()
    {
        return $this->belongsTo('App\Models\Courses', 'course_id', 'id');
    }
}
