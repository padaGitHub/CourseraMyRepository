<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    use HasFactory;

    protected $table = "register";

    protected $fillable = [
        'username',
        'email',
        'password',
    ];
}
