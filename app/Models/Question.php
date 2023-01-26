<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'topic_id',
        'answer',
    ];

    public function topic()
        {
            return $this->belongsTo(Topic::class);
        }
        
}




