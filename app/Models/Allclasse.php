<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allclasse extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_name',
        'class_introduce',
        'class_pic',
        'class_teacher_id',
    ];

    public function type() {
        return $this->belongsTo(Teacher::class, 'class_teacher_id', 'id');
    }
}
