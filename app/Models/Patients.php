<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $with = ['history', 'labResults'];

    public function history(){
        return $this->hasMany(History::class);
    }

    public function labResults(){
        return $this->hasMany(LabResults::class);
    }

}
