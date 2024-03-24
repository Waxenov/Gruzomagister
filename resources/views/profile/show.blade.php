<x-app-layout>

    <!-- заголовок страницы -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Данные аккаунта') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <!-- Форма обновления информации профиля -->
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <!-- линия разделения -->
                <x-section-border />
            @endif

            <!-- форма обновления пароля -->
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <!-- линия разделения -->
                <x-section-border />
            @endif

            <!-- форма двухфакторной аутентификации -->
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <!-- линия разделения -->
                <x-section-border />
            @endif

            <!-- форма выхода из других сессий браузера -->
            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <!-- форма удаления аккаунта -->
            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

                <!-- линия разделения -->
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>