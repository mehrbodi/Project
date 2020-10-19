<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['house_name_number','postcode','user_id','phones','address','owner_id'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->hasOne(Owner::class,'id');
    }
}
