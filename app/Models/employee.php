<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table='employees';

    public function payments()
    {
        return $this->hasMany('App\Model\payment');
    }
    public function bonuses()
     
    {
        return $this->hasOne('App\Models\bouses');
    }
    public function salarybase()
    {
        return $this->belongsTo('App\Models\salarybase');
    }
}
