<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
   
    protected $table="addresses";

    public function countries()
    {
        return $this->belongsTo('App\Models\Country');
    }       
}