<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expences_attachments extends Model
{
    use HasFactory;
    protected $table="expences_attachments";
    
    public function expences()
    {
        return $this->hasMany('App\Models\expences');
    }
}
