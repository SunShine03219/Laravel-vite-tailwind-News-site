<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'state',
        'division',
        'round',
        'date',
        'passport',
        'visa',
        'oponent',
        'applied_by',
        'notes',
        'created_by'
    ];

    public function countryDetail()
    {
        return $this->hasOne('App\Models\Country', 'id', 'country');
    }

    public function stateDetail()
    {
        return $this->hasOne('App\Models\State', 'id', 'state');
    }

    public function divisionDetail()
    {
        return $this->hasOne('App\Models\Division', 'id', 'division');
    }

    public function applyerDetail()
    {
        return $this->hasOne('App\Models\User', 'id', 'applied_by');
    }

    public function createrDetail()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }
}
