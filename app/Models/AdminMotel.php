<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminMotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'admin_id',
        'motel_id',
    ];

    protected $hidden = [];
}
