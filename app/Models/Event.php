<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'image', 'event_date', 'location', 'status'
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'datetime',
        ];
    }
}