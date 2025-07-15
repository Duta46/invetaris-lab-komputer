<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'lab_id',
        'name',
        'serial_number',
        'condition',
        'price',
        'status',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function lab() {
        return $this->belongsTo(Lab::class);
    }

    public function loan() {
        return $this->hasMany(Loan::class);
    }

    public function maintenance() {
        return $this->hasMany(Maintenance::class);
    }
}
