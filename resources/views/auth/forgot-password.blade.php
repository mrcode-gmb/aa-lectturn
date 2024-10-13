<x-guest-layout>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div> --}}

    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
 --}}

    <section id="form">
        <form class="form-dd" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form">
                <div class="col-2 form-averter">
                    <div class="avater">
                        <img src="{{ asset('asset/avaters/3d-isolated-man-is-singing-png (2).png') }}" alt="">
                    </div>
                </div>
                <div class="col-2 form-data">
                    <div class="form-label">

                        <div class="form-header">
                            <h4>Forgot your password? 👋🏻</h4>
                            <p>No problem. Just let us know your email address and we will email you a password reset
                                link that will allow you to choose a new one.</p>
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                        </div>
                        <div class="form-body">
                            <div>
                                <div class="form-group">
                                    <input type="email" placeholder=" " name="email" value="{{ old('email') }}"
                                        autofocus required autocomplete="username">
                                    <label for="">Email</label>
                                </div>
                                <x-input-error :messages="$errors->get('email')" />
                            </div>
                            <div class="form-group  mb-5">
                                <button>Email Password Reset Link</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
