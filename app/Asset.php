<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //Table name
    protected $table = 'assets';
    
    //Primary key
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'category', 
        'brand_model',
        'username',
        'serial_no',
        'asset_no',
        'inv_no',
        'os',
        'cpu',
        'ram',
        'appsys',
        'computer_name',
        'supplier_name',
        'supplier_purchased',
    ];

    public function staffs()
    {
        return $this->hasMany('App\Staff', 'assets_id', 'id');
    }

    public function services()
    {
        return $this->hasMany('App\Service', 'assets_id', 'id');
    }

    public function prevs()
    {
        return $this->hasMany('App\Prev', 'assets_id', 'id');
    }
}
