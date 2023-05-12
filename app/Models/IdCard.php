<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdCard extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'id',
        'card_number',
        'url_id',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
