<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Attendance extends Model
{
    protected $fillable = ["status","date","student_id"];

    
    public function student() {
        return $this->belongsTo(Student::class,"student_id");
    }


    use HasFactory;
}
