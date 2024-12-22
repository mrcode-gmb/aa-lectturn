<x-app-layout>
    <div>
        <section id="mainbody">
            <div class="main-body">
                <div class="str">
                    <div class="str-home">
                        <i class="fa fa-home"></i>
                        <div class="db">
                            <h4>Dashboard / &nbsp;</h4>
                            <p>Profile</p>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class="tabs" id="tabls">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                        <br>
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                        <br>
                        {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
