<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendence</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>


        #countdown span {
            font-size: 26px;
            font-weight: normal;
            margin-left: 20px;
            margin-right: 20px;
            text-align: center;
        }
    </style>

</head>
<body>

@include('components.userslayout')


<div class="bg-gray-200 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
<div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main class="ml-6">

        @if(Session::has('message'))

            <p class="text-green-400 text-xl">{{ Session::get('message') }}</p>

        @endif

        <h1 class="text-5xl mt-2 ml-96 font-bold">
            Mark Your Attendence
        </h1>


        <div
            class="w-fit mx-auto h-fit bg-white  shadow rounded-md p-4 md:p-6 xl:p-8 my-6">


                        <h3 class="flex border-b-2 w-full text-xs">


{{--                        @foreach($attendences as $attendence) @endforeach--}}


{{--                         <p class=" text-gray-400">Today  Time-In: --</p> {{ $attendence->time_in }}--}}

{{--                         <p class=" text-gray-400"> -- | Today  Time-Out: --</p> {{ $attendence->time_out }}--}}



                        </h3>


            <p>

                  <span id="countdown" class="flex justify-center text-6xl text-gray-700 m-12">



                  </span>

                <span class=" mx-96 text-xs">

                      {{ \Carbon\Carbon::now()->format('l M d y') }}

                             </span>

            </p>


            <p class="border-b-2 p-12">

            <div class="my-4 flex items-center justify-center space-x-4">

                <form action="{{route('timer.start')}}"
                      method="Post"

                >
                    @csrf
                    <button
                        class="flex bg-orange-600 hover:bg-orange-300 text-white rounded-lg px-4 py-2  hover:shadow-xl transition duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 mx-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Time-In
                    </button>


                </form>
            </div>


            <div class="my-4 flex items-center justify-center space-x-4">

                @if(session()->has('account_message'))

                    <div class="mb-8 text-green-400 text- font-bold text-lg">

                        {{ session()->get('account_message') }}

                    </div>

                @endif

                <form action="{{route('timer.stop')}}"

                      method="POST"

                >
                    @csrf
                    <button
                        class="flex bg-orange-600 hover:bg-orange-300 text-white rounded-lg px-2 py-2  hover:shadow-xl transition duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 mx-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Time-Out
                    </button>


                </form>
            </div>

            </p>


        </div>

    </main>
    <footer
        class="w-96 mx-auto mt-36 ">

        <p class=" text-gray-400">
            &copy; 2023 <a href="#" class="hover:underline" target="_blank">CruiseBrains</a>. All rights
            reserved.
        </p>

    </footer>
</div>

</body>


</body>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // set the date we're counting down to
    let target_date = new Date('May, 9, 2014').getTime();

    // variables for time units
    let days, hours, minutes, seconds, ms_step = 8;

    // get tag element
    let countdown = $('#countdown');

    setInterval(function () {
        let current_date = new Date().getTime();
        let seconds_left = (target_date - current_date) / 1000;
        days = parseInt(seconds_left / 86400);
        seconds_left = seconds_left % 86400;
        hours = parseInt(seconds_left / 3600);
        seconds_left = seconds_left % 3600;
        min = parseInt(seconds_left / 60);
        sec = parseInt(seconds_left % 60);
        ms_step = parseInt(seconds_left % 60);

        countdown.html('' +
            '<span class="days">' + days + '<b>Days</b></span>' +
            '<span class="hours">' + hours + '<b>Hours</b></span>' +
            '<span class="minutes">' + min + '<b>Minutes</b></span>' +
            '<span class="seconds">' + sec + '<b>Seconds</b></span>' +
            '');

    }, ms_step);
</script>

</html>
