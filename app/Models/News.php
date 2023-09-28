<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class News extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'create_date',
        'title',
        'category',
        'content',
    ];

    public function categoryDetail()
    {
        return $this->hasOne(Categories::class, 'id', 'category');
    }
}