<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use hasFactory;

    protected $table = 'admins';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'created_at',
        'updated_at',
        'added_by',
        'com_code'
    ];
}
