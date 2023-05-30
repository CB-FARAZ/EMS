<!doctype html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMS</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body style="font-family: Bahnschrift;" class="bg-gray-200">

<!-- This is an example component -->

@include('components.layout')

        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main class="ml-6">


                <div class=" flex mt-6 mb-12 gap-4 ml-20 ">
                    <div
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 w-96 h-36 border-r-2 rounded-lg ml-2 px-4 py-4 ">
                        Total Employees

                    </div>
                    <div
                        class="bg-gradient-to-r from-purple-500 to-pink-500 w-96 h-36 border-r-2 rounded-lg ml-2 px-4 py-4">
                        Today Present

                    </div>
                    <div
                        class="bg-gradient-to-r from-violet-500 to-orange-500 w-96 h-36 rounded-lg ml-2 px-4 py-4">
                        Today Absent
                    </div>
                </div>


                <div
                    class=" bg-white md:flex md:items-center md:justify-between shadow rounded-md p-4 md:p-6 xl:p-8 my-6 mx-4 ">

                    <div class="w-full bg-white rounded-lg shadow-md">

                        <div class="text-4xl underline text-gray-400 ">

                            TODAY'S ATTENDANCE LIST


                        </div>
                        <br>
                        <table class="w-full     divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Sr.#
                                </th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User
                                </th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Time-In
                                </th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Time-Out
                                </th>
                                <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Duration
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Hello</td>
                                <td class="px-6 py-4 whitespace-nowrap">Hello</td>
                                <td class="px-6 py-4 whitespace-nowrap">Hello</td>
                                <td class="px-6 py-4 whitespace-nowrap">Hello</td>
                                <td class="px-6 py-4 whitespace-nowrap">Hello</td>
                                <td class="px-6 py-4 whitespace-nowrap">Hello</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

            </main>
            <footer
                class="w-96 mx-auto mt-36 ">

                <p class=" text-gray-400">
                    &copy; 2023 <a href="#" class="hover:underline" target="_blank">Cruisebrains</a>. All rights
                    reserved.
                </p>

            </footer>
        </div>

</body>



<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</html>