<?php

namespace App\Models;

use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    public $table = 'department';

    public $fillable = [
        'departments',
        'student_id'
    ];
    public function students()
    {
        return $this->belongsTo(Students::class,'student_id');
    }
}

