<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords; 

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * валидация и сброс пароля
     */
    public function reset(User $user, array $input): void
    {   
        //валидация данных из $input
        Validator::make($input, [
            'password' => $this->passwordRules(),
        ])->validate();
        
        //автозаполнение данных пользователя
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}