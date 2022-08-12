<div class="book-row-body h-80 mt-5 mb-4">
    <figure class="flex justify-start items-start">
        <img class="" src=" {{ asset('asset/books/1.jpg') }}" alt="">
    </figure>
    <article class="y-5 w-100">
        <menu class="main-info gap-y-4 flex flex-col w-100 h-100 p-2">
            <li><h1 class="font-bold text-lg text-uppercase">{{ $picture->title }}</h1></li>
            <li><span class="font-bold text-gray-600 mr-2">Author:</span><span class="text-primary-color">{{ $picture->author->user->name }}</span></li>
            <li><span class="font-bold text-gray-600 mr-2">Genre:</span>
                <span class="text-primary-color">
                    @foreach ($picture->genres as $genre)
                        {{ $genre->name  }}
                        @if (!$loop->last)
                         ,
                        @endif
                    @endforeach
                </span>
            </li>
            <li><span class="font-bold text-gray-600 mr-2">Language:</span>
                <span class="text-primary-color">
                    @foreach ($picture->languages as $language)
                        {{ $language->name  }}
                        @if (!$loop->last)
                         ,
                        @endif
                    @endforeach
                </span>
            </li>
            <li><span class="font-bold text-gray-600 mr-2">Price:</span><span class="text-primary-color">{{ number_format($picture->price->amount) }}</span></li>
            <li><span class="font-bold text-gray-600 mr-2">Description:</span><span class="text-primary-color">This item is eligible for FREE Click and Collect without a minimum order subject to availability. Details
            </span></li>
            <li><span class="font-bold text-gray-600 mr-2">Note:</span><span class="text-primary-color">This item is eligible for FREE Click and Collect without a minimum order subject to availability. Details
                Alex Pereira – former ‘Winston-boy’ and gayumbero – left Gibraltar in 1998 to escape his unsavoury criminal past. Twenty-one years later, he is back on the Rock – strapped for cash and stranded in an Uppertown bedsit, with no company save for his fading memories.
            </span></li>
        </menu>
   </article>
   <div class="book-price-list mr-2 flex flex-col gap-y-4 justify-start">
    <button type="button" class="bg-blue-500 hover:bg-blue-400 py-2 px-2 flex gap-x-2 shadow-md"><span class=" text-white">Wishlist</span> <i class="fa fa-heart text-red-700"></i></button>
    <button type="button" class="bg-green-500 hover:bg-green-400 py-2 px-4 flex gap-x-2 shadow-md"><span class=" text-white">Cart </span> <i class="fa fa-shopping-cart text-blue-700"></i></button>
</div>
</div>
<div class="flex justify-around mb-3">
   <ul class="flex gap-x-5">
    <li class="flex flex-col gap-y-2"><span class="font-bold text-primary-color">Print length </span><i class="fa fa-file text-primary-color" style="font-size: 2rem;"></i><span>{{ $picture->detail->page ?? 0}} pages</span></li>
    <li class="flex flex-col gap-y-2"><span class="font-bold text-primary-color">Dimensions</span><i class="fa fa-cube text-primary-color" style="font-size: 2rem;"></i><span> {{ number_format( $picture->detail->width,1) ?? 0 }} x {{ number_format( $picture->detail->height,1) ?? 0 }} cm</span></li>
    <li class="flex flex-col gap-y-2"><span class="font-bold text-primary-color">Publication date </span><i class="fa fa-calendar text-primary-color" style="font-size: 2rem;"></i><span>
    @if($picture->detail!=null)
    {{ $picture->detail->created_at->format('M d Y') }}
    @endif
    </li>
    <li class="flex flex-col gap-y-2"><span class="font-bold text-primary-color">Publisher </span><i class="fa fa-building text-primary-color" style="font-size: 2rem;"></i><span> {{ $picture->detail->publisher ?? '...'}}</span></li>
    </ul>

</div>
