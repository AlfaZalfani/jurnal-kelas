<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    use HasFactory;

    public function journals()
    {
        return $this->belongsTo(JournalModel::class, 'class_id','id');
    }
    public function students()
    {
        return $this->belongsTo(StudentModel::class, 'class_id','id');
    }
}