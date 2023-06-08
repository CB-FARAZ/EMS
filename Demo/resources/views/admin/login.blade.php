<!doctype html>
<html class="h-full bg-white" lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    class="h-fit"
                    method="POST"
                    action="{{ route('login.process') }}">
                    @csrf


                    <div>

                        <img src="https://tailwindcomponents.com/svg/website-designer-bro.svg" class="" alt="">

                        <div>
                            <label for="email"></label>

                            <svg class="absolute ml-3 mt-3" width="24" viewBox="0 0 24 24">
                                <path
                                    d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/>
                            </svg>
                            <div class="mt-2">
                                <input id="email"
                                       name="email"
                                       type="email"
                                       placeholder="cruise@brains.com"
                                       autocomplete="email"
                                       class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full"
                                       value="{{ old('email') }}">
                            </div>


                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <svg class="absolute ml-3 mt-16" viewBox="0 0 24 24" width="24">
                                    <path
                                        d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z"/>
                                </svg>
                                <label for="password"></label>

                            </div>

                            <div class="mt-2">
                                <input id="password"
                                       name="password"
                                       type="password"
                                       autocomplete="current-password"
                                       placeholder="Password"
                                       class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full"
                                >



                            </div>


                            <br>


                        </div>


                        <div>
                            <button type="submit"


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
