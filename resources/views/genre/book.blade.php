@extends('layouts.home-layout')
@section('section-body')
    <main class="w-full flex flex-row gap-y-4 h-100 w-100">
        <div class="book-row-left h-100 w-100">
           <section class="book-row-left-1 flex flex-col  border-r border-gray-300">
                <x-bookpicture :picture='$book'/>
                <x-bookratingstar :rating='$book'/>
           </section>
            <section class="section-sort relative book-row-left-1  border-gray-300 border-b flex justify-between flex-row">
                <x-bookproductreviews :review='$book'/>
          </section>
          <section class="comment-section">
                <x-bookcommentsection :comment='$book'/>
          </section>
        </div>
        <div class="book-row-right w-100 self-start border">
            <section class="flex flex-row mt-5 border-b border-gray-300 pr-2">
                <div class="">
                    <figure class="w-100 h-100 p-2 flex justify-center item-center flex-col">
                        <img class=" shadow-md" src=" https://i.insider.com/5eea91594dca6834276c1f24?width=700" alt="">
                        <figcaption class="mt-2 text-center"><span class="font-bold text-gray-500"> Followers: </span> <span> 155,199,555</span></figcaption>
                    </figure>
                </div>
                <div class="w-100 flex flex-col ">
                    <h1 style="font-size: 2rem;" class="text-lg font-bold text-gray-600 mb-2">Author</h1>
                    <ul class="social-media-accounts flex gap-x-3 mb-3">
                        <li><a href="#"><i class="fab fa-twitter text-blue-400"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook text-blue-600"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram text-orange"></i></a></li>
                    </ul>
                   <ul class="flex flex-col gap-y-2 leading-5 pb-3">
                        <li><span class="text-gray-600 font-bold mr-2">Name :</span> <span class="break-words">{{ $book->author->user->name ?? '' }}</span></li>
                        <li><span class="text-gray-600 font-bold mr-2">Born :</span> <span class="break-words">

                           {{ $book->author->user->details->birth_of_month->format('M d Y') }}
                           (age {{   date('Y') - $book->author->user->details->birth_of_month->format('Y') }} years),

                            {{ $book->author->user->details->address?? '...' }}, {{ $book->author->user->details->city->name ?? '...' }}</span></li>
                        <li><span class="text-gray-600 font-bold mr-2">Country :</span> <span class="break-words">{{ $book->author->user->details->country->name ?? '...'}}</span></li>
                        <li><span class="text-gray-600 font-bold mr-2">Organizations founded :</span> <span class="break-words">Bonuan Boquig National High School</span></li>
                        <li><span class="text-gray-600 font-bold mr-2">Awards :</span>
                            <span class="break-words">
                                @foreach ($book->author->awards as $award)
                                 {{ $award->title.' ' }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </span>
                        </li>
                        <li><span class="text-gray-600 font-bold mr-2">About the Author :</span> <span class="break-words"> Legion of Honour, Hugo Award for Best Novel,  She wrote a seven-volume children's fantasy series, Harry Potter,</span></li>
                    </ul>
                </div>
            </section>
            <section class="section-author-book">
                <div class="author-title">
                    <h1 class="p-2 text-center font-bold text-primary-color">Author Owned Books</h1>
                </div>
                <div>
                    <ul class="p-3 gap-y-5 gap-x-5 flex flex-wrap">
                       @foreach($book->author->books as $list_book)
                            <li>
                            <a href="{{ route('genre.show',['book'=>$list_book->id,'name'=>$list_book->name]) }}" class="hover:no-underline">
                            <figure >
                                <img class="comment-img " style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" src=" {{ asset('asset/books/1.jpg') }}" alt="">
                                <figcaption>
                                    <ol class="flex flex-col gap-y-2">
                                        <li class="mt-2"><p class="text-ellipsis overflow-hidden ... w-24 whitespace-nowrap text-lg font-bold" >{{ $list_book->title }}</p></li>
                                        <li>
                                            @switch(number_format($list_book->total_average_rating))
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
                                        </li>
                                        <li class=""><p>Review : {{ number_format($list_book->total_rating) }}</p></li>
                                    </ol>
                                </figcaption>
                            </figure>
                        </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </main>
@endsection
