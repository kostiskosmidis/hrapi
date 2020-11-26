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
    ];

    protected $casts = [
        'from' => 'date',
        'to'   => 'date',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
