<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = ['users'];
    protected $fillable = [
        'name',
        'gender',
        'email',
        'address',
    ];

    protected $dates = ['deleted_at'];
}
