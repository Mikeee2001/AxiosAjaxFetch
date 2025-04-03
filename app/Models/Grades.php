<?php

namespace App\Models;

use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grades extends Model
{
    use HasFactory;
    public $table = 'grade';

    public $fillable = [
        'FinalGrade',
        'MidtermGrade',
        'student_id'
    ];
    public function students()
    {
        return $this->belongsTo(Students::class,'student_id');
    }
}
