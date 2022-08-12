@extends('layouts.home-layout')
@section('section-body')

<main class="w-full sm:px-4" style="padding: 10px 0px 50px 0px;">
    <section class="my-2">
     <div class="w-full bg-orange-400 mt-3 text-center text-white py-3 font-bold uppercase" style="font-size: 2em; text-shadow: 2px 4px 3px rgba(0,0,0,0.3);">
        {{ Request()->name }}
    </div>
    <div class="book-search w-full">
       <ul class="flex justify-around my-3">
            <li><b>5,599</b> List of <b>Comedy</b></li>
            <li class="font-bold">
                <p class="mb-2">Price Range</p>
                <div>
                    <label for="">Low</label>
                    <input type="range" value="0" min="0" max="2500" oninput="this.nextElementSibling.value = this.value">
                    <output>0</output>
                </div>
                <div>
                    <label for="">High</label>
                    <input type="range" value="5000" min="2500" max="5000" oninput="this.nextElementSibling.value = this.value">
                    <output>5000</output>
                </div>
            </li>
            <li class="font-bold">
                Rating star
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </li>
       </ul>
    </div>
    <div class="justify-start sm:py-5 flex flex-row gap-y-6 gap-x-6 p-4 flex-wrap">
        @foreach ($books as $book)
        <a href="{{ route('genre.show',['book'=>$book->id,'name'=>$book->name]) }}" style="text-decoration: none; color:black;">
        <div class="cursor-pointer ribbon hover:scale-105 transition duration-300  ease-in-out shadow-inner hover:shadow-md py-2 px-2">
            <div class="ribbon-tag">
                <span><p>Best Sell</p></span>
            </div>
            <div class="flex flex-col justify-between h-full">
                <div class="flex flex-row p-2">
                    <div class="book-picture mr-1">
                        <img class="book-image h-100" src="{{ asset('asset/books/6.jpg') }}" alt="">
                    </div>
                    <div class="book-description relative">
                        <p class="py-1 mx-2"><span>Title :</span> <span class="ml-2">{{ $book->title }}</span></p>
                        <p class="py-1 mx-2"><span>Author :</span> <span class="ml-2">  {{ $book->author->user->name }}</span></p>
                        <p class="py-1 mx-2"><span>Genre : </span>
                        <span class="ml-2">
                            @foreach ($book->genres as $genre)
                                @if ($loop->iteration<=5)
                                    {{ $genre->name }}
                                @else
                                <span class="mt-1" style="color:#7979df; font-weight:normal;">More...</span>
                                    @break
                                @endif
                                @if (!$loop->last)
                                ,
                                @endif
                            @endforeach
                        </span>
                    </p>
                    <p class="py-1 mx-2"><span>Languages : </span>
                        <span class="ml-2">
                            @foreach ($book->languages as $language)
                                @if ($loop->iteration<=5)
                                    {{$language->name }}
                                @else
                                <span class="mt-1" style="color:#7979df; font-weight:normal;">More...</span>
                                    @break
                                @endif
                                @if (!$loop->last)
                                ,
                                @endif
                            @endforeach
                        </span>
                    </p>
                        <p class="py-1 mx-2"><span>Released :</span> <span class="ml-2" > {{ $book->created_at->diffForHumans() }}</span></p>
                        <p class="py-1 mx-2"><span>Reviews </span> <span class="ml-2">{{ number_format( $book->rating_count) }}</span>
                        @switch(number_format($book->total_average))
                            @case(5)
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                                @break
                            @case(4)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                                @break
                            @case(3)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                @break
                            @case(2)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                @break
                            @case(1)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                @break
                            @default
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <span class="fa fa-star unchecked"></span>
                        @endswitch
                    </p>
                        <div class="book-price">
                        <div class="ribbon-curves text-lg bg-red-500"> ₱ {{ number_format($book->price->amount) }}</div>
                        </div>
                    </div>
                </div>
                    <ul class="book-payment">
                    <li>Add to cart <i class="text-blue-600 fa fa-shopping-cart"></i></li>
                    <li>Add to wishlist <i class="text-red-500 fa fa-heart"></i></li>
                </ul>
            </div>
            {{-- <div class="ribbon-footer">
            </div> --}}
            </div>
        </a>
        @endforeach

    </div>
    </section>
    </main>

@endsection
