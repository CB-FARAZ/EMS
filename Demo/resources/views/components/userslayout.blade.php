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
<body style="font-family: Bahnschrift;">

<!-- This is an example component -->

<div class="mr-12">
<nav class="mt-12 ml-12">

@auth

<div class="text-xl text-end mr-4">

Welcome
{{ '  ,    '.auth()->user()->name }}


</div>

@endauth


</nav>
<div class="flex pt-6">
    <aside id="sidebar"
           class="space-y-4 fixed hidden z-20 h-full  left-0 top-4 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
           aria-label="Sidebar">

<h1 class="text-center text-3xl text-gray-900">
CRUISEBRAINS &copy;
</h1>
<div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200  pt-0 h-full">
<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
<div class="flex-1 px-3  divide-y space-y-1 ">
    <ul class="space-y-2 pb-2">
        <li class="{{ request()->routeIs('emp.dashboard')  ? 'bg-gray-200' : 'text-2xl text-teal-900'  }}">
            <a href="{{ route('emp.dashboard')}}"
               class="text-2xl text-teal-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                </svg>

                <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <br>
        <li class="{{ request()->routeIs('attendence')  ? 'bg-gray-200' : 'text-2xl text-teal-900'  }}">
            <a href="{{ route('attendence')}}"
               class="text-2xl text-teal-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                </svg>


                <span class="ml-3">Attendence</span>
            </a>
        </li>
        <br>


        <li class="{{ request()->routeIs('emp/profile')  ? 'bg-gray-200' : 'text-2xl text-teal-900'  }}">
            <a href="{{ route('emp/profile')}}"
               class="text-2xl text-teal-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group"
              >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                </svg>

                <span class="ml-3">Profile</span>
            </a>
        </li>

        <br>
        <li>
            <form method="POST" action="{{ route('logout')}}"
                  class="text-2xl text-teal-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                @csrf
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                </svg>

                <button type="submit" class="ml-3">
                    Logout
                </button>
            </form>

        </li>
    </ul>


</div>
</div>
</div>


</aside>

