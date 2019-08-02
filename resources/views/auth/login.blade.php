@extends('voyager::app', ['nav' => false, 'sidebar' => false])

@section('content')

    <div class="md:container m-auto sm:w-full sm:mx-0 xl:px-16">
        <div class="min-h-screen flex flex-col justify-center w-full md:w-6/12 lg:w-5/12 xl:w-4/12 m-auto bg-white md:bg-gray-200">
            
            <div class="bg-white md:shadow-xl rounded flex -mt-12">
                <div class="flex flex-col px-12 py-12 mb-4 flex w-full">
                    <h1 class="voyager-h1">Login</h1>
                    <div class="mb-4">
                        <label class="voyager-label" for="username">Username</label>
                        <input class="voyager-input" id="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-6">
                        <label class="voyager-label" for="password">Password</label>
                        <input class="voyager-input" id="password" type="password" placeholder="******************">
                    </div>
                    <div class="flex items-center justify-between mt-8">
                        <button class="bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded" type="button">Sign In</button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection