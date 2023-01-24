<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expences extends Model
{
    use HasFactory;
    protected $table="expences";


    public function ex_attach()
    {
        return $this->belongsTo('App\Models\expences_attachments');


    }


}
