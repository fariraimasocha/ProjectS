@include('layouts.navbar')

<div class="justify-center items-center mx-auto w-5/12 mt-10">

    <h1
        class="font-bold border-2 font-sans text-transparent text-7xl bg-clip-text
        bg-gradient-to-r from-gray-700 to-blue-800">
        CREATE PROJECTS
    </h1>
    <a href="{{ route('projects.index') }}">
        <x-page-button class="mt-5 ">
            Project Index
        </x-page-button>
    </a>

    <form enctype="multipart/form-data" method="post" action="{{ route('projects.store') }}" class="py-5">
        @csrf
        <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
                <input type="text" id="name" name="name"
                    class="block w-full transition duration-150 ease-in-out appearance-none bg-white border-2 border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="sm:col-span-6 pt-5">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
                <textarea id="description" rows="3" name="description"
                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border-2 border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="sm:col-span-6 pt-5">
            <label for="companies" class="block text-sm font-medium text-gray-700">Companies</label>
            <div class="mt-1">
                <select multiple class="w-full border-2 border-gray-400" name="companies[]">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="sm:col-span-6">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <div class="mt-1">
                <input type="text" id="status" name="status"
                    class="block w-full transition duration-150 ease-in-out appearance-none bg-white border-2 border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <x-page-button class="mt-5">
            Create
        </x-page-button>

    </form>

    <img src="{{ asset('images/circle.png') }}" alt="soft" class="animate-ping absolute left-24 top-56"
        width="4%" height="4%">
    <img src="{{ asset('images/circle.png') }}" alt="soft" class="animate-ping absolute" width="4%"
        height="4%">
    <img src="{{ asset('images/circle1.png') }}" alt="soft" class="animate-ping absolute right-32 bottom-8"
        width="4%" height="4%">
    <img src="{{ asset('images/circle1.png') }}" alt="soft" class="animate-ping absolute left-16 bottom-8"
        width="4%" height="4%">

</div>
