    <!doctype html>
    <html class="h-full bg-white" lang="en-us">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="h-full" style="font-family: Bahnschrift;">

    <div class="bg-teal-200 h-screen overflow-hidden flex items-center justify-center">

    <div class="bg-teal-300 w-full sm:h-[1200px] shadow-4xl rounded-lg">

    <div class=" flex min-h-full flex-col justify-center px-2 py-4 lg:px-8 shadow-2xl">

    <h2 class="text-center text-gray-800 mt-8">Welcome to HR System</h2>
    <p class="text-center text-xs">Login in. To see it in action.</p>



    <div class="px-6 py-6 mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg--900">

    <form
    id="frm"
    class="h-fit"
    method="POST"
    action="{{ route('login.process') }}">
    @csrf


    <div>

    <img src="https://tailwindcomponents.com/svg/website-designer-bro.svg" class="" alt="">

    <div>
        <label for="email"></label>

        <div class="flex flex-col my-4">
            <label for="email"
                   class="text-gray-700"
            >Email Address
            </label>
            <input type="email"
                   name="email"
                   class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                   placeholder="JOE@Gmail.com"
                   value="{{ old('email') }}"  >
        </div>


    </div>

    <div>
        <div class="flex flex-col my-4">
            <label for="password" class="text-gray-700">Password</label>
            <div x-data="{ show: false }" class="relative flex items-center mt-2">
                <input :type=" show ? 'text': 'password' "
                       name="password"
                       id="password"
                       class="flex-1 p-2 border pr-10 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                       placeholder="Enter your password"
                       type="password"
                       value="{{ old('password') }}">
                <button @click="show = !show" type="button"
                        class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
                    <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                    </svg>

                    <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
        </div>


        <br>


    </div>


    <div>
        <button type="submit"
                id="BtnSave"
                class="text-center  bg-teal-500 font-medium p-2 md:p-4 text-black w-full">
        Login
        </button>
    </div>
    </div>

    @if ($errors->any())

    @foreach ($errors->all() as $error)

        <div class="mt-4 text-sm text-red-500">{{$error}}</div>

    @endforeach

    @endif





    </form>

    <footer >

    <p class="text-center text-xs mt-20">
    Developed By CruiseBrains.com © 2023
    </p>

    </footer>
    </div>
    </div>


    </div>
    </div>


    </body>
    </html>
