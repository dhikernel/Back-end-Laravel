<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'cpf', 'rg', 'date_of_birth', 'zip_code', 'address', 'number', 'city', 'state'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
