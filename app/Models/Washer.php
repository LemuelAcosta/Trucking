<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Washer extends Model
{
    use HasFactory;

    protected $table = 'washers';
    protected $fillable = [
        'mark',
        'model',
        'value',
        'weight',
        'truck_id'
    ];

    public function trucks() {
        return $this->belongsTo(Truck::class,'truck_id');
    }
}
