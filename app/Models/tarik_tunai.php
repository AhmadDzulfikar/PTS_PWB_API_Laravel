<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarik_tunai extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nominal',
    ];
}
