<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Topic extends Model
{
    use HasFactory ;


    protected $fillable = [
        'title',
        "docs",
        'skill_id',
    ];

    // protected $richTextFields = [
    //     'docs',
    // ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }
}



