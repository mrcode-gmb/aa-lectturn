<x-app-layout>
    <div>
        <section id="mainbody">
            <div class="main-body">
                <div class="str">
                    <div class="str-home">
                        <i class="fa fa-home"></i>
                        <div class="db">
                            <h4>Dashboard / &nbsp;</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="tabs" id="tabls">
                        <div class="">
                            <div class="container-fluiding">
                                <div class="col-md-3">
                                    <div class="icon-flex">
                                        <div class="left">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="right">
                                            <h4>Users</h4>
                                            <p class="percent" id="percent">0%</p>
                                        </div>
                                    </div>
                                    <div class="loader">
                                        <div class="shows" id="shows"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="icon-flex">
                                        <div class="left">
                                            <i class="fa fa-hand-point-right"></i>
                                        </div>
                                        <div class="right">
                                            <h4>Users Approved</h4>
                                            <p class="percent" id="percent1">0%</p>
                                        </div>
                                    </div>
                                    <div class="loader">
                                        <div class="shows" id="shows1"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="icon-flex">
                                        <div class="left">
                                            <i class="fa fa-money-check-alt"></i>
                                        </div>
                                        <div class="right">
                                            <h4>Users Pending</h4>
                                            <p class="percent" id="percent2">0%</p>
                                        </div>
                                    </div>
                                    <div class="loader">
                                        <div class="shows" id="shows2"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="icon-flex">
                                        <div class="left">
                                            <i class="fa fa-user-graduate"></i>
                                        </div>
                                        <div class="right">
                                            <h4>Users Rejected</h4>
                                            <p class="percent" id="percent3">0%</p>
                                        </div>
                                    </div>
                                    <div class="loader">
                                        <div class="shows" id="shows3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @if (Auth::user()->status != 0)
                            @if (Auth::user()->status == 1)
                                <div class="full-chart">
                                    <div class="chart-title flex-class">
                                        <div class="circle-pending">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="circle-text">
                                            <p>Hi, {{ Auth::user()->name }}, Congratulation your application is being
                                                proccessed </p>
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
                                            <p>Hi, {{ Auth::user()->name }}, Congratulation your application has been
                                                approved.
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
                                            <p>Hi, {{ Auth::user()->name }}, Sorry your application cannot be
                                                considered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                            @endif
                        @endif
                    </div>
                </div>

                @if (Auth::user()->role == 1)
                    <div>
                        <div class="tabs" id="tabls">
                            <div class="full-chart">
                                <div class="chart-title">
                                    <h3>Hi {{ Auth::user()->name }} (Super Admin)</h3>
                                    <p>Please click the manage users button to view, approved, or reject user who apply
                                    </p>
                                </div>
                                <div class="dont-have">
                                    <img src="{{ asset('asset/photos/WhatsApp_Image_2024-10-23_at_8.20.45_PM-removebg-preview.png') }}"
                                        alt="">
                                </div>
                                <div class="create-app">
                                    <a href="apply">
                                        Manage Users
                                    </a>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                @else
                    <div>
                        <div class="tabs" id="tabls">
                            <div class="full-chart">
                                <div class="chart-title">
                                    <h3>Hi {{ Auth::user()->name }}</h3>
                                    <p>Please click the apply button to apply</p>
                                </div>
                                <div class="dont-have">
                                    <img src="{{ asset('asset/photos/WhatsApp_Image_2024-10-23_at_8.20.45_PM-removebg-preview.png') }}"
                                        alt="">
                                </div>
                                <div class="create-app">
                                    <a href="apply">
                                        Apply
                                    </a>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                @endif
                <!-- end design dashboard content  -->
            </div>
        </section>
    </div>
    <div class="modal d-nones text-center font-bold" id="modal">
        <div class="modal-dialog">
            <div class="modal-head">
                <p><b>Notifications</b> </p>
            </div>
            <form class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid tempore pariatur molestiae non? Officiis porro perspiciatis magni odio! Voluptate quod consequuntur beatae est totam laboriosam in temporibus ducimus accusamus!
                </p>
                <div class="modal-footer text-center">
                    <button type="button" onclick="modalDismiss()">OK</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const modalDismiss = ()=>{
            document.querySelector("#modal").style.display = "none";
        }
        window.onclick = (e)=>{
            if(e.tar)
        }
        window.onload = () => {
            let loader = document.querySelector(".shows"),
                percent = document.querySelector("#percent");

            let loaderStart = 0,
                loaderEnd = {{ $allUsers < 1 ? 1 : $allUsers }},
                loaderTime = 60;

            let start = setInterval(() => {
                loaderStart++;

                percent.textContent = loaderStart + '+';
                loader.style.width = `${loaderStart}`;
                loader.style.background = `rgb(173, 216, 230)`;


                if (loaderStart == loaderEnd) {
                    clearInterval(start);
                }
            }, loaderTime);


            let loader1 = document.querySelector("#shows1"),
                percent1 = document.querySelector("#percent1");

            let loaderStart1 = 0,
                loaderEnd1 = {{ $allApprovedUsers < 1 ? 1 : $allApprovedUsers }},
                loaderTime1 = 60;

            let start1 = setInterval(() => {
                loaderStart1++;

                percent1.textContent = loaderStart1 + '+';
                loader1.style.width = `${loaderStart1}`;
                loader1.style.background = `rgb(173, 216, 230)`;


                if (loaderStart1 == loaderEnd1) {
                    clearInterval(start1);
                }
            }, loaderTime1);




            let loader2 = document.querySelector("#shows2"),
                percent2 = document.querySelector("#percent2");

            let loaderStart2 = 0,
                loaderEnd2 = {{ $allPendingUsers < 1 ? 1 : $allPendingUsers }},
                loaderTime2 = 60;

            let start2 = setInterval(() => {
                loaderStart2++;

                percent2.textContent = loaderStart2 + '+';
                loader2.style.width = `${loaderStart2}`;
                loader2.style.background = `rgb(173, 216, 230)`;


                if (loaderStart2 == loaderEnd2) {
                    clearInterval(start2);
                }
            }, loaderTime2);


            let loader3 = document.querySelector("#shows3"),
                percent3 = document.querySelector("#percent3");

            let loaderStart3 = 0,
                loaderEnd3 = {{ $allRejectedUsers < 1 ? 1 : $allRejectedUsers }},
                loaderTime3 = 60;

            let start3 = setInterval(() => {
                loaderStart3++;

                percent3.textContent = loaderStart3 + '+';
                loader3.style.width = `${loaderStart3}`;
                loader3.style.background = `rgb(173, 216, 230)`;


                if (loaderStart3 == loaderEnd3) {
                    clearInterval(start3);
                }
            }, loaderTime3);

        }
    </script>
</x-app-layout>
