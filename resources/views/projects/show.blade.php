@include('layouts.navbar')

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <h1 class="font-sans text-2xl px-8 font-semibold">Stages : name status description</h1>
    @foreach ($project->stages as $stage)
        <div class="border-2 mt-3 p-3 rounded-lg justify-center mx-auto w-7/12 mb-4">
            <h1 class="font-sans text-xl">{{ $stage->name }}</h1>
            <h1 class="font-sans text-xl">{{ $stage->status }}</h1>
            <h1 class="font-sans text-xl">{{ $stage->description }}</h1>
            <h1 class="font-sans text-xl font-semibold">Employee Details: name description date created</h1>
            <ul>
                @foreach ($stage->employees as $employee)
                    <li>{{ $employee->name }}</li>
                    <li>{{ $employee->description }}</li>
                    <li>{{ $employee->created_at }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
