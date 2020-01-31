<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes; //add this line

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use SoftDeletes; //add this line

    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $guarded = ['ID'];

    public static function boot()
    {
        parent::boot();
    }

    public function warehouseType()
    {
        return $this->belongsTo('App\Models\WarehouseType');
    }

    public function warehouseProduct()
    {
        return $this->belongsTo('App\Models\WarehouseProduct');
    }
}
