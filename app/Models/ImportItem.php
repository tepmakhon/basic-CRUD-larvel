<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportItem extends Model
{
    protected $fillable = [
        'item_name',
        'category',
        'supplier',
        'quantity',
        'import_price',
        'image',
        'import_date',
        'status',
        'is_active'
    ];
}