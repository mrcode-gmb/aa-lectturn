<x-guest-layout>
    <section id="form">
        <form class="form-dd" method="POST" action="{{ route('register') }}">
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
                            <h4>Register starts here 🚀</h4>
                            <p>Make your app management easy and fun!</p>
                        </div>
                        <div class="form-body">
                            <div>
                                <div class="form-group">
                                    <input id="name" placeholder=" " type="text" name="name"
                                        value="{{ old('name') }}" required autofocus autocomplete="name">
                                    <label for="">Full Name</label>
                                </div>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <div class="form-group">
                                    <input type="email" placeholder=" " name="email" value="{{ old('email') }}"
                                        required autocomplete="username">
                                    <label for="">Email</label>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <div class="form-group flex-50">
                                    <input type="Password" placeholder=" " id="password" name="password" required
                                        autocomplete="new-password">
                                    <label for="">Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <div class="form-group flex-50">
                                    <input type="Password" placeholder=" " name="password_confirmation"
                                        autocomplete="new-password">
                                    <label for="">Comfirm Password</label>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="form-group  mb-5">
                                <button :disabled="form.processing">SIGN UP</button>
                            </div>
                            <div class="form-group text-center mb-5">
                                <p>Already have an account? <a href="{{route('login')}}"> Log in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
