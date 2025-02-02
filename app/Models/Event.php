<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'city',
        'private',
        'description',
        'date',
        'items',
        'image',
        'user_id'
    ];
    use HasFactory;
    protected $casts = [
        'items' => 'array'
    ];
    protected $dates = ['date'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
