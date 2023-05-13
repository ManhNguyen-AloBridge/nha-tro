<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'address',
    ];

    protected $hidden = [];

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admin_motels', 'motel_id', 'admin_id');
    }
}
