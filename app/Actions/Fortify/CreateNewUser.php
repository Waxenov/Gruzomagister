<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * сравнивает входные данные и создаёт нового пользователя.
     */
    public function create(array $input): User
    {
        //сравнение данных из формы регистрации
        Validator::make($input, [ 
            'surname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'patronymic' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'role' => ['required', 'string', 'in:client,carrier'], //выбор роли Заказчик или Перевозчик
        ])->validate();

        //назначение пользователю данных из формы регистрации
        $user = User::create([ 
            'surname' => $input['surname'],
            'patronymic' => $input['patronymic'],
            'name' => $input['name'],
            'role' => $input['role'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        //назначение роли Заказчика или Перевозчика в зависимости от введенных данных
        if ($input['role'] === 'carrier') {
            $user->assignRole('carrier');
        } else {
            $user->assignRole('client');
        }

        return $user;
    }
}