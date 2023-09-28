<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
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
        'document_path',
        'signed_path'
    ];


    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\User', 'receiver_id', 'id');
    }

    public function documentRealPath()
    {
        if (empty($this->document_path)) {
            return '';
        }
        return asset('storage/' . $this->document_path);
    }

    public function signedRealPath()
    {
        if (empty($this->signed_path)) {
            return '';
        }
        return asset('storage/' . $this->signed_path);
    }
}