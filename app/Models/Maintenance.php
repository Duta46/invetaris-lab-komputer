<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maintenance extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'item_id',
        'maintenance_date',
        'description',
        'status',
    ];

    public function item() {
        return $this->belongsTo(Item::class);
    }
}
