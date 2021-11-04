<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    public function doctor(){
        return $this->belongsTo(Doctor::class);             //php to connect one to one
    }
}
