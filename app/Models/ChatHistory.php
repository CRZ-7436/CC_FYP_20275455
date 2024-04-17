<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatHistory extends Model
{
    use HasFactory;

    // Define which fields can be mass assigned
    protected $fillable = ['user_id', 'prompt', 'response'];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
