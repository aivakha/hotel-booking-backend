<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name', 'last_name', 'gender', 'phone', 'email', 'password'];

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

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function apartments() {
        return $this->hasMany(Apartment::class);
    }

    public function meals() {
        return $this->hasMany(Meal::class);
    }

    public function leisureActivities() {
        return $this->hasMany(LeisureActivity::class);
    }

    public function apartmentTypes() {
        return $this->hasMany(ApartmentType::class);
    }

    public function bedTypes() {
        return $this->hasMany(BedType::class);
    }

    public function features() {
        return $this->hasMany(Feature::class);
    }

    public function managers() {
        return $this->hasMany(Manager::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }


    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }


    public function generatePassword($password)
    {
        if ($password != null)
        {
            $this->password = bcrypt($password);
            $this->save();
        }
    }

}
