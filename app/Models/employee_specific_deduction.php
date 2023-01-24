<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_specific_deduction extends Model
{
    use HasFactory;
    protected $table='employee_specific_deductions';

    public function employe()
    {
        return $this->belongsTo('App\Models\employe');

    }
}
