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
    public function employee_specific_deductions(){
        return $this->hasMany('App\Models\employee_specific_deduction');

    }
    public function salarybases()
    {
        return $this->belongsTo('App\Models\salarybase');
    }

    public function bonuses()
    {
        return $this->hasMany(Bonuses::class);
    }

    public function overtimes()
    {
        return $this->hasMany(Overtimes::class);
    }
}
