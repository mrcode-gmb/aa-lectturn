<x-guest-layout>
    <!-- Session Status -->

    <section id="form">
        <form class="form-dd" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form">
                <div class="col-2 form-averter">
                    <div class="avater">
                        <img src="{{asset('asset/avaters/3d-isolated-man-is-singing-png (2).png')}}" alt="">
                    </div>
                </div>
                <div class="col-2 form-data">
                    <div class="form-label">

                        <div class="form-header">
                            <h4>Welcome Back! 👋🏻</h4>
                            <p>Please sign-in to your account and start the adventure</p>
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
                            <div>
                                <div class="form-group mb-5">
                                    <input type="password" placeholder=" " id="password" name="password" required
                                        autocomplete="current-password">
                                    <label for="">Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('password')" />
                            </div>
                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span
                                        class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="form-group  mb-5">
                                <button>SIGN IN</button>
                            </div>
                            <div class="form-group mb-5">
                                <a class="text-danger" href="{{route('password.request')}}">Forgot your password?
                                </a>
                            </div>
                            <div class="form-group text-center mb-5">
                                <p>New on our platform?<a href="{{route('register')}}"> Create an account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
