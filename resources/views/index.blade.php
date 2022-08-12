@extends('layouts.home-layout')
@section('section-body')

<main class="w-full sm:px-4" style="padding: 10px 0px 50px 0px;">
    <section class="carousel w-max  bg-red-300">
        <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-65" src="{{ asset('asset/carousel/1.jpg') }}">
                  </div>
              <div class="carousel-item ">
                <img class="d-block w-100 h-65" src="{{ asset('asset/carousel/2.jpg') }}">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 h-65" src="{{ asset('asset/carousel/3.jpg') }}">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 h-65" src="{{ asset('asset/carousel/4.jpg') }}">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <section class="my-2">
        <div class="w-full bg-red-500 mb-3 text-center text-white py-3 font-bold uppercase" style="font-size: 2em; text-shadow: 2px 4px 3px rgba(0,0,0,0.3);">Most Books Sold !</div>
        <div id="content-slider" class="content-slider justify-center flex flex-row flex-wrap gap-y-4">
                <img class="most-sold" src=" {{ asset('asset/books/1.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/2.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/3.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/4.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/5.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/6.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/7.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/8.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/9.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/6.jpg') }}" alt="">
                <img class="most-sold" src=" {{ asset('asset/books/7.jpg') }}" alt="">
        </div >
        <div class="w-full bg-orange-400 mt-3 text-center text-white py-3 font-bold uppercase" style="font-size: 2em; text-shadow: 2px 4px 3px rgba(0,0,0,0.3);">New Releases Books </div>
        <div class="justify-start sm:py-5 flex flex-row gap-y-6 gap-x-6 p-4 flex-wrap border-l-4 border-r-4 border-orange-400">
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
