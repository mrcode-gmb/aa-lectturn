<x-guest-layout>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div> --}}

    <section id="form">
        <div class="form-dd">
            <div class="form">
                <div class="col-2 form-averter">
                    <div class="avater">
                        <img src="{{ asset('asset/avaters/3d-isolated-man-is-singing-png (2).png') }}" alt="">
                    </div>
                </div>
                <div class="col-2 form-data">
                    <div class="form-label">

                        <div class="form-header">
                            <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
                            @if (session('status') != 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-body">
                            <form method="POST" action="{{ route('verification.send') }}" class="form-group  mb-5">
                                @csrf
                                <button>Resend Verification Email</button>
                            </form>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div  class="form-group  mb-5">
                                    <button type="submit" class="bg-dark">Log Out</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
