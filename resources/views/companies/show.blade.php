@include('layouts.navbar')

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <h1 class="font-sans text-2xl px-8 font-semibold">Description</h1>
    @foreach ($projects as $project)
        <div class="border-2 mt-3 p-3 rounded-lg justify-center mx-auto w-7/12 mb-4">
            <h1 class="font-sans text-xl">{{ $project->name }}</h1>
            <h1 class="font-sans text-xl">{{ $project->status }}</h1>
            <h1 class="font-sans text-xl">{{ $project->description }}</h1>
            <h1 class="font-sans text-xl font-semibold">Employee Details: name description date created</h1>
            <ul>
                @foreach ($project->stages as $stage)
                    <li>{{ $stage->name }}</li>
                    <li>{{ $stage->description }}</li>
                    <li>{{ $stage->created_at }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
