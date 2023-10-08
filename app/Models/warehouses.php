<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouses extends Model
{
    use HasFactory;

    protected $table = 'warehouses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Id_Product',
        'quantity',
        'status',
    ];
    public function products()
    {
        return $this->belongsTo(Products::class, 'Id_Product', 'Id_Product');
    }
}
