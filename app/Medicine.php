<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'expired_date',
        'availability',
    ];

    /**
     * Cast attributes to specific types.
     *
     * @var array
     */
    protected $casts = [
        'expired_date' => 'date',
        'availability' => 'integer',
    ];
}
