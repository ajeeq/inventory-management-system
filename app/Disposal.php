<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposal extends Model
{
    //Primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'disposal_date', 'disposal_refno'
    ];
}
