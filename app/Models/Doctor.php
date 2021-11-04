<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function hospital(){
        return $this->belongsTo(Hospital::class);          // php connect one to many
    }

    public function patients(){
        return $this->belongsToMany(Patient::class);         // php connect many to many
    }

    public function pager(){
        return $this->hasOne(Pager::class);          // php connect one to one
    }

}
