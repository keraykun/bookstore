<div class="book-row-footer flex w-100 items-center border-y border-gray-300 p-4">
    <article class="section-of-star-rating  items-start flex flex-col">
        <h1 class="ml-2 pt-2 font-bold text-lg text-primary-color mb-2"><span>{{ number_format($rating->total_average,'2') }}</span> / 5</h1>
        <div class="book-row-footer-rating">
            <div style="font-size: 2rem;">
                @switch(number_format($rating->total_average))
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
            </div>
            <div class="flex justify-start mt-3">
                <p class="font-bold text-primary-color">Total Rating  {{ number_format($rating->total_rating) }}</p>
            </div>
        </div>
    </article>

    <article class="section-of-star-rating self-start ml-4">
            <div class="book-row-footer-rating flex flex-col justify-first items-first border-gray-300 pb-4">
                <!---five star -->
            <div class="star-five m-2 flex">
                <label for="file" class="mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                </label>
                <progress id="file" value="{{ $rating->rating_five }}" max="{{ $rating->total_rating }}"></progress>
                <span class="ml-2 font-bold" style="color:rgb(136, 76, 76);">{{ (($rating->rating_five>0) ? number_format(($rating->rating_five / $rating->total_rating) * 100,2).'%' :'0') }}</span>
            </div>
            <!---for star -->
            <div class="star-for m-2 flex">
                <label for="file" class="mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star unchecked"></span>
                </label>
                <progress id="file" value="{{ $rating->rating_for }}" max="{{ $rating->total_rating }}"></progress>
                <span class="ml-2 font-bold" style="color:rgb(136, 76, 76);">{{ (($rating->rating_for>0)? number_format(($rating->rating_for / $rating->total_rating) * 100,2).'%' :'0') }}</span>

            </div>
                <!---three star -->
            <div class="star-three m-2 flex">
                <label for="file" class="mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star unchecked"></span>
                <span class="fa fa-star unchecked"></span>
                </label>
                <progress id="file" value="{{ $rating->rating_three }}" max="{{ $rating->total_rating }}"></progress>
                <span class="ml-2 font-bold" style="color:rgb(136, 76, 76);">{{ (($rating->rating_three>0) ? number_format(($rating->rating_three / $rating->total_rating) * 100,2).'%' :'0') }}</span>
            </div>
            <!---two star -->
            <div class="star-two m-2 flex">
                <label for="file" class="mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star unchecked"></span>
                <span class="fa fa-star unchecked"></span>
                <span class="fa fa-star unchecked"></span>
                </label>
                <progress id="file" value="{{ $rating->rating_two }}" max="{{ $rating->total_rating }}"></progress>
                <span class="ml-2 font-bold" style="color:rgb(136, 76, 76);">{{ (($rating->rating_two>0) ? number_format(($rating->rating_two / $rating->total_rating) * 100,2).'%' :'0') }}</span>
            </div>
                <!---one star -->
            <div class="star-one m-2 flex">
                <label for="file" class="mr-2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star unchecked"></span>
                <span class="fa fa-star unchecked"></span>
                <span class="fa fa-star unchecked"></span>
                <span class="fa fa-star unchecked"></span>
                </label>
                <progress id="file" value="{{ $rating->rating_one }}" max="{{ $rating->total_rating }}"></progress>
                <span class="ml-2 font-bold" style="color:rgb(136, 76, 76);">{{ (($rating->rating_one>0) ? number_format(($rating->rating_one / $rating->total_rating) * 100,2).'%' :'0') }}</span>
            </div>
        </div>
    </article>
</div>
