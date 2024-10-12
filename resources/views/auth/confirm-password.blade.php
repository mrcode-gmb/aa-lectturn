<x-guest-layout>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div> --}}

    {{-- <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form> --}}

    <section id="form">
        <form class="form-dd" method="POST" action="{{ route('password.confirm') }}">
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
                            <h4>Comfirm password? 👋🏻</h4>
                            <p>This is a secure area of the application. Please confirm your password before continuing.</p>
                        </div>
                        <div class="form-body">
                            <div>
                                <div class="form-group">
                                    <input type="password" placeholder=" " name="password" value="{{ old('password') }}"
                                        autofocus required autocomplete="username">
                                    <label for="">Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('password')" />
                            </div>
                            <div class="form-group  mb-5">
                                <button>Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
