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

                    <div class="was-apply">
                        <div class="tabs" id="tabls">
                            <div class="full-chart">
                                <div class="chart-title flex-class">
                                    <div class="circle-success">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="circle-text">
                                        <p>Users who applied for the conference and waitting for neccessary action </p>
                                    </div>
                                </div>
                            </div>
                            <x-auth-session-status class="mb-4" :status="session('success')" />
                            <div class="table-st" id="bloodBanks">
                                <div class="table-st-head">
                                    <h4>Users Applied</h4>
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
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>TItle</th>
                                            <th>Paper Prensentation Title</th>
                                            <th>Occupation</th>
                                            <th>Title of Presentation</th>
                                            <th>Organization</th>
                                            <th>Nationality</th>
                                            <th>Paper Prensentation File</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Accept</th>
                                        </tr>
                                        @foreach ($appliedusers as $key => $applieduser)
                                            <tr class="searchtab rowBlood">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $applieduser['name'] }}</td>
                                                <td>{{ $applieduser['email'] }}</td>
                                                <td>{{ $applieduser['mobile_number'] }}</td>
                                                <td>{{ $applieduser['title'] }}</td>
                                                <td>{{ $applieduser['papers_present_name'] }}</td>
                                                <td>{{ $applieduser['occupation'] }}</td>
                                                <td>{{ $applieduser['title_presentation'] }}</td>
                                                <td>{{ $applieduser['organization'] }}</td>
                                                <td>{{ $applieduser['nationality'] }}</td>
                                                <td>
                                                    @if ($applieduser['papers_present'] == 'no data')
                                                        No file
                                                    @else

                                                    <a href="{{ Storage::url($applieduser['papers_present']) }}">Download
                                                        | View File</a>
                                                    @endif
                                                </td>
                                                <td>{{ $applieduser['date'] }}</td>
                                                <td>
                                                    @if ($applieduser['status'] == 1)
                                                        <div class="status">
                                                            Inreview
                                                        </div>
                                                    @elseif ($applieduser['status'] == 2)
                                                        <div class="status-approved">
                                                            Approved
                                                        </div>
                                                    @else
                                                        <div class="status-reject">
                                                            Rejected
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="#!" onclick="openModal({{ $key + 1 }})">
                                                        <i class="fa fa-edit view"></i>
                                                    </a>
                                                </td>


                                                <div class="modal d-none" id="modal{{ $key + 1 }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-head">
                                                            <p>Approved Or Reject </p>
                                                        </div>
                                                        <form class="modal-body" method="POST"
                                                            action="{{ route('apply.update') }}">
                                                            @csrf
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <select name="status" id="">
                                                                        <option value="" hidden>Choose Status
                                                                        </option>
                                                                        <option value="2">Approve</option>
                                                                        <option value="3">Reject</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="user_id"
                                                                value="{{ $applieduser['user_id'] }}" hidden>
                                                            <div class="modal-footer">
                                                                <button>Save</button>
                                                                <button class="delete" type="button"
                                                                    onclick="closeModal({{ $key + 1 }})">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <script>
        const openModal = (id) => {
            if (id) {
                let modalSave = document.getElementById("modal" + id);
                modalSave.style.display = "flex"
                // alert(id);
            }
        }

        const closeModal = (id) => {
            if (id) {
                let modalSave = document.getElementById("modal" + id);
                modalSave.style.display = "none"
                // alert(id);
            }
        }
        // search
        const searchBlood = (choose) => {
            if (choose) {
                let input = document.getElementById('searchBarBlood').value
                input = input.toLowerCase();
                let x = document.getElementsByClassName('rowBlood');

                for (let i = 0; i < x.length; i++) {
                    if (!x[i].innerHTML.toLowerCase().includes(input)) {
                        x[i].style.display = "none";
                    } else {
                        x[i].style.display = "";
                    }
                }
            }
        };
    </script>
</x-app-layout>
