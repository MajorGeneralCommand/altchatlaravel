<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user1_id',
        'user2_id',
    ];

    public function chats() {
        return $this->belongsToMany(Chat::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
