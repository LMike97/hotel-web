<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'user_accounts';

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
