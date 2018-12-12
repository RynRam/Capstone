<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;
use App\Inventory;
class User extends Authenticatable implements Auditable
{
        use \OwenIt\Auditing\Auditable; 
    use Notifiable;
    protected $guard = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->role_id;
    }
    
    public function inventories(){
        return $this->hasMany(Inventory::class);

    }
}
