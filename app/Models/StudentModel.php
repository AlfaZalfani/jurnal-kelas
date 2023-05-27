<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    use HasFactory;

    public function class()
    {
        return $this->hasOne(ClassModel::class, 'class_id','id');
    }
    public function users()
    {
        return $this->hasOne(UserModel::class, 'user_id','id');
    }
}