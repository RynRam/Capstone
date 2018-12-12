<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Customers as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use \OwenIt\Auditing\Auditable; 
    use Notifiable;
    protected $guard = 'customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['fname','lname','address','contact','password','email'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
