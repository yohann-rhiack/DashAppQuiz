<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'course_id', 'parent_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
