<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalModel extends Model
{
    use HasFactory;

    protected $table = 'journals';
    
    protected $fillable = [
        'teacher_id',
        'class_id',
        'journal_entry',
    ];

    public function teachers()
    {
        return $this->hasMany(TeacherModel::class, 'teacher_id','id');
    }
    public function class()
    {
        return $this->hasMany(ClassModel::class, 'class_id','id');
}
}
