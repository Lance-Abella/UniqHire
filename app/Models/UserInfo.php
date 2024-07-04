<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname', 'lastname', 'contactnumber', 'password', 'city', 'state', 'pwd_card',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function disabilities() {
        return $this->belongsToMany(Disability::class);
    }

    public function hasDisability($disability) {
        return $this->disabilities()->where('disability_name', $disability)->exists();
    }
}
