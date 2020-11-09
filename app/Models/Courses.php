<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Courses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='courses';

    protected $fillable = ['title', 'duration', 'price', 'location', 'about', 'date', 'mentor', 'time'];

    public function gallery()
    {
        return $this->hasOne('App\Models\Gallery', 'course_id', 'id')->withTrashed();
    }

    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction', 'transaction_id', 'id');
    }
}
