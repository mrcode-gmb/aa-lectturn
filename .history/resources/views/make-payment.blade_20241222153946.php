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
                    @if (Auth::user()->status != 0)
                        @if (Auth::user()->payment->user_id ?? false)
                            <div class="was-apply">
                                <div class="tabs" id="tabls">
                                    <div class="full-chart">
                                        <div class="chart-title flex-class">
                                            <div class="circle-success">
                                                <i class="fa fa-brands fa-paypal"></i>
                                            </div>
                                            <div class="circle-text">
                                                <p>Payment Reciepts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <x-auth-session-status class="mb-4" :status="session('success')" />
                                    <div class="table-st" id="bloodBanks">
                                        <div class="table-st-head">
                                            <h4>Payment Reciepts</h4>
                                            <div class="input-seach">
                                                <input type="text" placeholder="Search" onkeyup="searchBlood(true)"
                                                    id="searchBarBlood">
                                            </div>
                                        </div>
                                        <div class="table-body">
                                            <table class="student-data">
                                                <tr class="border">
                                                    <th>S/N</th>
                                                    <th>Full name</th>
                                                    <th>Conference type</th>
                                                    <th>Conference amount fee</th>
                                                    <th>Payment reciept</th>
                                                    <th>Comment</th>
                                                    <th>Date</th>
                                                </tr>
                                                <tr class="searchtab rowBlood">
                                                    <td>{{ 1 }}</td>
                                                    <td>{{ Auth::user()->name }}</td>
                                                    <td>{{ Auth::user()->payment->papers_present }}</td>
                                                    <td>{{ Auth::user()->payment->conference_amount }}</td>
                                                    <td>
                                                        @if (Auth::user()->payment->file_upload == '')
                                                            No file
                                                        @else
                                                            <a
                                                                href="{{ Storage::url(Auth::user()->payment->file_upload) }}">Download
                                                                | View</a>
                                                        @endif
                                                    </td>
                                                    <td>{{ Auth::user()->payment->payment_comment }}</td>
                                                    <td>
                                                        @if (Auth::user()->payment->status == 1)
                                                            <div class="status">
                                                                In review
                                                            </div>
                                                        @elseif (Auth::user()->payment->status == 2)
                                                            <div class="status-approved">
                                                                Approved
                                                            </div>
                                                        @else
                                                            <div class="status-reject">
                                                                Rejected
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>{{ Auth::user()->payment->created_at->format("d M, Y h:i A") }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="now-apply">
                                <div class="tabs" id="tabls">
                                    <div class="full-chart">
                                        <div class="chart-title">
                                            <h3>Hi {{ Auth::user()->name }}</h3>
                                            <p>Make sure you have complete through this bank details below the payment before share your reciept</p>
                                        </div>
                                        
                                        <form class="form-apply mt-1" method="POST"
                                            action="{{ route('userPaymentPayment') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="chart-title">
    
                                                <h3>CONFERENCE ACCOUNT</h3>
                                                <p>
                                                    Account Name: Dept of Mathematics PG Program <br>
                                                    Account No: 0059158080 <br>
                                                    {{-- Account Type: Waiting <br> --}}
                                                    Bank: Unity Bank
                                                </p>
                                                <br>
                                            </div>
                                            <div class="form-body form-padding-0">
                                                <div class="form-donor-user" id="donorCheck">
                                                    <div class="grid grid:3 gap10">
                                                        <div>
                                                            <div class="form-group">
                                                                <select name="papers_present" id="papers_present"
                                                                    onchange="selectValue(true)">
                                                                    <option value="" hidden>Conference Type
                                                                    </option>
                                                                    <option value="Onsite presenters">Onsite presenters
                                                                    </option>
                                                                    <option value="Online presenters">Online presenters
                                                                    </option>
                                                                    <option value="Participants without paper">
                                                                        Participants
                                                                        without paper</option>
                                                                    <option value="Accompany">Accompany</option>
                                                                </select>
                                                                <label for=""> <span
                                                                        class="text-danger">*</span></label>
                                                            </div>
                                                            <x-input-error :messages="$errors->get('papers_present')" />
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <select name="conference_amount" id="conference_amount">
                                                                    <option value="" hidden>Conference Amount Fee
                                                                    </option>
                                                                </select>
                                                                <label for=""> <span
                                                                        class="text-danger">*</span></label>
                                                            </div>
                                                            <x-input-error :messages="$errors->get('conference_amount')" />
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <input type="file" placeholder=" "
                                                                    value="{{ old('file_upload') }}" name="file_upload">
                                                                <label for="">Upload Payment Reciept</label>
                                                            </div>
                                                            <x-input-error :messages="$errors->get('file_upload')" />
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <textarea name="payment_comment" placeholder="comment (Optional)"></textarea>
                                                            </div>
                                                            <x-input-error :messages="$errors->get('payment_comment')" />
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
                    @else
                        <div class="was-apply">
                            <div class="tabs" id="tabls">
                                <div class="full-chart">
                                    <div class="chart-title flex-class">
                                        <div class="circle-pending">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="circle-text">
                                            <p>Hello, {{ Auth::user()->name }}! Please click the 'Apply' button below
                                                to submit your application before proceeding with the payment. <u><a
                                                        href='{{ route('apply') }}'>Apply Now</a></u>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </section>
    <script>
        const selectValue = (bool) => {

            const select = document.getElementById("papers_present").value;
            const conference_amount = document.getElementById("conference_amount");

            const array = [{
                    type: 'Onsite presenters',
                    name: 'Faculty members: N50,000',
                },
                {
                    type: 'Onsite presenters',
                    name: 'Students: N25,000',
                },
                {
                    type: 'Onsite presenters',
                    name: 'International: 100USD',
                },

                // Online presenters
                {
                    type: 'Online presenters',
                    name: 'Faculty members: N25,000',
                },
                {
                    type: 'Online presenters',
                    name: 'Students: N15,000',
                },
                {
                    type: 'Online presenters',
                    name: 'International: 50USD',
                },

                // Participants without paper
                {
                    type: 'Participants without paper',
                    name: 'Corporate: N70,000',
                },
                {
                    type: 'Participants without paper',
                    name: 'Individual:: N25,000',
                },

                // Accompany
                {
                    type: 'Accompany',
                    name: 'Individual: N20,000',
                },

            ]

            const filteredPlans = array.filter(plan =>
                (select ? plan.type === select : true)
            );
            conference_amount.innerHTML = '';

            filteredPlans.forEach((options) => {
                const optionElement = document.createElement('option');
                optionElement.textContent = options.name; // Set the display text
                optionElement.value = options.name; // Set the value attribute
                conference_amount.appendChild(optionElement);
            });

        }
    </script>
</x-app-layout>
