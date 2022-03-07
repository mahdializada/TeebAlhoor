<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    
    protected $table="payments";

    public function payment()
    {
        return $this->hasOne('App\Model\employees');
    } 
}
