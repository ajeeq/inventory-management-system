<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    //Primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'staff_name', 'staff_section', 'assets_id'
    ];

    public function assets()
    {
        return $this->belongsTo('App\Asset');
    }
}
