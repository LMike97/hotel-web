<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function bedroom()
    {
        return $this->hasMany(Bedroom::class);
    }

    public function hotel_photo()
    {
        return $this->hasMany(Hotel_Photos::class);
    }
}
