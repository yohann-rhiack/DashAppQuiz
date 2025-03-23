<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['start_date', 'end_date', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
