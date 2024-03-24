<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * валидация и обновление пароля пользователя.
     */
    public function update(User $user, array $input): void
    {
        //валидация данных из $input
        Validator::make($input, [
            'current_password' => ['required', 'string', 'current_password:web'], // пароль обязателен, строка, проверка
            'password' => $this->passwordRules(),
        ], [
            'current_password.current_password' => __('Указанный пароль не совпадает с текущим.'),
        ])->validateWithBag('updatePassword');

        //автозаполнение данных пользователя
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}