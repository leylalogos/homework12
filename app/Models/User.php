<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    //is_active
    protected $fillable = [
        'username',
        'email',
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $attributes = [
        'is_active' => true,
        'credit' => 0,
        'role_id' => 2 //normal role
    ];
    public function changeStatus()
    {
        $this->is_active = !$this->is_active;
        $this->save();
    }
    public function changeRole($role_id)
    {
        $this->role_id = $role_id;
        $this->save();
    }


    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
