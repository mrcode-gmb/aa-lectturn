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
                                        <p>Users who create account the comprense</p>
                                    </div>
                                </div>
                            </div>
                            <x-auth-session-status class="mb-4" :status="session('success')" />
                            <div class="table-st" id="bloodBanks">
                                <div class="table-st-head">
                                    <h4>Users</h4>
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
                                            <th>Date</th>
                                        </tr>
                                        @foreach ($appliedusers as $key => $applieduser)
                                            <tr class="searchtab rowBlood">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $applieduser['name'] }}</td>
                                                <td>{{ $applieduser['email'] }}</td>
                                                <td>{{ $applieduser['date'] }}</td>
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
