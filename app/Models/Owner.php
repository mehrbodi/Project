<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = ['owner','user_id'];

    public function property()
    {
        return $this->hasOne(Property::class,'owner_id');
    }
}
