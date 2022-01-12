<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceDetail extends Model
{
    use HasFactory;

    protected $table='place_detail';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Place::class);
    }
}
