<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic_id',
        'user_id',
        'result',
    ];

    public function topic()
        {
            return $this->belongsTo(Topic::class);
        }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
