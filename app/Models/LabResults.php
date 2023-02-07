<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResults extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function patients(){
        return $this->belongsTo(Patients::class);
    }
}
