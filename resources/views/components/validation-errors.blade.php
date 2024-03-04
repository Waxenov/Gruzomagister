@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Упс! Что-то пошло не так...') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            
            <li>Почта или телефон уже зарегистрированы.</li> 
            <li>Пароль должен быть больше 8 символов.</li>
        </ul>
    </div>
@endif
