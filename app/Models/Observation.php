<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function doctor(){
        return $this->hasOne(User::class,'id','doctor_id');
    }
}

