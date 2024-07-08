<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;
    protected $fillable = [
        'education_name'
    ];

    public function program() {
        return $this->hasMany(EducationLevel::class);
    }
}
