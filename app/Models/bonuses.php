<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bonuses extends Model
{
    use HasFactory;

    protected $table="bonuses";

    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
