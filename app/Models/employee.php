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

   
        return $this->belongsTo('App\Models\salarybase');
    }
<<<<<<< HEAD
    public function employee_specific_deductions(){
        return $this->hasMany('App\Models\employee_specific_deduction');
=======

    public function bonuses()
    {
        return $this->hasMany(Bonuses::class);
    }

    public function overtimes()
    {
        return $this->hasMany(Overtimes::class);
>>>>>>> 4044ba73a68de9bb795cde5d55200d3f03c9be19
    }
}
