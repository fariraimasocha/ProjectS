@include('layouts.navbar')

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <table class="w-full whitespace-nowrap">
        <tbody>

            <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                <td class="">
                    <div class="flex items-start">
                        <p class="text-base font-medium leading-none text-gray-700   mr-2">
                            Farai
                        </p>
                    </div>
                </td>
                <td class="">
                    <div class="">
                        <p class="text-sm leading-none text-gray-600 mb-2">
                            50% Complete</p>
                        <div class="w-full bg-gray-200 h-1">
                            <div class="bg-blue-600 h-1" style="width: 20%">
                            </div>
                        </div>
                    </div>
                </td>

                <td class="pl-4">
                    <div class="items-start">
                        <p class="text-sm leading-none text-gray-600 ">
                            PBC
                        </p>
                    </div>
                </td>
                <td class="">
                    <div class="flex items-center -space-x-3">

                        <div
                            class='h-10 w-10 text-xs rounded-full bg-gray-100 font-bold text-gray-800 border-2 border-blue-accent-400 text-center flex items-center justify-center'>
                            <span>
                                BG
                            </span>
                        </div>

                    </div>
                </td>
                <td class="pl-5">
                    <div class="flex items-center">
                        <p class="text-sm leading-none text-gray-600   ml-2">
                            10/12/2020</p>
                    </div>
                </td>
                <td class="pl-4">
                    <a href='{{ route('stages.create') }}'>
                        <x-table-button>
                            Create
                        </x-table-button>
                    </a>

                    <a href='#'>
                        <x-table-button>
                            Edit
                        </x-table-button>
                    </a>

                    <a href='#'>
                        <x-table-button>
                            View
                        </x-table-button>
                    </a>
                </td>

            </tr>
            <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                <td class="">
                    <div class="flex items-start">
                        <p class="text-base font-medium leading-none text-gray-700   mr-2">
                            Farai
                        </p>
                    </div>
                </td>
                <td class="">
                    <div class="">
                        <p class="text-sm leading-none text-gray-600 mb-2">
                            50% Complete</p>
                        <div class="w-full bg-gray-200 h-1">
                            <div class="bg-blue-600 h-1" style="width: 20%">
                            </div>
                        </div>
                    </div>
                </td>

                <td class="pl-4">
                    <div class="items-start">
                        <p class="text-sm leading-none text-gray-600 ">
                            PBC
                        </p>
                    </div>
                </td>
                <td class="">
                    <div class="flex items-center -space-x-3">

                        <div
                            class='h-10 w-10 text-xs rounded-full bg-gray-100 font-bold text-gray-800 border-2 border-blue-accent-400 text-center flex items-center justify-center'>
                            <span>
                                BG
                            </span>
                        </div>

                    </div>
                </td>
                <td class="pl-5">
                    <div class="flex items-center">
                        <p class="text-sm leading-none text-gray-600   ml-2">
                            10/12/2020</p>
                    </div>
                </td>
                <td class="pl-4">
                    <a href='{{ route('projects.create') }}'>

                        <button
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600   py-3 px-5 bg-gray-100 rounded hover:bg-gray-200     focus:outline-none">Create</button>
                    </a>
                    <a href='#'>

                        <button
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600   py-3 px-5 bg-gray-100 rounded hover:bg-gray-200     focus:outline-none">Edit</button>
                    </a>

                    <a href='#'>

                        <button
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600   py-3 px-5 bg-gray-100 rounded hover:bg-gray-200     focus:outline-none">View</button>
                    </a>
                </td>

            </tr>

        </tbody>
    </table>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <x-page-button>
        Create
    </x-page-button>

    <x-page-button>
        Edit
    </x-page-button>

</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <img src="{{ asset('images/trackproicon.svg') }}" alt="Image" width="10%" height="10%">
</div>
