<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['course_id', 'name', 'email', 'status'];

    public function transaction_belongs()
    {
        return $this->belongsTo('App\Models\User', 'transaction_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Courses', 'course_id', 'id');
    }
}
