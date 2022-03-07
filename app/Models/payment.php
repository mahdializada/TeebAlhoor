<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    
    protected $table="payments";

    public function employee()
    {
        return $this->belongsTo('App\Models\employees');
    } 
}
