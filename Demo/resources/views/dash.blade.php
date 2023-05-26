<!doctype html >
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMS</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body style="background:#111827;" >

<!-- This is an example component -->

<div>
    <nav class=" border-b border-gray-200 fixed w-full" style="background-color: #111827">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                            class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="#" class="h-full  text-xl text-red-600 font-bold flex items-center lg:ml-2.5 space-x-2" >
                        <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-10  w-auto ">
                            <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="red"/>
                        </svg>
                        <span class="self-center whitespace-nowrap " >


                           @auth

                                <div>

                                    {{ auth()->user()->name . ',  ' . auth()->user()->type }}

                               </div>

                            @endauth


                        </span>


                        </a>


                </div>


                <ul>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="mt-2 text-red-600">
                            @csrf
                            <button type="submit"
                                    class="hover:underline">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="flex overflow-hidden  pt-16" style="background-color:#111827;" >
        <aside id="sidebar"
               class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
               aria-label="Sidebar" >
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200  pt-0 h-full"  style="background-color:#111827;">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-3  divide-y space-y-1 " style="background:#111827;">
                        <ul class="space-y-2 pb-2">
                            <li>
                                <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                               placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('main') }}"
                                   class="text-base text-red-600 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                         fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <ul class="">
                                <li>
                                    <a href="#" class="text-base text-red-600 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group" onclick="toggleAddUsers()">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                        </svg>
                                        <span class="ml-3">Users</span>
                                    </a>
                                </li>
                                <li id="addUsersOption" style="display: none;">
                                    <a href="#" class="text-xs text-rose-600 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                        <svg class="w-2 h-2 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                        </svg>
                                        <span class="ml-3">Add Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-red-600 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group" onclick="toggleSettings()">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                        </svg>
                                        <span class="ml-3">Profile</span>
                                    </a>
                                </li>

                                <li id="settingsOption" style="display: none;">
                                    <a href="#" class="text-xs text-rose-600 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                        <svg class="w-2 h-2 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                        </svg>
                                        <span class="ml-3"> Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                function toggleAddUsers() {
                                    $("#addUsersOption").toggle();
                                }

                                function toggleSettings() {
                                    $("#settingsOption").toggle();
                                }
                            </script>



                        </ul>
                    </div>
                </div>
            </div>

        </aside>

        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
{{--            <main>--}}
{{--                <div class="pt-6 px-4">--}}
{{--                    <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">--}}
{{--                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">--}}
{{--                            <div class="flex items-center justify-between mb-4">--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <span--}}
{{--                                        class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">$45,385</span>--}}
{{--                                    <h3 class="text-base font-normal text-gray-500">Sales this week</h3>--}}
{{--                                </div>--}}
{{--                                <div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">--}}
{{--                                    12.5%--}}
{{--                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="main-chart"></div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">--}}
{{--                            <div class="mb-4 flex items-center justify-between">--}}
{{--                                <div>--}}
{{--                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>--}}
{{--                                    <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>--}}
{{--                                </div>--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <a href="#"--}}
{{--                                       class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View--}}
{{--                                        all</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="flex flex-col mt-8">--}}
{{--                                <div class="overflow-x-auto rounded-lg">--}}
{{--                                    <div class="align-middle inline-block min-w-full">--}}
{{--                                        <div class="shadow overflow-hidden sm:rounded-lg">--}}
{{--                                            <table class="min-w-full divide-y divide-gray-200">--}}
{{--                                                <thead class="bg-gray-50">--}}
{{--                                                <tr>--}}
{{--                                                    <th scope="col"--}}
{{--                                                        class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                                        Transaction--}}
{{--                                                    </th>--}}
{{--                                                    <th scope="col"--}}
{{--                                                        class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                                        Date & Time--}}
{{--                                                    </th>--}}
{{--                                                    <th scope="col"--}}
{{--                                                        class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                                        Amount--}}
{{--                                                    </th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody class="bg-white">--}}
{{--                                                <tr>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">--}}
{{--                                                        Payment from <span class="font-semibold">Bonnie Green</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 23 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        $2300--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr class="bg-gray-50">--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">--}}
{{--                                                        Payment refund to <span class="font-semibold">#00910</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 23 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        -$670--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">--}}
{{--                                                        Payment failed from <span class="font-semibold">#087651</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 18 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        $234--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr class="bg-gray-50">--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">--}}
{{--                                                        Payment from <span class="font-semibold">Lana Byrd</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 15 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        $5000--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">--}}
{{--                                                        Payment from <span class="font-semibold">Jese Leos</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 15 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        $2300--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr class="bg-gray-50">--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">--}}
{{--                                                        Payment from <span class="font-semibold">THEMESBERG LLC</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 11 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        $560--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">--}}
{{--                                                        Payment from <span class="font-semibold">Lana Lysle</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">--}}
{{--                                                        Apr 6 ,2021--}}
{{--                                                    </td>--}}
{{--                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">--}}
{{--                                                        $1437--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">--}}
{{--                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>--}}
{{--                                    <h3 class="text-base font-normal text-gray-500">New products this week</h3>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">--}}
{{--                                    14.6%--}}
{{--                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">5,355</span>--}}
{{--                                    <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">--}}
{{--                                    32.9%--}}
{{--                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>--}}
{{--                                    <h3 class="text-base font-normal text-gray-500">User signups this week</h3>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">--}}
{{--                                    -2.7%--}}
{{--                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">--}}
{{--                        <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">--}}
{{--                            <div class="flex items-center justify-between mb-4">--}}
{{--                                <h3 class="text-xl font-bold leading-none text-gray-900">Customers Count</h3>--}}
{{--                                <a href="{{ route('show') }}"--}}
{{--                                   class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">--}}
{{--                                    View all--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">--}}
{{--                                <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>--}}
{{--                                <div class="block w-full overflow-x-auto">--}}
{{--                                    <table class="items-center w-full bg-transparent border-collapse">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">--}}
{{--                                                Top Channels--}}
{{--                                            </th>--}}
{{--                                            <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">--}}
{{--                                                Users--}}
{{--                                            </th>--}}
{{--                                            <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px"></th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody class="divide-y divide-gray-100">--}}
{{--                                        <tr class="text-gray-500">--}}
{{--                                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">--}}
{{--                                                Organic Search--}}
{{--                                            </th>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">--}}
{{--                                                5,649--}}
{{--                                            </td>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <span class="mr-2 text-xs font-medium">30%</span>--}}
{{--                                                    <div class="relative w-full">--}}
{{--                                                        <div class="w-full bg-gray-200 rounded-sm h-2">--}}
{{--                                                            <div class="bg-cyan-600 h-2 rounded-sm"--}}
{{--                                                                 style="width: 30%"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr class="text-gray-500">--}}
{{--                                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">--}}
{{--                                                Referral--}}
{{--                                            </th>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">--}}
{{--                                                4,025--}}
{{--                                            </td>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <span class="mr-2 text-xs font-medium">24%</span>--}}
{{--                                                    <div class="relative w-full">--}}
{{--                                                        <div class="w-full bg-gray-200 rounded-sm h-2">--}}
{{--                                                            <div class="bg-orange-300 h-2 rounded-sm"--}}
{{--                                                                 style="width: 24%"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr class="text-gray-500">--}}
{{--                                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">--}}
{{--                                                Direct--}}
{{--                                            </th>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">--}}
{{--                                                3,105--}}
{{--                                            </td>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <span class="mr-2 text-xs font-medium">18%</span>--}}
{{--                                                    <div class="relative w-full">--}}
{{--                                                        <div class="w-full bg-gray-200 rounded-sm h-2">--}}
{{--                                                            <div class="bg-teal-400 h-2 rounded-sm"--}}
{{--                                                                 style="width: 18%"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr class="text-gray-500">--}}
{{--                                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">--}}
{{--                                                Social--}}
{{--                                            </th>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">--}}
{{--                                                1251--}}
{{--                                            </td>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <span class="mr-2 text-xs font-medium">12%</span>--}}
{{--                                                    <div class="relative w-full">--}}
{{--                                                        <div class="w-full bg-gray-200 rounded-sm h-2">--}}
{{--                                                            <div class="bg-pink-600 h-2 rounded-sm"--}}
{{--                                                                 style="width: 12%"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr class="text-gray-500">--}}
{{--                                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">--}}
{{--                                                Other--}}
{{--                                            </th>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">--}}
{{--                                                734--}}
{{--                                            </td>--}}
{{--                                            <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <span class="mr-2 text-xs font-medium">9%</span>--}}
{{--                                                    <div class="relative w-full">--}}
{{--                                                        <div class="w-full bg-gray-200 rounded-sm h-2">--}}
{{--                                                            <div class="bg-indigo-600 h-2 rounded-sm"--}}
{{--                                                                 style="width: 9%"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr class="text-gray-500">--}}
{{--                                            <th class="border-t-0 align-middle text-sm font-normal whitespace-nowrap p-4 pb-0 text-left">--}}
{{--                                                Email--}}
{{--                                            </th>--}}
{{--                                            <td class="border-t-0 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4 pb-0">--}}
{{--                                                456--}}
{{--                                            </td>--}}
{{--                                            <td class="border-t-0 align-middle text-xs whitespace-nowrap p-4 pb-0">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <span class="mr-2 text-xs font-medium">7%</span>--}}
{{--                                                    <div class="relative w-full">--}}
{{--                                                        <div class="w-full bg-gray-200 rounded-sm h-2">--}}
{{--                                                            <div class="bg-purple-500 h-2 rounded-sm"--}}
{{--                                                                 style="width: 7%"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--            <footer--}}
{{--                class="bg-white md:flex md:items-center md:justify-between shadow rounded-lg p-4 md:p-6 xl:p-8 my-6 mx-4">--}}

{{--                <p class="text-center text-sm text-gray-500 my-10">--}}
{{--                    &copy; 2019-2021 <a href="#" class="hover:underline" target="_blank">Themesberg</a>. All rights--}}
{{--                    reserved.--}}
{{--                </p>--}}

{{--            </footer>--}}
        </div>


        <span class="self-center whitespace-nowrap text-red-600">


                           @auth

                <div>
                                    <br>

                                  Last login , {{ Carbon\Carbon::parse(auth()->user()->last_login_at)->diffForHumans() }}

                               </div>

            @endauth


                        </span>
    </div>




</div>
</div>
</body>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</html>
