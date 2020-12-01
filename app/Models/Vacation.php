<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'user_id',
    ];

    protected $casts = [
        'from' => 'datetime',
        'to'   => 'datetime',
        ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
