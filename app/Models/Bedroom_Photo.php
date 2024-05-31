<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedroom_Photo extends Model
{
    use HasFactory;

    protected $table = 'bedroom_photos';

    public function bedrooms()
    {
        return $this->belongsTo(Bedroom::class);
    }
}
