<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: Bahnschrift;">

@include('components.layout')

<div class="bg-gray-900 opacity-50 hidden " id="sidebarBackdrop"></div>
<div id="main-content" class="h-full w-full bg-gray-50 relative  lg:ml-64">
    <main class="ml-10 px-12">


        <div
            class=" bg-white md:flex md:items-center md:justify-between shadow rounded-md p-4 md:p-6 xl:p-8 my-6 mx-4 ">

            <div class="w-full bg-white rounded-lg shadow-md">

                <div class="text-gray-500 text-4xl  ml-4 ">

                    REPORTS

                </div>

                <hr>
                <p class="text-base ml-2 text-gray-400">
                    You Can Select Month and User For a Precise Report.

                </p>

                   @foreach($attendences as $attendence)

                   @endforeach
                <div class="flex space-x-8 mt-2">
                    <form action="{{ route('report.search') }}" method="GET">
                        <input type="date" name="date" class="rounded-xl px-2 py-2" value="{{ date('Y-m-d') }}">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 rounded-lg px-6 py-2 text-gray-100 hover:shadow-xl">
                            Search
                        </button>
                    </form>
                </div>


                <br>
                <table class="w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase  border-l-2">
                            Sr.#
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase  border-l-2">
                            User ID
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase  border-l-2">
                            Date
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase  border-l-2">
                            Time-In
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase  border-l-2">
                            Time-Out
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase  border-l-2">
                            Duration
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($attendences as $attendence)

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap border-l-2">{{ $attendence->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap border-l-2">{{ $attendence->user_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap border-l-2">{{ $attendence->date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap border-l-2">{{ $attendence->time_in }}</td>
                            <td class="px-6 py-4 whitespace-nowrap border-l-2">{{ $attendence->time_out }}</td>
                            <td class="px-6 py-4 whitespace-nowrap border-l-2">{{ $attendence->duration }}</td>

                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </main>
    <footer
        class="w-96 mx-auto mt-36 ">

        <p class="text-gray-400">
            &copy; 2023 <a href="#" class="hover:underline" target="_blank">Cruisebrains</a>. All rights
            reserved.
        </p>

    </footer>
</div>


<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>


</body>
</html>
