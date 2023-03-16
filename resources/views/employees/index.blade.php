@include('layouts.navbar')

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <table class="w-full whitespace-nowrap">
        <tbody>
            @foreach ($employees as $employee)
                <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700   mr-2">
                                {{ $employee->name }}
                            </p>
                        </div>
                    </td>

                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700   mr-2">
                                {{ $employee->description }}
                            </p>
                        </div>
                    </td>

                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600   ml-2">
                                {{ $employee->created_at }}</p>
                        </div>
                    </td>
                    <td class="pl-4">
                        <a href='{{ route('employees.create') }}'>

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
            @endforeach
        </tbody>
    </table>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <a href="{{ route('employees.create') }}">
        <x-page-button>
            Create
        </x-page-button>
    </a>

    <x-page-button>
        Edit
    </x-page-button>

</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <img src="{{ asset('images/trackproicon.svg') }}" alt="Image" width="10%" height="10%">
</div>
