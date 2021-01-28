<?php

namespace App\Models;

use Database\Factories\StudentsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'age'
    ];

    public function courses() //関数名は複数形がベスト
    {
        return $this->hasMany(Courses::class);
    }

    /** @return StudentsFactory */
    protected static function newFactory()
    {
        return StudentsFactory::new();
    }
}
