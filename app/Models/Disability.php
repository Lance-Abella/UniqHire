<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    use HasFactory;

    protected $fillable = [
        'disability_name',
    ];

    public function userInfo() {
        return $this->hasMany(UserInfo::class);
    }
}
