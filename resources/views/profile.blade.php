@extends('layouts.template')
@section('title', 'Profile')
@section('article')

    <section class="bg-gray-100">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">@ {{auth()->user()->username}}</h2>
                    <form action="" class="mt-4 text-gray-600 text-lg">
                        <div class="mt-8">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{auth()->user()->name}}" readonly>
                        </div>
                        <div class="mt-8">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                            <input type="text" name="username" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{auth()->user()->username}}" readonly>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{auth()->user()->email}}" readonly>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="followers">Followers</label>
                            <input type="followers" name="followers" id="followers" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{auth()->user()->followers}}" readonly>
                        </div>
                    </form>
                    
                    <div class="mt-8">
                        <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Modify your profile
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="{{asset('images/'.auth()->user()->image_url)}}" alt="Profile Image" class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>
@endsection