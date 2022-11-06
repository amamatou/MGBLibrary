<?php

namespace App\Models;

use Faker\Provider\ar_EG\Person;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Abonne;
use App\Models\Personne;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'personne_id',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function abonne()
    {
        return $this->hasOne(Abonne::class);
    }

    public function personnel()
    {
        return $this->hasOne(Personel::class);
    }

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role)
    {
        return $this->roles()->where("nom",$role)->first() !== null;
    }
    public function assignRole( $role)
    {
        return $this->roles()->save($role);
    }
}
