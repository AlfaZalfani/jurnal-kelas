<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'teacher_id',
        'name',
    ];

    public function teachers()
    {
        return $this->belongsTo(TeacherModel::class, 'teacher_id','id');
    }
}