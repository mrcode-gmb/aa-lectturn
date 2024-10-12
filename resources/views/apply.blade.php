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
                                        <p>Please click the apply button to apply as donar or hospital</p>
                                    </div>
                                    <form class="form-apply mt-1" method="POST" action="{{ route('apply.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body form-padding-0">
                                            <div>
                                                <div class="form-group">
                                                    <select autofocus name="papers_present_name">
                                                        <option value="" hidden>select paper present </option>
                                                        <option value="Iterative Algorithms for Numerical Optimization">
                                                            Iterative Algorithms for Numerical Optimization
                                                        </option>
                                                        <option value="Algorithms and Computations of Fixed Points">
                                                            Algorithms and Computations of Fixed Points
                                                        </option>
                                                        <option
                                                            value="Mathematical Modeling in Biology, Medicine, etc.">
                                                            Mathematical Modeling in Biology, Medicine, etc.
                                                        </option>
                                                        <option value="Differential Equations">
                                                            Differential Equations
                                                        </option>
                                                        <option value="Differential Games">
                                                            Differential Games
                                                        </option>
                                                        <option value="Dynamical System">
                                                            Dynamical System
                                                        </option>
                                                        <option value="Numerical Analysis">
                                                            Numerical Analysis
                                                        </option>
                                                        <option value="Fluid Dynamics">
                                                            Fluid Dynamics
                                                        </option>
                                                        <option value="Cryptography and Quantum Computing">
                                                            Cryptography and Quantum Computing
                                                        </option>
                                                        <option
                                                            value="Statistics (Probability, Stochastic, Survey, etc.)">
                                                            Statistics (Probability, Stochastic, Survey, etc.)
                                                        </option>
                                                        <option value="Mathematical Economics and Finance">
                                                            Mathematical Economics and Finance
                                                        </option>
                                                        <option value="Projection Methods for Nonlinear Problems">
                                                            Projection Methods for Nonlinear Problems
                                                        </option>
                                                        <option value="Machine Learning">
                                                            Machine Learning
                                                        </option>
                                                        <option value="Problems Arising from Compressive Sensing">
                                                            Problems Arising from Compressive Sensing
                                                        </option>
                                                        <option value="Mathematical Physics">
                                                            Mathematical Physics
                                                        </option>
                                                    </select>
                                                    <label for="">paper present <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <x-input-error :messages="$errors->get('papers_present_name')" />
                                            </div>
                                            <div class="form-donor-user" id="donorCheck">
                                                <div class="grid grid:3 gap10">
                                                    <div class="form-group">
                                                        <input type="text" placeholder=" "
                                                            value="{{ Auth::user()->name }}" readonly>
                                                        <label for="">Full name <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder=" "
                                                            value="{{ Auth::user()->email }}" readonly>
                                                        <label for="">Email <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div>
                                                        <div class="form-alt">
                                                            <div class="form-group">
                                                                <input type="number" placeholder=" "
                                                                    value="{{ old('mobile_number') }}"
                                                                    name="mobile_number">
                                                                <label for="">WhatsApp phone number <span
                                                                        class="text-danger">*</span></label>
                                                            </div>
                                                            <x-input-error :messages="$errors->get('mobile_number')" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="form-group">
                                                            <select name="title">
                                                                <option value="" hidden>Select Tittle</option>
                                                                <option value="Prof">Prof</option>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Miss">Miss</option>
                                                            </select>
                                                            <label for="">Tittle <span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <x-input-error :messages="$errors->get('title')" />
                                                    </div>
                                                    <div>
                                                        <div class="form-alt">
                                                            <div class="form-group">
                                                                <input type="text" placeholder=" "
                                                                    value="{{ old('occupation') }}" name="occupation">
                                                                <label for="">Occupation</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="form-alt">
                                                            <div class="form-group">
                                                                <input type="text" value="{{ old('organization') }}"
                                                                    placeholder=" " name="organization">
                                                                <label for="">Organization (place of work /
                                                                    study)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="form-alt">
                                                            <div class="form-group">
                                                                <input type="text" value="{{ old('expertise') }}"
                                                                    placeholder=" " name="expertise">
                                                                <label for="">Expertise / research
                                                                    interests</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="form-alt">
                                                            <div class="form-group">
                                                                <input type="text" value="{{ old('nationality') }}"
                                                                    placeholder=" " name="nationality">
                                                                <label for="">Nationality</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="form-group">
                                                            <select name="papers_present">
                                                                <option value="" hidden>Do you have papers to
                                                                    present ?</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                            <label for=""> <span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <p class="caption-input">If yes please make sure you upload the
                                                            papers to present</p>
                                                        <x-input-error :messages="$errors->get('papers_present')" />
                                                    </div>
                                                    <div>
                                                        <div class="form-group">
                                                            <input type="file" placeholder=" "
                                                                value="{{ old('file_upload') }}" name="file_upload">
                                                            <label for="">Upload papers to present</label>
                                                        </div>
                                                        <x-input-error :messages="$errors->get('file_upload')" />
                                                    </div>
                                                </div>
                                                <div class="mt-1">
                                                    <div class="checkBox">
                                                        <input type="checkbox">
                                                        <span>Accept
                                                            <Link>Terms</Link> &
                                                            <Link>Condition</Link>
                                                        </span>
                                                    </div>
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
