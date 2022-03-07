<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table='employees';

<<<<<<< HEAD
    public function payments()
    {
        return $this->hasMany('App\Model\payment');
    }
=======

    public function payments()
    {
        return $this->hasMany('App\Model\payment');

    }

<<<<<<< HEAD
>>>>>>> 3d76cea95991d8aa0552b997d0d6b2c232e0c0c8
=======
    public function salarybases()
    {
        return $this->belongsTo('App\Models\salarybase');
    }
    
>>>>>>> aec162d8c745c4e7df41d4263fa04c087dca8dbb
    public function bonuses()
     
    {
        return $this->hasMany(Bonuses::class);
    }

    public function overtimes()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Models\salarybase');
=======
        return $this->hasMany(Overtimes::class);
<<<<<<< HEAD
>>>>>>> 4044ba73a68de9bb795cde5d55200d3f03c9be19
>>>>>>> 3d76cea95991d8aa0552b997d0d6b2c232e0c0c8
=======
>>>>>>> aec162d8c745c4e7df41d4263fa04c087dca8dbb
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
