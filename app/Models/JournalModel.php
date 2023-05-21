<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalModel extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->hasMany(TeacherModel::class,'teacher_id','id');
    }
    
}