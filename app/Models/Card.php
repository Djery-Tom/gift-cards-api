<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    public $timestamps = false;

    protected $fillable = [
        'name', 'value', 'type_id'
    ];

    public function type()
    {
        return $this->belongsTo(CardType::class, 'type_id', 'id');
    }

}
