<!doctype html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body style="font-family: Bahnschrift;" class="">

<!-- This is an example component -->

@include('components.userslayout')

<div id="main-content" class="h-full w-full shadow-2xl bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main class="ml-20">


        <div class=" flex mt-6 mb-12 gap-4 ml-20 ">
            <div
                class="bg-gradient-to-r from-cyan-300 to-blue-500 w-96 h-36 border-r-2 rounded-lg ml-2 px-4 py-4 text-xl">
                Total Users    <span class=" mx-36 text-xl ">



                            @auth

                            {{  \App\Models\User::where('type' , 'user')->count() }}

                        @endauth


                       </span>

                <svg height="auto" viewBox="0 0 400 100" xmlns="http://www.w3.org/2000/svg" ><path d="M0 96.85c5-.406 40-1.837 50-4.064 10-2.228 40-15.282 50-18.208 10-2.927 40-9.487 50-11.06 10-1.572 40-3.16 50-4.665 10-1.504 40-10.378 50-10.376 10 .001 40 14.276 50 10.393 10-3.883 40-43.189 50-49.224 10-6.035 45-10.014 50-11.127" fill="#444cf71a"/><path d="M0 96.85c5-.406 40-1.837 50-4.064 10-2.228 40-15.282 50-18.208 10-2.927 40-9.487 50-11.06 10-1.572 40-3.16 50-4.665 10-1.504 40-10.378 50-10.376 10 .001 40 14.276 50 10.393 10-3.883 40-43.189 50-49.224 10-6.035 45-10.014 50-11.127" fill="none" stroke="orange" stroke-width="1.5"/><g fill="orange"><circle cy="96.851" r="6"/>,<circle cx="50" cy="92.786" r="6"/>,<circle cx="100" cy="74.578" r="6"/>,<circle cx="150" cy="63.518" r="6"/>,<circle cx="200" cy="58.853" r="6"/>,<circle cx="250" cy="48.477" r="6"/>,<circle cx="300" cy="58.87" r="6"/>,<circle cx="350" cy="9.646" r="6"/>,<circle cx="400" cy="-1.481" r="6"/></g></svg>





            </div>
            <div
                class="bg-gradient-to-r from-purple-500 to-pink-200 w-96 h-36 border-r-2 rounded-lg ml-2 px-4 py-4 text-xl">
                Today Present
                <svg height="auto" viewBox="0 0 400 100" xmlns="http://www.w3.org/2000/svg" ><path d="M0 96.85c5-.406 40-1.837 50-4.064 10-2.228 40-15.282 50-18.208 10-2.927 40-9.487 50-11.06 10-1.572 40-3.16 50-4.665 10-1.504 40-10.378 50-10.376 10 .001 40 14.276 50 10.393 10-3.883 40-43.189 50-49.224 10-6.035 45-10.014 50-11.127" fill="#444cf71a"/><path d="M0 96.85c5-.406 40-1.837 50-4.064 10-2.228 40-15.282 50-18.208 10-2.927 40-9.487 50-11.06 10-1.572 40-3.16 50-4.665 10-1.504 40-10.378 50-10.376 10 .001 40 14.276 50 10.393 10-3.883 40-43.189 50-49.224 10-6.035 45-10.014 50-11.127" fill="none" stroke="teal" stroke-width="1.5"/><g fill="teal"><circle cy="96.851" r="6"/>,<circle cx="50" cy="92.786" r="6"/>,<circle cx="100" cy="74.578" r="6"/>,<circle cx="150" cy="63.518" r="6"/>,<circle cx="200" cy="58.853" r="6"/>,<circle cx="250" cy="48.477" r="6"/>,<circle cx="300" cy="58.87" r="6"/>,<circle cx="350" cy="9.646" r="6"/>,<circle cx="400" cy="-1.481" r="6"/></g></svg>
            </div>
            <div
                class="bg-gradient-to-r from-violet-500 to-orange-200 w-96 h-36 rounded-lg ml-2 px-4 py-4 text-xl">
                Today Absent
                <svg height="auto" viewBox="0 0 400 100" xmlns="http://www.w3.org/2000/svg" ><path d="M0 96.85c5-.406 40-1.837 50-4.064 10-2.228 40-15.282 50-18.208 10-2.927 40-9.487 50-11.06 10-1.572 40-3.16 50-4.665 10-1.504 40-10.378 50-10.376 10 .001 40 14.276 50 10.393 10-3.883 40-43.189 50-49.224 10-6.035 45-10.014 50-11.127" fill="#444cf71a"/><path d="M0 96.85c5-.406 40-1.837 50-4.064 10-2.228 40-15.282 50-18.208 10-2.927 40-9.487 50-11.06 10-1.572 40-3.16 50-4.665 10-1.504 40-10.378 50-10.376 10 .001 40 14.276 50 10.393 10-3.883 40-43.189 50-49.224 10-6.035 45-10.014 50-11.127" fill="none" stroke="fuchsia" stroke-width="1.5"/><g fill="fuchsia"><circle cy="96.851" r="6"/>,<circle cx="50" cy="92.786" r="6"/>,<circle cx="100" cy="74.578" r="6"/>,<circle cx="150" cy="63.518" r="6"/>,<circle cx="200" cy="58.853" r="6"/>,<circle cx="250" cy="48.477" r="6"/>,<circle cx="300" cy="58.87" r="6"/>,<circle cx="350" cy="9.646" r="6"/>,<circle cx="400" cy="-1.481" r="6"/></g></svg>
            </div>
        </div>


        <div
            class=" bg-white md:flex md:items-center md:justify-between shadow rounded-md p-4 md:p-6 xl:p-8 my-6 mx-4 ">

            <div class="w-full bg-white  rounded-lg shadow-2xl">

                <div class="text-4xl ml-20 text-gray-500 ">

                    TODAY'S ATTENDANCE LIST


                </div>
                <br>

                <div class="container mx-auto p-4">
                    <div class="ml-12 items-center justify-center">
                        <div class="w-1/2">
                            <form class="flex">
                                <div class="mr-2">
                                    <label for="start-date" class="block text-sm font-medium text-gray-700">
                                        </label>
                                    <input type="date" id="date" name="date"
                                           class="w-full py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <button type="submit"
                                        class="bg-green-500 hover:bg-green-400 text-white py-2 px-4 rounded-sm">Search
                                </button>
                            </form>
                        </div>
                    </div>
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
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
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