<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;


class cars extends Model
{
    public mixed $user_id;
    protected $fillable = ['reg_number', 'brand', 'model', 'owner_id', 'image', 'user_id'];
    public function Insurance(){
        return $this->belongsTo(Insurance::class);
    }

    use HasFactory;
}

