@include('layouts.app')
<div class="w-full border-2 h-12 w-9/12 justify-center mx-auto mt-4 rounded-lg flex">

    <div class="py-1.5 px-1.5">
        <img src="{{ asset('images/trackproicon.svg') }}" alt="logo" width="10%" height="10%">
    </div>

    <div class="space-x-2">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <span class="text-blue-900 font-semibold mr-5">Welcome Back</span>
                Logout
                <span class="ml-5 text-blue-900">Last Login 10:12:2023 Afternoon ...</span>
            </button>
        </form>

    </div>

</div>

<div class="px-8 mt-36">
    <div class="h-full p-3 space-y-2 w-60 dark:bg-gray-900 dark:text-gray-100 border-2">
        <div class="flex items-center p-2 space-x-4">
            <img src="{{ asset('images/trackproicon.svg') }}" alt="logout"
                class="w-12 h-12 rounded-full dark:bg-gray-500">
            <div>
                <h2 class="text-lg font-semibold">{{ Auth::user()->name }}</h2>
                <span class="flex items-center space-x-1">
                    <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-gray-400">View
                        profile</a>
                </span>
            </div>
        </div>
        <div class="divide-y divide-gray-700">
            <ul class="pt-2 pb-4 space-y-1 text-sm">
                <li class="dark:bg-gray-800 dark:text-gray-50">
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>

                        <span>Employees</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                        </svg>
                        <span>Company</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="w-5 h-5 fill-current dark:text-gray-400">
                            <path
                                d="M203.247,386.414,208,381.185V355.4L130.125,191H93.875L16,355.4v27.042l4.234,4.595a124.347,124.347,0,0,0,91.224,39.982h.42A124.343,124.343,0,0,0,203.247,386.414ZM176,368.608a90.924,90.924,0,0,1-64.231,26.413h-.33A90.907,90.907,0,0,1,48,369.667V362.6l64-135.112L176,362.6Z">
                            </path>
                            <path
                                d="M418.125,191h-36.25L304,355.4v27.042l4.234,4.595a124.347,124.347,0,0,0,91.224,39.982h.42a124.343,124.343,0,0,0,91.369-40.607L496,381.185V355.4ZM464,368.608a90.924,90.924,0,0,1-64.231,26.413h-.33A90.907,90.907,0,0,1,336,369.667V362.6l64-135.112L464,362.6Z">
                            </path>
                            <path
                                d="M272,196.659A56.223,56.223,0,0,0,309.659,159H416V127H309.659a55.991,55.991,0,0,0-107.318,0H96v32H202.341A56.223,56.223,0,0,0,240,196.659V463H136v32H376V463H272ZM232,143a24,24,0,1,1,24,24A24,24,0,0,1,232,143Z">
                            </path>
                        </svg>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="w-5 h-5 fill-current dark:text-gray-400">
                            <path
                                d="M453.122,79.012a128,128,0,0,0-181.087.068l-15.511,15.7L241.142,79.114l-.1-.1a128,128,0,0,0-181.02,0l-6.91,6.91a128,128,0,0,0,0,181.019L235.485,449.314l20.595,21.578.491-.492.533.533L276.4,450.574,460.032,266.94a128.147,128.147,0,0,0,0-181.019ZM437.4,244.313,256.571,425.146,75.738,244.313a96,96,0,0,1,0-135.764l6.911-6.91a96,96,0,0,1,135.713-.051l38.093,38.787,38.274-38.736a96,96,0,0,1,135.765,0l6.91,6.909A96.11,96.11,0,0,1,437.4,244.313Z">
                            </path>
                        </svg>
                        <span>Stages</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
