<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'item_id',
        'user_id',
        'loan_date',
        'return_date',
        'status',
        'notes',
    ];

    public function item() {
        return $this->belongsTo(Item::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
