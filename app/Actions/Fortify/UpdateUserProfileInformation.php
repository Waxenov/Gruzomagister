<?php

namespace App\Actions\Fortify;

use App\Models\User; // модель пользователя
use Illuminate\Contracts\Auth\MustVerifyEmail; // обязательное подтверждение почты
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * валидация и обновление профиля пользователя
     */
    public function update(User $user, array $input): void
    {
        //валидация данных из $input
        Validator::make($input, [
            'role' => ['required', 'string', 'max:255'],            //роль
            'name' => ['required', 'string', 'max:255'],            //имя
            'surname' => ['required', 'string', 'max:255'],         //фамилия
            'patronymic' => ['required', 'string', 'max:255'],      //отчество

            'phone' => ['required', 'string', 'min:11', 'max:15',
                         Rule::unique('users')->ignore($user->id)], //телефон

            'email' => ['required', 'email', 'max:255',
                         Rule::unique('users')->ignore($user->id)], //почта
        ])->validateWithBag('updateProfileInformation');


        if ($input['email'] !== $user->email && //если новая почта не совпадает с текущей
            $user instanceof MustVerifyEmail) { //тогда потверждение новой почты
            $this->updateVerifiedUser($user, $input);

        } else {
            $user->forceFill([
                //автозаполнение данных пользователя
                'surname' => $input['surname'],
                'name' => $input['name'],
                'patronymic' => $input['patronymic'],
                'email' => $input['email'],
                'phone' => $input['phone'],
            ])->save();
        }
    }

    /**
     * обновление профиля подтвержденного пользователя
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        // автозаполнение данных пользователя
        $user->forceFill([
            'surname' => $input['surname'],
            'name' => $input['name'],
            'patronymic' => $input['patronymic'],
            'email' => $input['email'],
            'email_verified_at' => null, //обнуление даты подтверждения почты
        ])->save();

        $user->sendEmailVerificationNotification(); //уведомление о подтверждении почты
    }
}