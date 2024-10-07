<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'contents',
        'channel_id',
        'user_id'
    ];

    public function channels() {
        return $this->belongsToMany(Channel::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
