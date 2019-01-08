<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;
use App\Notifications\CustomerResetPasswordNotification;
class Customer extends Authenticatable implements Auditable
{
    use \OwenIt\Auditing\Auditable; 
    use Notifiable;
    protected $guard = 'customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['fname','lname','address','contact','password','email','facebook','twitter','gplus'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomerResetPasswordNotification($token));
    }
}
