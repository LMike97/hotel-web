<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_Photo extends Model
{
    use HasFactory;

    protected $table = 'hotel_photos';

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
