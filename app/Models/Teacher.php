<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_name',
        'teacher_email',
        'teacher_password',
        'teacher_introduce',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function type() {
        return $this->hasMany(Allclasse::class, 'class_teacher_id', 'id');
    }
    
    public function semester() {
        return $this->hasMany(Semesterclasse::class, 'teacherid', 'id');
    }
}
