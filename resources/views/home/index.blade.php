@include('layouts.navbar')
<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <h1
        class="font-bold border-2 font-sans text-transparent text-2xl bg-clip-text
        bg-gradient-to-r from-gray-700 to-blue-800">
        PROJECTS
    </h1>

</div>

<div class="mt-3 w-9/12 rounded-lg justify-center mx-auto flex justify-between space-x-5">

    <div class="card card-compact  w-full !rounded border rounded-lg px-10 py-5">
        <div class="card-body">
            <h1 class="flex items-center text-2xl font-semibold dark:text-gray-800">Pending</h1>
            <h1 class="flex items-center text-base  dark:text-gray-800">{{ $pending }}<span
                    class=" text-gray-800 text-base  mr-2 px-2.5 py-0.5 rounded dark
                                dark:text-gray-800 ml-2">projects</span>
            </h1>
            <div class="card-actions justify-end">
            </div>
        </div>
    </div>
    <div class="card card-compact  w-full !rounded border rounded-lg px-10 py-5">
        <div class="card-body">
            <h1 class="flex items-center text-2xl font-semibold dark:text-gray-800">Completed</h1>
            <h1 class="flex items-center text-base  dark:text-gray-800">{{ $completed }}<span
                    class=" text-gray-800 text-base  mr-2 px-2.5 py-0.5 rounded dark
                                dark:text-gray-800 ml-2">projects</span>
            </h1>
            <div class="card-actions justify-end">
            </div>
        </div>
    </div>
    <div class="card card-compact  w-full !rounded border rounded-lg px-10 py-5">
        <div class="card-body">
            <h1 class="flex items-center text-2xl font-semibold dark:text-gray-800">Rejected</h1>
            <h1 class="flex items-center text-base  dark:text-gray-800">{{ $rejected }}<span
                    class=" text-gray-800 text-base  mr-2 px-2.5 py-0.5 rounded dark
                                dark:text-gray-800 ml-2">projects</span>
            </h1>
            <div class="card-actions justify-end">
            </div>
        </div>
    </div>
    <div class="card card-compact  w-full !rounded border rounded-lg px-10 py-5">
        <div class="card-body">
            <h1 class="flex items-center text-2xl font-semibold dark:text-gray-800">Active</h1>
            <h1 class="flex items-center text-base  dark:text-gray-800">{{ $total }}<span
                    class=" text-gray-800 text-base  mr-2 px-2.5 py-0.5 rounded dark
                                dark:text-gray-800 ml-2">projects</span>
            </h1>
            <div class="card-actions justify-end">
            </div>
        </div>
    </div>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">

    <table class="w-full whitespace-nowrap">
        <tbody>
            @foreach ($projects as $project)
                <tr tabindex="0" class="focus:outline-none h-16 mb-16">
                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700   mr-2">
                                {{ $project->name }}
                            </p>
                        </div>
                    </td>
                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700   mr-2">
                                {{ $project->description }}
                            </p>
                        </div>
                    </td>
                    <td class="">
                        <div class="flex items-start">
                            <p class="text-base font-medium leading-none text-gray-700   mr-2">
                                {{ $project->status }}
                            </p>
                        </div>
                    </td>
                    <td class="">
                        <div class="">
                            <p class="text-sm leading-none text-gray-600 mb-2">
                                20% Complete</p>
                            <div class="w-full bg-gray-200 h-1">
                                <div class="bg-blue-600 h-1" style="width: 20%">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="">
                        <div class="flex items-center -space-x-3">
                            <div
                                class='h-10 w-10 text-xs rounded-full bg-gray-100 font-bold text-gray-800 border-2 border-blue-accent-400 text-center flex items-center justify-center'>
                                <span>
                                    A
                                </span>
                            </div>

                        </div>
                    </td>
                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600   ml-2">
                                {{ $project->created_at }}</p>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="w-9/12 rounded-lg justify-center mx-auto border-2 mt-8">
    <h1
        class="font-bold border-2 font-sans text-transparent text-2xl bg-clip-text
        bg-gradient-to-r from-gray-700 to-blue-800">
        TRACK PRO THE PERFECT PROJECT MANAGEMENT APP...
    </h1>

</div>
