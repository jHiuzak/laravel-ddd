<?php

// Function of models in DDD: acessories, mutators, casts, relationships

namespace Domain\Tasks\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Task extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task',
        'category'
    ];
}
