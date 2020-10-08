<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Courses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='courses';

    protected $fillable = ['title', 'duration', 'price', 'location', 'about', 'date', 'mentor'];

    public function gallery()
    {
        return $this->hasOne('App\Models\Gallery', 'courses_id', 'id');
    }
}