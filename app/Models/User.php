<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    protected $fillable = [
        'surname',      //фамилия
        'name',         //имя
        'patronymic',   //отчество
        'role',         //роль
        'phone',        //телефон
        'email',        //почта
        'password',     //пароль
    ];

    /**
     * скрытые атрибуты пользователя
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * отношение "один ко многим" с моделью заказов
     * подсчет заказов для админа
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}