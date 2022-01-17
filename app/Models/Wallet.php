<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wallet extends Model
{
    use HasFactory;

    protected $fillable = ['balance',
        'on_hold',
        'user_id',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
