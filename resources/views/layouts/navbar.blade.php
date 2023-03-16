@include('layouts.app')
<div class="w-full border-2 h-12 w-9/12 justify-center mx-auto mt-4 rounded-lg flex">

    <div class=" flex">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/trackproicon.svg') }}" alt="logo" width="12%" height="12%"
                class="py-1.5 px-1.5 mt-1.5">
        </a>
        <ul class="flex mb-8 mr-12">
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="{{ route('companies.index') }}">Companies</a>
            </li>
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="{{ route('projects.index') }}">Projects</a>
            </li>
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="{{ route('employees.index') }}">Employees</a>
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="{{ route('stages.index') }}">Stages</a>
            </li>
        </ul>

    </div>

    <div class="space-x-2">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">

                Logout
                <span class="ml-5 text-blue-900">Last Login 10:12:2023 Afternoon ...</span>
            </button>
        </form>

    </div>

</div>
