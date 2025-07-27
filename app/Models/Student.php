<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SchoolClass;

class Student extends Model
{
    use HasFactory;

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
