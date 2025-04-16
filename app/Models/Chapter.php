<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'chapter_description',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function summary()
    {
        return $this->hasOne(Summary::class);
    }
}
