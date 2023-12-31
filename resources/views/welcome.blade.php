@extends('layouts.template')
@section('title', 'Home')
@section('article')
<h2 class="font-bold underline text-center">This is home</h2>
<div class="w-full m-auto mt-6 flex justify-center flex-wrap">

    @for($i = 0; $i < 10; $i++) <div class="max-w-4xl px-10 my-4 py-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center">
            <span class="font-light text-gray-600">mar 10, 2019</span>
            <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">Design</a>
        </div>
        <div class="mt-2">
            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">Accessibility tools for designers
                and developers</a>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita
                dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus
                nihil quis facere in modi ratione libero!</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <a class="text-blue-600 hover:underline" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">Read more</a>
            <div>
                <a class="flex items-center" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">
                    <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block"
                        src="{{asset('images/default.png')}}"
                        alt="avatar">
                    <h1 class="text-gray-700 font-bold">Someone on internet</h1>
                </a>
            </div>
        </div>
</div>
@endfor
</div>

@endsection