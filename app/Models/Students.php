<?php

namespace App\Models;

use App\Models\Grades;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;
    public $table = 'students';

    public $fillable = [
        'first_name',
        'last_name',
        // 'student_id'
    ];

  public function grades()
  {
    return $this->hasMany(Grades::class,'student_id');
  }
  public function departments()
  {
    return $this->hasMany(Department::class,'student_id');
  }
}
