<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prev extends Model
{
    //Table name
    protected $table = 'prevs';
    
    //Primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'pm_date', 'pm_notes', 'assets_id'
    ];

    public function assets()
    {
        return $this->belongsTo('App\Asset');
    }
}
