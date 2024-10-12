<x-guest-layout>
    {{-- <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form> --}}

    <section id="form">
        <form class="form-dd" method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form">
                <div class="col-2 form-averter">
                    <div class="avater">
                        <img src="{{asset('asset/avaters/3d-isolated-man-is-singing-png (2).png')}}" alt="">
                    </div>
                </div>
                <div class="col-2 form-data">
                    <div class="form-label">

                        <div class="form-header">
                            <h4>Reset password? 👋🏻</h4>
                            {{-- <p>This is a secure area of the application. Please confirm your password before continuing.</p> --}}
                        </div>
                        <div class="form-body">
                            <div>
                                <div class="form-group">
                                    <input type="email" placeholder=" " name="email" :value="old('email', $request->email)"
                                        autofocus required autocomplete="username">
                                    <label for="">Email</label>
                                </div>
                                <x-input-error :messages="$errors->get('email')" />
                            </div>
                            <div>
                                <div class="form-group">
                                    <input type="password" placeholder=" " name="password" :value="old('password', $request->password)"
                                        autofocus required autocomplete="username">
                                    <label for="">Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('email')" />
                            </div>
                            <div>
                                <div class="form-group">
                                    <input type="password_confirmation" placeholder=" " name="password_confirmation" :value="old('password_confirmation', $request->password_confirmation)"
                                        autofocus required autocomplete="username">
                                    <label for="">Confirm Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" />
                            </div>
                            <div class="form-group  mb-5">
                                <button>Reset Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
