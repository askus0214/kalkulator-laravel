<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarehouseProduct extends Base
{
    protected $table = 'warehouse_products';
    protected $primaryKey = 'ID';
    protected $guarded = ['ID'];
    public $timestamps = false;

     # Booting the base model to add created_by, updated_by, etc to all tables
    public static function boot()
    {
        parent::boot();
    }
    
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    
    public function warehouses()
    {
        return $this->hasMany('App\Models\Warehouse');
    }
}
