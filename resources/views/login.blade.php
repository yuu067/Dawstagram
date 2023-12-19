@extends('layouts.template')
@section('title', 'Login')
@section('article')
<div class="w-full max-w-xs m-auto mt-20">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('login')}}" method="post">
        @csrf
        @error('credentials')
        <p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-3 text-center" role="alert">{{$message}}</p>    
        @enderror
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="username" name="username" type="text" placeholder="Username" value="{{old('username')}}">
        </div>
        @error('username')
        <p style="color:red">{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" name="password" type="password" placeholder="******************"
                value="{{old('password')}}">
        </div>
        @error('password')
        <p style="color:red" class="mb-4">{{$message}}</p>
        @enderror
        <div class="flex items-center justify-between mt-2">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                Forgot Password?
            </a>
        </div>
    </form>
    @endsection