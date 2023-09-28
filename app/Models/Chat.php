<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message'
    ];

    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\User', 'receiver_id', 'id');
    }

    public function isSent()
    {
        return $this->sender_id == auth()->user()->id;
    }
}