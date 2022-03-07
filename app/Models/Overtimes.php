<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtimes extends Model
{
    use HasFactory;

    protected $table="overtimes";
    
    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
