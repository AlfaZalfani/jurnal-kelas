<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'class';
    protected $fillable = [
        'class_name',
    ];

    public function journals()
    {
        return $this->belongsTo(JournalModel::class, 'class_id','id');
    }
    public function students()
    {
        return $this->belongsTo(StudentModel::class, 'class_id','id');
    }
}