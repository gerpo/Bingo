<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;

    protected static function booted()
    {
        static::created(function ($user) {
            Card::makeCardforUser($user);
        });
    }

    public function card()
    {
        return $this->hasOne(Card::class);
    }
}
