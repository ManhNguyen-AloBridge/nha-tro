<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'role',
        'name',
        'email',
        'password',
        'phone_number',
        'bank_account_number',
        'account_holder',
        'bank_name',
        'address',
        'image',
    ];

    protected $hidden = [];

    public function motels()
    {
        return $this->belongsToMany(Motel::class, 'admin_motels', 'admin_id', 'motel_id');
    }
}
