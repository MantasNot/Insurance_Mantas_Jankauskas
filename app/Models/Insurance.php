<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'phone', 'address'];

    public function cars(){
        return $this->hasMany(cars::class, 'owner_id');
    }

    use HasFactory;
}
