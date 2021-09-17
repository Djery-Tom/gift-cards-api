<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    protected $table = 'cards_types';
    public $timestamps = false;

    protected $fillable = [
        'name', 'max_avail_value'
    ];

}
