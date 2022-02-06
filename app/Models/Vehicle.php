<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'license_plate', 'model', 'color', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
