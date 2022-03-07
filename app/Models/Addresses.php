<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table="addresses";

   public function countries()
   {
    return $this->belongsTo('App\Models\Country');
   }
=======
   
    protected $table="addresses";
<<<<<<<< HEAD:app/Models/Addresses.php
    public function state()
    {
        return $this->belongsTo('App\Models\state');
    }
        
========

    public function countries()
    {
        return $this->belongsTo('App\Models\Country');
    }       
>>>>>>>> 8d7f40b286e2d3a168b6936ab4335eddb9de2d36:app/Models/Addresse.php
>>>>>>> 8d7f40b286e2d3a168b6936ab4335eddb9de2d36
}
