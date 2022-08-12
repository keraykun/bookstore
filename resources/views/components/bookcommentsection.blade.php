@foreach ($comments->comments as $comment)
<figure class="comment-article flex flex-col p-3 border-b border-r border-gray-300">
    <article class="comment-star py-1">
        @switch(number_format($comment->user->rating->rating))
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
    </article>
    <article class="comment-info py-1">
        <small class="text-gray-500 font-bold">{{ $comment->user->name }}</small>
        <blockquote class="p-1 leading-normal">
           {{ $comment->description }}
        </blockquote>
    </article>
    <article class="comment-img-list flex py-1">
        <img class="comment-img" src=" {{ asset('asset/books/1.jpg') }}" alt="">
        <img class="comment-img" src=" {{ asset('asset/books/1.jpg') }}" alt="">
        <img class="comment-img" src=" {{ asset('asset/books/1.jpg') }}" alt="">
        <img class="comment-img" src=" {{ asset('asset/books/1.jpg') }}" alt="">
    </article>
    <article class="comment-area mt-2">
        <i class="fa fa-thumbs-up text-blue-500"></i> 55
        <i class="fa fa-heart text-red-500"></i> 66
    </article>
</figure>
@endforeach
