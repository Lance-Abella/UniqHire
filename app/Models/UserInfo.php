<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'contactnumber',
        'city',
        'state',
        'disability_id',
        'pwd_card',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function disability() {
        return $this->belongsTo(Disability::class);
    }
}
