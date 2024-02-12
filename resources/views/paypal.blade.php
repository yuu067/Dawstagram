@extends('layouts.template')
@section('article')


<div>
    <h2 class="font-bold underline text-center mt-5 text-3xl">Buy followers</h2>
    <p class="text-center">Payment Method: Paypal</p>
{{-- email:sb-ssxpp29428884@personal.example.com
pass: 0UD_$4Ln --}}
    <div class="container text-center mx-auto">
        <p class="text-center"><b>Price:</b> 10€ - 50 followers</p>
        <img class="mx-auto w-1/5" src="{{asset('images/BuyFollowers.jpg')}}" alt="idk">
        <div class="text-center mt-4">
            @if ($message = Session::get('success'))
                          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class=" absolute top-0 bottom-0 right-0 px-4 py-3" data-bs-dismiss="alert" aria-label="Close">X</button>
                          </div>
                        @endif
      
                        @if ($message = Session::get('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4" role="alert">
                              <strong>{{ $message }}</strong>
                              <button type="button" class=" absolute top-0 bottom-0 right-0 px-4 py-3" data-bs-dismiss="alert" aria-label="Close">X</button>
                            </div>
                        @endif
            <a href="{{ route('paypal.payment') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 mt-4 rounded focus:outline-none focus:shadow-outline">
                Buy
            </a>
        </div>
    </div>

</div>


@endsection

