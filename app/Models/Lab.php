<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lab extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function item(){
        return $this->hasMany(Item::class);
    }
}
