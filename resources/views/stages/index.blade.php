@include('layouts.navbar')

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <h1
        class="font-bold border-2 font-sans text-transparent text-2xl bg-clip-text
        bg-gradient-to-r from-gray-700 to-blue-800">
        STAGES
    </h1>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8 bg-amber-200">
    @if (session()->has('success'))
        <div class="alert alert-success mt-3 font-sans text-gray-700 text-2xl">
            {{ session('success') }}
        </div>
    @endif
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">

    <table class="w-full whitespace-nowrap">
        <tbody>
            @foreach ($stages as $stage)
                <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700   mr-2">
                                {{ $stage->name }}
                            </p>
                        </div>
                    </td>

                    <td class="">
                        <div class="">
                            <p class="text-sm leading-none text-gray-600 mb-2">
                                {{ $stage->status === \App\Enums\StageStatus::Completed ? 100 : 60 }}%
                            </p>
                            <div class="w-full bg-gray-200 h-1">
                                <div class="bg-blue-600 h-1"
                                    style="width: {{ $stage->status === \App\Enums\StageStatus::Completed ? 100 : 60 }}%;">
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="pl-4">
                        <div class="items-start">
                            <p class="text-sm leading-none text-gray-600 ">
                                {{ $stage->description }}
                            </p>
                        </div>
                    </td>
                    <td class="">
                        <div class="flex items-center -space-x-3">

                            <div
                                class='h-10 w-10 text-xs rounded-full bg-gray-100 font-bold text-gray-800 border-2 border-blue-accent-400 text-center flex items-center justify-center'>
                                <span>
                                    {{ $stage->status }}
                                </span>
                            </div>

                        </div>
                    </td>
                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600   ml-2">
                                {{ $stage->created_at }}</p>
                        </div>
                    </td>

                    <td class="pl-4 space-x-3 py-3 flex ">
                        <a href='{{ route('stages.show', $stage->id) }}'>
                            <x-table-button>
                                View
                            </x-table-button>
                        </a>

                        <a href='{{ route('stages.edit', $stage->id) }}'>
                            <x-table-button>
                                Edit
                            </x-table-button>
                        </a>
                        <form method="post" action="{{ route('stages.destroy', $stage->id) }}"
                            onsubmit="return confirm('Are You Sure Want To Delete ?');">
                            @csrf
                            @method('DELETE')
                            <x-table-button>
                                Delete
                            </x-table-button>
                        </form>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto mt-8 ">
    <a href='{{ route('stages.create') }}'>
        <x-page-button>
            Create
        </x-page-button>
    </a>

</div>
