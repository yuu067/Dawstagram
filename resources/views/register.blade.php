@extends('layouts.template')
@section('title', 'Register')
@section('article')
<div class="w-full max-w-xs m-auto mt-6">
    <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4" action="{{route('register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                @error('name') style='border-color:red' @enderror id="name" name="name" type="text" placeholder="Name"
                value="{{old('name')}}">
            @error('user')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                @error('user') style='border-color:red' @enderror id="username" name="user" type="text"
                placeholder="Username" value="{{old('user')}}">
            @error('user')
            <p style="color:red">{{$message}}</p>
            @enderror
            @error('user_already')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                @error('email') style='border-color:red' @enderror id="email" name="email" type="text"
                placeholder="example@url.com" value="{{old('email')}}">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
            @error('email_already')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="pic">Upload  file</label>
            <input type="file" id="pic" name="pic" accept="image/*" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold  file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('pic') border-1 border-red-500 @enderror" />


            @error('pic')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input @error('password') style='border-color:red' @enderror
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" name="password" type="password" placeholder="******************"
                value="{{old('password')}}">
            @error('password')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                Confirm Password
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                @error('password_confirmation') style='border-color:red' @enderror id="password_confirmation"
                name="password_confirmation" type="password" placeholder="******************"
                value="{{old('password_confirmation')}}">
            @error('password_confirmation')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="flex items-center justify-center">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Register
            </button>

        </div>
    </form>
    @endsection