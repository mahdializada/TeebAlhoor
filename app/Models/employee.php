<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table='employees';

    public function bonuses()
    {
        return $this->hasOne('App\Models\bouses');
    }
    public function salarybase()
    {
        return $this->belongsTo('App\Models\salarybase');
    }
    public function employee_specific_deductions(){
        return $this->hasMany('App\Models\employee_specific_deduction');
    }
}
