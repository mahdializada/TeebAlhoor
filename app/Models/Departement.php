<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table="departements";

    public function employees()
    {

        return $this->belongsTo('App\Models\employees');
    }
}
