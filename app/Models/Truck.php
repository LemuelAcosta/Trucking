<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $table = 'trucks';

    public function washer() {
        return $this->hasMany(Washer::class,'truck_id');
    }
}
