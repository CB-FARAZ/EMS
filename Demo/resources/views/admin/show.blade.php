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

<div class="bg-gray-900 opacity-50 hidden " id="sidebarBackdrop"></div>
<div id="main-content" class="h-full w-full bg-gray-50 relative  lg:ml-64">
    <main class="ml-10 px-12">


        <div
            class=" bg-white md:flex md:items-center md:justify-between shadow rounded-md p-4 md:p-6 xl:p-8 my-6 mx-4 ">

            <div class="w-full bg-white rounded-lg shadow-md">

                <div class="text-gray-400 text-4xl  ml-4 ">

                    ALL EMPLOYEES


                </div>

                <div class="flex justify-end space-x-4 mr-2">
                    <div class="">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <a href="{{route('create')}}">
                                Add+
                            </a>
                        </button>

                    </div>
                    {{--                        <div class="">--}}
                    {{--                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
                    {{--                                <a href="{{route('edits')}}">--}}
                    {{--                                    Edit--}}
                    {{--                                </a>--}}
                    {{--                            </button>--}}

                    {{--                        </div>--}}
                </div>

                <br>
                <table class="w-full     divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Sr.#
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Post
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->designation }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <form action="{{ route('edit', ['id' => $user->id]) }}" method="GET">
                                        @csrf
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="green" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="{{ route('del') }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" value="{{ $user->id }}" name="id">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="red" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
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


</div>


</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function toggleAddUsers() {
        $("#addUsersOption").toggle();
        $("#addUsersOption1").toggle();

    }

    function toggleSettings() {
        $("#settingsOption").toggle();
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</html>
