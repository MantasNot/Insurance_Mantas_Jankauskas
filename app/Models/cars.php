<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;


class cars extends Model
{
    protected $fillable = ['reg_number', 'brand', 'model', 'owner_id'];
    public function Insurance(){
        return $this->belongsTo(Insurance::class);
    }

    use HasFactory;
}

