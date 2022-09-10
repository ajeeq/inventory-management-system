<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    //Primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'service_date', 'service_notes', 'service_cost', 'service_location', 'assets_id'
    ];

    public function assets()
    {
        return $this->belongsTo('App\Asset');
    }
}
