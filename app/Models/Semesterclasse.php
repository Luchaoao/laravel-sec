<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semesterclasse extends Model
{
    use HasFactory;
    protected $fillable = [
        'semesterid',
        'classid',
        'teacherid',
    ];

    public function user() {
        return $this->belongsTo(Semester::class, 'semesterid', 'id');
    }

    public function semester() {
        return $this->belongsTo(Teacher::class, 'teacherid', 'id');
    }
}
