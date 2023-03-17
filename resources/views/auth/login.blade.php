@include('layouts.app')

<body>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 mt-36">
        <div class="mx-auto max-w-lg">
            <br>
            <img src="{{ asset('images/trackproicon.svg') }}" alt="image" class="px-56">

            <form action="{{ route('login') }}" method="POST"
                class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                <p class="text-center text-lg font-medium">Sign in to your account</p>

                <div>
                    <label for="email" class="block text-xs font-medium text-gray-700">
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="james@trackpro.com.com"
                        class="placeholder:px-5 mt-1 w-full rounded-md border-2 border-gray-400 shadow-sm sm:text-sm h-12" />
                    @error('email')
                        <div class="alert alert-danger "> {{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs font-medium text-gray-700">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="........"
                        class="placeholder:px-5 placeholder:font-mono mt-1 w-full rounded-md border-2 border-gray-400 shadow-sm sm:text-sm h-12" />
                    @error('password')
                        <div class="alert alert-danger "> {{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md
                    shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                     focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 h-10">
                    Login
                </button>

                <p class="text-center text-sm text-gray-500">
                    Dont have an account?
                    <a class="underline" href="{{ route('register') }}">Sign up</a>
                </p>

            </form>
        </div>
    </div>
</body>
