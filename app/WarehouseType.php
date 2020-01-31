<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class WarehouseType extends Model
{
    protected $table = 'warehouse_types';
    protected $primaryKey = 'ID';
    protected $guarded = ['ID'];
    public $timestamps = false;

    # Booting the base model to add created_by, updated_by, etc to all tables
    public static function boot()
    {
        parent::boot();
    }
}
