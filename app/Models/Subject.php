<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Grade;

class Subject extends Model
{
    use HasFactory;

     protected $fillable = ['name'];

    public function teachers()
    {
       return $this->hasMany(Teacher::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
