<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type_id', 'time'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
