@include('layouts.navbar')
<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <table class="w-full whitespace-nowrap">
        <tbody>

            <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                <td class="">
                    <div class="flex items-start">
                        <p class="text-base font-medium leading-none text-gray-700 mr-2">
                            Name
                        </p>
                    </div>
                </td>

                <td class="">
                    <div class="flex items-start">
                        <p class="text-base font-medium leading-none text-gray-700 mr-2">
                            Description
                        </p>
                    </div>
                </td>
                <td class="pl-4">
                    <div class="items-start">
                        <p class="text-sm leading-none text-gray-600 ">
                            Status
                        </p>
                    </div>
                </td>
                <td class="pl-5">
                    <div class="flex items-center">
                        <p class="text-sm leading-none text-gray-600 ml-2">
                            Date Created </p>
                    </div>
                </td>
                <td class="pl-5">
                </td>
            </tr>
        </tbody>

    </table>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <table class="w-full whitespace-nowrap">
        <tbody>
            @foreach ($companies as $company)
                <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                {{ $company->name }}
                            </p>
                        </div>
                    </td>

                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                {{ $company->description }}
                            </p>
                        </div>
                    </td>
                    <td class="pl-4">
                        <div class="items-start">
                            <p class="text-sm leading-none text-gray-600 ">
                                Active
                            </p>
                        </div>
                    </td>

                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600 ml-2">
                                {{ $company->created_at }}</p>
                        </div>
                    </td>
                    <td class="pl-4">
                        <a href='{{ route('companies.create') }}'>

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

        </tbody>
        @endforeach
    </table>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <a href="{{ route('companies.create') }}">
        <x-page-button>
            Create
        </x-page-button>
    </a>
    <a href="#">
        <x-page-button>
            Edit
        </x-page-button>
    </a>

</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <img src="{{ asset('images/trackproicon.svg') }}" alt="Image" width="10%" height="10%">
</div>
