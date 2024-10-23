<x-app-layout>
    <section>
        <div class="main">
            <section id="mainbody">
                <div class="main-body">
                    <!-- start Dashboard tabs -->
                    <div class="str">
                        <div class="str-home">
                            <i class="fa fa-home"></i>
                            <div class="db">
                                <h4>Dashboard / &nbsp;</h4>
                                <p>Registration</p>
                            </div>
                        </div>
                    </div>
                    <div class="str">
                        <x-auth-session-status class="mb-4" :status="session('success')" />
                    </div>
                    @if (Auth::user()->status != 0)
                        <div class="was-apply">
                            <div class="tabs" id="tabls">
                                @if (Auth::user()->status == 1)
                                    <div class="full-chart">
                                        <div class="chart-title flex-class">
                                            <div class="circle-pending">
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                            <div class="circle-text">
                                                <p>Hi, Abubakar Mrcode, Congratulation Your Application Is Inreview
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif (Auth::user()->status == 2)
                                    <div class="full-chart">
                                        <div class="chart-title flex-class">
                                            <div class="circle-success">
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                            <div class="circle-text">
                                                <p>Hi, Abubakar Mrcode, Congratulation Your Application Is Approved
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif (Auth::user()->status == 3)
                                    <div class="full-chart">
                                        <div class="chart-title flex-class">
                                            <div class="circle-rejected">
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                            <div class="circle-text">
                                                <p>Hi, Abubakar Mrcode, Congratulation Your Application Is Rejected
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="now-apply">
                            <div class="tabs" id="tabls">
                                <div class="full-chart">
                                    <div class="chart-title">
                                        <h3>Hi Abubakar Mrcode</h3>
                                        <p>Make sure you have complete the payment before share your reciept</p>
                                    </div>
                                    <form class="form-apply mt-1" method="POST" action="{{ route('apply.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body form-padding-0">
                                            <div class="form-donor-user" id="donorCheck">
                                                <div class="grid grid:3 gap10">
                                                    <div>
                                                        <div class="form-group">
                                                            <input type="file" placeholder=" "
                                                                value="{{ old('file_upload') }}" name="file_upload">
                                                            <label for="">Upload Reciept</label>
                                                        </div>
                                                        <x-input-error :messages="$errors->get('file_upload')" />
                                                    </div>
                                                    <div>
                                                        <div class="form-group">
                                                            <textarea name="" placeholder="comment (Optional)" id="" cols="30" rows="10"></textarea>
                                                        </div>
                                                        <x-input-error :messages="$errors->get('comment')" />
                                                    </div>
                                                </div>
                                                <div class="mt-1">
                                                    <div class="form-group form-btn-look">
                                                        <button>Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </section>
</x-app-layout>
